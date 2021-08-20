<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\Traits\StripeHanron;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe\Stripe;
class CartController extends Controller
{
    public function addCard(Request $request){
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $user = User::where('id', auth()->id())->first();
            $card = StripeHanron::createToken($request, $stripe);
            $fing = $card->card->fingerprint;
            $a = Cart::create([
                'user_id' => auth()->id(),
                'stripe_token' => $card->id,
                'fingerprint_id' => $fing,
            ]);
            $cus_id = Cart::where('user_id', auth()->id())->first();

            if($cus_id){
                $updateCustomerId = Cart::where('user_id', auth()->id())->where('fingerprint_id', $card->card->fingerprint)->first();

                $cus_retrive = $stripe->customers->retrieve($cus_id->cus_id,[]);
                if($cus_retrive->email !== $user->email){
                    $cus = $stripe->customers->create([
                        'source' => $card->id,
                        'email' => $user->email
                    ]);
                    $updateCustomerId->cus_id = $cus_retrive->id;
                    $updateCustomerId->save();
                }
                else{
                    $updateCustomerId->cus_id = $cus_retrive->id;
                    $updateCustomerId->save();
                    $fingerprint = [];
                    $all = $stripe->customers->allSources(
                        $cus_retrive->id,
                        ['object' => 'card']
                    );
                    foreach ($all->data as $card_item) {
                        array_push($fingerprint, $card_item->fingerprint);
                    }

                    $cus_retrive->default_source = $card->card->id;
                    if(!in_array($card->card->fingerprint, $fingerprint)){
                        $card_payment = $stripe->customers->createSource(
                            $cus_retrive->id,
                            ['source' => $card->id]
                        );
                        $cus_retrive->save();
                    }
                }

                return  response()->json(['message' => 'Your card has been saved.']);


            }
        }catch (\Exception $exception){
            return response()->json(['message'=>$exception->getMessage()]);
        }


    }
}