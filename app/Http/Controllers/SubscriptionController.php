<?php

namespace App\Http\Controllers;

use App\Models\Card;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Stripe;
use Session;
use Stripe\Customer;
use Stripe\StripeClient;

class SubscriptionController extends Controller
{
    public $stripeKey="pk_test_51IDT1rLV6S2YaGRAadUEI9mxO2j2wbfh5Jc69TSDKj7Cdo1sxfpn1XNyPJdmIPS0axoc3VyAWiC3y5QkSDlIuLnF00sP8sZ7Ge";
    public $stripeSecret="sk_test_51IDT1rLV6S2YaGRAJ4BLZcGt468ETmMzHuGWlHVv7MBTjjLda3pXurPbmwD74BalNTuV7kLhiqbiwKBfKTuRnjqq00pKL4vtzv";
    public function create(Request $request, Plan $plan)
    {
        $plan = Plan::findOrFail($request->get('plan'));
        $user = $request->user();
//        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = new StripeClient($this->stripeSecret);

        if (!$user->stripe_id) {
            $customer = Customer::create([
                'email' => 'paying.useruser@gmail.com',
            ]);

            $user->stripe_id = $customer->id;
            $user->card_brand = $plan->slug;
            $user->save();

            $payment = $stripe->subscriptions->create([
                'customer' => $user->stripe_id,
                'items' => [
                    ['price' => $plan->price],
                ],
            ]);
            return response()->json('<p style="color: limegreen">Thanks,your payment was done successfully!</p>');
//            echo '<script type="text/javascript">'
//        , 'history.go(-4);'
//        , '</script>';
        } else {
            $user->card_brand = $plan->name;
            $user->card_last_four = $plan->cost;
            $user->save();
        }
    }

    public function addPromocode(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        $user = $request->user();
        $coupon = $stripe->coupons->create([
            'percent_off' => 25,
            'duration' => 'repeating',
            'duration_in_months' => 3,
        ]);
        $c = $stripe->promotionCodes->create([
            'coupon' => $coupon->id,
            'code' => $request->code,
            'customer' => $user->stripe_id,
        ]);
        return response()->json('Promotion code successfully saved');

    }

    public function card_create(Request $request)
    {
        $user = $request->user();
        Stripe\Stripe::setApiKey($this->stripeSecret);
        $stripe = new \Stripe\StripeClient($this->stripeSecret);

        try {
            $token = $stripe->tokens->create([
                'card' => [
                    'number' => $request->number,
                    'exp_month' => $request->month,
                    'exp_year' => $request->year,
                    'cvc' => $request->cvc,
                    'name' => $request->name
                ]
            ]);

        } catch (\Exception $e) {
            return 'Error ! Credit Card invalid';
        }

        try {
            if (!$user->stripe_id) {

                $customer = Customer::create([
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
                        ['source' => $token->id]
                    );
                    $card->card_id = $card_payment->id;
                    $card->brand = $card_payment->brand;
                    $card->exp_month = $card_payment->exp_month;
                    $card->exp_year = $card_payment->exp_year;
                    $card->update();
                    return response()->json('Payment method has been created successfully.');
                } else {
                    return response()->json('You already have this payment method.');
                }


            } else {

                $card = Card::where('card_number', $request->number)->where('user_id', Auth::id())->first();
                if ($card === null) {
                    $card = new Card();
                    $card->user_id = Auth::id();
                    $card->card_number = $request->number;
                    $card->save();
                    $card_payment = $stripe->customers->createSource(
                        $user->stripe_id,
                        ['source' => $token->id]
                    );

                    $card->card_id = $card_payment->id;
                    $card->brand = $card_payment->brand;
                    $card->exp_month = $card_payment->exp_month;
                    $card->exp_year = $card_payment->exp_year;
                    $card->update();

                    return response()->json('Payment method has been created successfully.');
                } else {
                    return response()->json('You already have this payment method.');
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

        }
    }
//        try {
//            if (!$user->stripe_id) {
//                $customer = Customer::create([
//                    'email' => 'paying.useruser@gmail.com',
//                ]);
//
//                $user->stripe_id = $customer->id;
//                $user->save();
//                $card = Card::where('card_number', $request->number)->first();
//
//                if ($card === null) {
//                    $card = new Card();
//                    $card->user_id = Auth::id();
//                    $card->card_number = $request->number;
//                    $card->save();
//
//                    $card_payment = $stripe->customers->createSource(
//                        $user->stripe_id,
//                        ['source' => $request->stripeToken]
//                    );
//                    $card->card_id = $card_payment->id;
//                    $card->brand = $card_payment->brand;
//                    $card->exp_month = $card_payment->exp_month;
//                    $card->exp_year = $card_payment->exp_year;
//                    $card->update();
//                    return response()->json('Payment method has been created successfully.');
//                } else {
//                    return response()->json('You already have this payment method.');
//                }
//
//
//            } else {
//
//                $card = Card::where('card_number', $request->number)->where('user_id', Auth::id())->first();
//                if ($card === null) {
//                    $card = new Card();
//                    $card->user_id = Auth::id();
//                    $card->card_number = $request->number;
//                    $card->save();
//                    $card_payment = $stripe->customers->createSource(
//                        $user->stripe_id,
//                        ['source' => $request->stripeToken]
//                    );
//
//                    $card->card_id = $card_payment->id;
//                    $card->brand = $card_payment->brand;
//                    $card->exp_month = $card_payment->exp_month;
//                    $card->exp_year = $card_payment->exp_year;
//                    $card->update();
//
//                    return response()->json('Payment method has been created successfully.');
//                } else {
//                    return response()->json('You already have this payment method.');
//                }
//
//            }
////                }
//        } catch (\Stripe\Exception\CardException $e) {
//            echo 'Status is:' . $e->getHttpStatus() . '\n';
//            echo 'Type is:' . $e->getError()->type . '\n';
//            echo 'Code is:' . $e->getError()->code . '\n';
//            // param is '' in this case
//            echo 'Param is:' . $e->getError()->param . '\n';
//            echo 'Message is:' . $e->getError()->message . '\n';
//
//        }
//}
//        $cards=Card::where('user_id',Auth::id())->get();

}

