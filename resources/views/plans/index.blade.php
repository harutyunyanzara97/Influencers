<div class="tab-pane p-22-32" id="payment-plans">
    <h3 class="fs-18-red mb-3">Payment Plans</h3>
    <div class="d-flex align-items-center flex-wrap">
        <form class="flex-1">
            @foreach($plans as $plan)
                <h5>{{ $plan->description }}</h5>
                <div class="card mb-3 paymentPlan active">
                    <div class="d-flex justify-content-between align-items-center pt-1 px-3 ">
                        <p class="mx-2 my-2 dashboard-radio-btn">
                            <input type="radio" id="starterInfluence" name="radio-group" checked>
                            <label for="starterInfluence" class="fs-18-gray-med">{{ $plan->name }} </label>
                        </p>
                        <div class="d-flex align-items-center">
                            <span class="fs-24-bold-black color-gray mr-2">${{ number_format($plan->cost, 2) }}</span>
                            <span class="fw-300 fs-14"> USD/month <br> Current plan</span>
                            <button data-path="{{ route('show', $plan->slug) }}"
                                    class="btn-header bg-purple ml-4 d-block h--45 d-flex cardButton"
                                    data-toggle="modal" data-target="#ModalInfluence"
                                    style="color:#fff;align-items: center;justify-content: center">Choose
                            </button>
                            {{--                        <button type="button" class="btn-header bg-purple ml-4 d-none h--45" data-toggle="modal" data-target="#ModalInfluence">--}}
                            {{--                            <a href="{{ route('show', $plan->slug) }}"></a>Upgrade</button>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </form>
        <div class="flex-1 d-flex justify-content-center">
            <img src="{{asset('img/paymentPlan-img.png')}}" alt="">
        </div>
    </div>
    <div class="w-50 mt-4">
        <div class="card mb-3 w-75">
            <div class="d-flex justify-content-between align-items-center py-1 pl-3 pr-1 ">
                <input type="text" class="border-0 flex-1 font-italic" placeholder="Promo code">
                <button class="btn-dark--grey max-w--120 h--45">Apply</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalInfluence" tabindex="-1" role="dialog" aria-labelledby="ModalInfo"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-5 pt-4">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
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
                                                <img src="{{asset('img/cart-icon.png')}}" alt="" class="abs img-icon">
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
                                                <button class="btn-red w-100 br-5 h--45 mt-3" type="submit">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="modal fade payment-modal" id="ModalInfluence" tabindex="-1" role="dialog" aria-labelledby="ModalInfluenceLabel"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--        <div class="modal-content pb-5 pt-4">--}}
{{--            <div class="modal-header border-0">--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true"><img src="{{asset('img/cross-icon.png')}}" alt=""></span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<script>--}}
{{--    $('.cardButton').on('click', function (event) {--}}
{{--        event.preventDefault();--}}
{{--        $.ajax({--}}
{{--            url: $(this).data('path'),--}}
{{--            method: "get",--}}
{{--            data: {_token: $('meta[name="csrf-token"]').attr('content')},--}}
{{--            success: (response) => {--}}
{{--                console.log(response);--}}
{{--                $('#ModalInfluence div.modal-body').html(response);--}}
{{--            }--}}
{{--        })--}}
{{--    });--}}
{{--</script>--}}
<script src="https://js.stripe.com/v3/"></script>
<script src="{{asset('js/profil.js')}}"></script>





