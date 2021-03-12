<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Stripe;
use Session;
class SubscriptionController extends Controller
{
    public function create(Request $request, Plan $plan)
    {
        $plan = Plan::findOrFail($request->get('plan'));
        $user = $request->user();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        if (!$user->stripe_id) {
            $customer = \Stripe\Customer::create([
                'email' => 'paying.useruser@gmail.com',
            ]);

            $user->stripe_id = $customer->id;
            $user->save();
            $payment = $stripe->subscriptions->create([
                'customer' => 'cus_J6MdPwC0dMTbwi',
                'items' => [
                    ['price' => 'price_1IDV38LV6S2YaGRA7WOHVUvo'],
                ],
            ]);
            dd($payment);
//         $payment= Stripe\Charge::create ([
//            "amount" => 100 * 150,
//            "currency" => "inr",
//            "source" => $request->stripeToken,
//            "description" => "Making test payment."
//        ]);
//        echo '<script type="text/javascript">'
//        , 'history.go(-1);'
//        , '</script>';

        }
    }
    public function card_create(Request $request)
    {
        $user = $request->user();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        try {
            if (!$user->stripe_id) {
                $customer = \Stripe\Customer::create([
                    'email' => 'paying.useruser@gmail.com',
                ]);

                $user->stripe_id = $customer->id;
                $user->save();
                $card = Card::where('card_number', $request->number)->first();

                if ($card === null) {
                    $card = new Card();
                    $card->user_id = Auth::id();
                    $card->card_number = $request->number;
                    $card->save();

                    $card_payment = $stripe->customers->createSource(
                        $user->stripe_id,
                        ['source' => $request->stripeToken]
                    );
                    $card->card_id = $card_payment->id;
                    $card->brand = $card_payment->brand;
                    $card->exp_month = $card_payment->exp_month;
                    $card->exp_year = $card_payment->exp_year;
                    $card->update();
                    Session::flash('success', 'Payment method created successfully.');
                } else {
                    Session::flash('error', 'You already have this payment method.');
                }


            } else {

                $card = Card::where('card_number', $request->number)->where('user_id',Auth::id())->first();
                if ($card === null) {
                    $card = new Card();
                    $card->user_id = Auth::id();
                    $card->card_number = $request->number;
                    $card->save();
                    $card_payment = $stripe->customers->createSource(
                        $user->stripe_id,
                        ['source' => $request->stripeToken]
                    );

                    $card->card_id = $card_payment->id;
                    $card->brand = $card_payment->brand;
                    $card->exp_month = $card_payment->exp_month;
                    $card->exp_year = $card_payment->exp_year;
                    $card->update();

                    Session::flash('success', 'Payment method created successfully.');
                } else {
                    Session::flash('error', 'You already have this payment method.');
                }

            }
//                }
        } catch (\Stripe\Exception\CardException $e) {
            echo 'Status is:' . $e->getHttpStatus() . '\n';
            echo 'Type is:' . $e->getError()->type . '\n';
            echo 'Code is:' . $e->getError()->code . '\n';
            // param is '' in this case
            echo 'Param is:' . $e->getError()->param . '\n';
            echo 'Message is:' . $e->getError()->message . '\n';

//            return back(with($e));
        }
        return Redirect::back();

    }
}

