@extends('layouts.app')
<div class="tab-pane  p-22-32" id="billing-details" role="tabpanel" aria-labelledby="billing-details-tab">
    <div class="w-75">
        <div class="fs-18-red mb-4">Current plan</div>
        <div class="card mb-3">
            <div class="d-flex justify-content-between align-items-center pt-3 px-3 ">
                <p class="mx-2 my-2 dashboard-radio-btn">
                    <input type="radio" id="starter" name="radio-group">
                    <label for="starter" class="fs-18-gray-med">Stater (Influencer) </label>
                </p>
                <div class="d-flex">
                    <span class="fs-18-gray-med mr-2">$0.00 </span>
                    <span class="fw-300"> USD/month <br> Current plan</span>
                </div>
                <button class="btn-red br-5 max-w--110 h--45 mb-3">View Plans</button>
            </div>
        </div>
        <div class="fs-18-red my-4">Payment</div>
        <div class="card asdsadasddsa">
            <div class="d-flex justify-content-between align-items-center px-3 py-3 border-bottom">
                <div>
                    <span class="fs-18-gray-med">Credit Card: @if(!$cards)<span class="fw-300">None</span>
                    @else
                        <div class="cards">
                            @foreach($cards as $card)
                                <div class="card-i">
                                    <div class="bank-name" title="BestBank">{{$card->brand}}</div>
                                    <div class="chip">
                                        <div class="side left"></div>
                                        <div class="side right"></div>
                                        <div class="vertical top"></div>
                                        <div class="vertical bottom"></div>
                                    </div>
                                    <div class="data">
                                        <div class="pan" title="4123 4567 8910 1112">{{$card->card_number}}</div>
                                        <div class="exp-date-wrapper">
                                            <div class="left-label">EXPIRES END</div>
                                            <div class="exp-date">
                                                <div class="upper-labels">MONTH/YEAR</div>
                                                <div class="date" title="01/17">{{$card->exp_month}}/{{substr($card->exp_year, -2)}}</div>
                                            </div>
                                        </div>
                                        <div class="name-on-card" title="John Doe">@if(Auth::user()->name && Auth::user()->surname){{Auth::user()->name - Auth::user()->surname}}@endif</div>
                                    </div>
                                    <div class="lines-down"></div>
                                    <div class="lines-up"></div>
                                </div>

                            @endforeach
                        </div>
                    @endif

                </div>
                <button class="btn-red br-5 max-w--110 h--45" data-toggle="modal" data-target="#stripeModal">Add</button>
            </div>
            <div class="modal fade" id="stripeModal" tabindex="-1" role="dialog" aria-labelledby="ModalInfo">
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pb-5 pt-4">
                        <div class="modal-header border-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="cards">

                            @foreach($cards as $card)
                                <div class="card-i">
                                    <div class="bank-name" title="BestBank">{{$card->brand}}</div>
                                    <div class="chip">
                                        <div class="side left"></div>
                                        <div class="side right"></div>
                                        <div class="vertical top"></div>
                                        <div class="vertical bottom"></div>
                                    </div>
                                    <div class="data">
                                        <div class="pan" title="4123 4567 8910 1112">{{$card->card_number}}</div>
                                        <div class="exp-date-wrapper">
                                            <div class="left-label">EXPIRES END</div>
                                            <div class="exp-date">
                                                <div class="upper-labels">MONTH/YEAR</div>
                                                <div class="date" title="01/17">{{$card->exp_month}}/{{substr($card->exp_year, -2)}}</div>
                                            </div>
                                        </div>
                                        <div class="name-on-card" title="John Doe">@if(Auth::user()->name && Auth::user()->surname){{Auth::user()->name - Auth::user()->surname}}@endif</div>
                                    </div>
                                    <div class="lines-down"></div>
                                    <div class="lines-up"></div>
                                </div>

                            @endforeach
                        </div>

                        <div class="modal-body payment-body">
                            <div id="card-errors" role="alert"></div>
                            <div class="card">

                                <div class="card-body">

                                    <form id="payment-form" action="{{ route('stripe.create') }}" method="post"
                                          data-cc-on-file="false"
                                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                          class="require-validation">

                                        @csrf
                                        <div class='form-row row'>
                                            <div class='col-xs-12 form-group required'>
                                                <label class='control-label'>Name on Card</label> <input
                                                    class='form-control' size='4' type='text' name="name">
                                            </div>
                                        </div>

                                        <div class='form-row row'>
                                            <div class='col-xs-12 form-group card required'>
                                                <label class='control-label'>Card Number</label> <input
                                                    autocomplete='off' class='form-control card-number'
                                                    name="number"
                                                    size='20'
                                                    type='text'>
                                            </div>
                                        </div>

                                        <div class='form-row row'>
                                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                                class='form-control card-cvc'
                                                                                                placeholder='ex. 311'
                                                                                                size='4'
                                                                                                type='text'
                                                                                                name="cvc">
                                            </div>
                                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Exp.Month</label> <input
                                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                                    type='text' name="month">
                                            </div>
                                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Exp.Year</label> <input
                                                    class='form-control card-expiry-year' placeholder='YYYY'
                                                    size='4'
                                                    type='text' name="year">
                                            </div>
                                        </div>

                                        <div class='form-row row'>
                                            <div class='col-md-12 error form-group hide'>
                                                <div class='alert-danger alert'>Please correct the errors and try
                                                    again.
                                                </div>
                                            </div>
                                        </div>
                                        @if($errors->any())
                                            <h4>{{$errors->first()}}</h4>
                                        @endif
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button class="btn payment-submit"
                                                        type="submit">Add payment
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center px-3 py-3 border-bottom">
                <div>
                    <span class="fs-18-gray-med">Billing email:<span class="fw-300"> lorem@gmail.com</span></span>
                </div>
                <button class="btn-red br-5 max-w--110 h--45">Update</button>
            </div>
            <div class="d-flex justify-content-between align-items-center px-3 py-3">
                <div>
                    <span class="fs-18-gray-med font-italic fw-300">No extra information</span>
                </div>
                <button class="btn-red br-5 max-w--110 h--45">Add Info</button>
            </div>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
        @elseif(Session::has('error'))
            <div class="alert alert-danger text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('error') }}</p>
            </div>@endif
        <div class="fs-18-red my-4">Payment history</div>
        <table class="table" id="table-paymentHistory">
            <thead class="">
{{--            <tr>--}}
{{--                <th scope="col">Date</th>--}}
{{--                <th scope="col">Amount</th>--}}
{{--                <th scope="col">Description</th>--}}
{{--                <th scope="col">Status</th>--}}

{{--                <td>{{$payment->amount}}</td>--}}
{{--                <td>{{$payment->amount}}</td>--}}
{{--                <td>{{$payment->amount}}</td>--}}
{{--                <td>{{$payment->amount}}</td>--}}

{{--            </tr>--}}
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="{{asset('js/profil.js')}}"></script>
