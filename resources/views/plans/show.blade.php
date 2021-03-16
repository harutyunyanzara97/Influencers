@include('layout.header')

                <div>
                    <div id="card-errors" role="alert"></div>
                    <div class="card">
                        <div class="card-body">
                            {{--                                    <form>--}}
                            <div class="group d-flex flex-column flex-wrap">

                                @auth
                                    <form id="payment-forms" action="{{ route('subscription') }}" method="post"
                                          class="require-validation">
                                        @csrf
                                        <div class="text-center p-22-32">
                                            <h3 class="title-24">{{$plan->name}} - ${{ number_format($plan->cost, 2) }}/month</h3>
                                            <p class="fs-18-gray">USD$ {{ number_format($plan->cost, 2) }}/per month</p>
                                            <p class="fs-18-gray mb-5">loremipsum@gmail.com</p>
                                            <div class="form-group relative">
                                                <img src="{{asset('img/cart-icon.png')}}" alt="" class="abs img-icon mt-3">
                                                <div class="card-body">
                                                    <div id="card-element">
                                                    </div>

                                                    <div id="card-errors" role="alert"></div>
                                                    <input type="hidden" name="plan" value="{{ $plan->id }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class='form-row row'>
                                            <input type="number" class="form-control" id="price" name="price"
                                                   placeholder="Please enter the price">
                                        </div>
                                        @if($cards)
                                            @foreach($cards as $card)
                                                <label class="radio-row">
                                                    <div>
                                                        {{--                                                    <input type="hidden" name="customer_id" value="{{$card->customer}}" >--}}
                                                        <input type="hidden" name="card_id"
                                                               value="{{$card->card_id}}">
                                                        <input type="radio" name="payment-source"
                                                               class="group-radio"
                                                               value="saved-card-1">
                                                    </div>

                                                    <div id="saved-card">**** ****
                                                        **** {{substr($card->card_number, -4)}}</div>
                                                </label>
                                            @endforeach
                                        @endif
                                        <div class="outcome">
                                            <div class="error"></div>
                                            <div class="success-saved-card">
                                                Success! Your are using saved card <span
                                                    class="saved-card"></span>
                                            </div>
                                            <div class="success-new-card">
                                                Success! The Stripe token for your new card is <span
                                                    class="token"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button class="btn" id="payment-submit"
                                                        type="submit">Pay
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

