@include('layout.header')
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
                                    class="btn-header bg-purple ml-4 d-block h--45 d-flex @if(!$cards->isEmpty()) cardButton @else  cardButtonn @endif"
                                    data-toggle="modal"  @if(!$cards->isEmpty()) data-target="#ModalInfluence" @else data-target="#ImportModalCenter" @endif
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
<div class="modal fade" id="ImportModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="ImportModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-32-64">
            <div class="modal-header border-bottom-0 mb-3">
                <p class="modal-title title-14 " id="exampleModalLongTitle" style="font-size:14px"><img
                        src="{{asset('img/import-icon.png')}}" alt=""> Please add a payment method in your profile</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="abs"><img src="{{asset('img/cross-icon.png')}}" width="24"
                                                                      height="24" alt=""></span>
                </button>
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

            </div>
        </div>
    </div>
</div>

<script>
    $('.cardButton').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            url: $(this).data('path'),
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            success: (response) => {
                console.log(response);
                $('#ModalInfluence div.modal-body').html(response);
            }
        })
    });
    $('.cardButtonn').on('click', function (event) {
        event.preventDefault();
    });
</script>
<script src="https://js.stripe.com/v3/"></script>
<script src="{{asset('js/profil.js')}}"></script>





