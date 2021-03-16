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
                                    data-toggle="modal"  @if(!$cards->isEmpty()) data-target="#ModalInfluence" @else data-target="#messageModal" @endif
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
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p>Please add a payment method in your profile.</p>
                <div class="d-flex go-profile-section justify-content-center"><a class="go-profile" href="{{route('profile')}}">Go
                        to profile</a>
                </div>

                <div class="modal-body">

                </div>
                <div class="d-flex justify-content-center mt-4 go-profile-section">
                    <div class="modal-footer">
                        <button type="reset" class="pull-right publish_btn mt-0" data-dismiss="modal">Cancel
                        </button>
                        <button class="publish_btn" data-dismiss="modal">OK</button>
                    </div>
                </div>
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

            <div class="modal-body" style="height:400px">

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
</script>
<script src="https://js.stripe.com/v3/"></script>
<script src="{{asset('js/profil.js')}}"></script>





