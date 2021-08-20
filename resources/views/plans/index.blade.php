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
                            {{--                            <input type="radio"  name="radio-group" checked="checked">--}}
                            <label for="starterInfluence" class="fs-18-gray-med">{{ $plan->name }} </label>
                        </p>
                        <div class="d-flex align-items-center">
                            <span class="fs-24-bold-black color-gray mr-2">${{ number_format($plan->cost, 2) }}</span>
                            <span class="fw-300 fs-14"> USD/month <br> Current plan</span>
                            <button data-path="{{ route('show', $plan->slug) }}"
                                    class="btn-header bg-purple ml-4 d-block h--45 d-flex cardButton"
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
                <input type="text" class="border-0 flex-1 font-italic promo" placeholder="Promo code">
                <p class="info-text"></p>
                <button class="btn-dark--grey max-w--120 h--45 add-promo">Apply</button>
            </div>
        </div>
        <h3 class="fs-18-red mt-4 mb-4">Features</h3>
        <div class="fs-14-gray font-italic fw-300">Influencer:</div>
        @if(Auth::user()->card_brand === "Basic")
            <form action="" class="w-50 red-check">
                <div class="form-group">
                    <input type="checkbox" class="form-control" style="background: url({{asset('img/red-check.png')}})">
                    <label>Access to millions of influencers on social media</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Unlimited searches</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Save up to 100 influencers</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Analyse up to 25 profiles per month</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Get statistics and metrics of each influencer and their audience </label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Group influencers into one list</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>1 user</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Reach our support via email</label>
                </div>
            </form>
        @elseif(Auth::user()->card_brand === "Professional")
            <form action="" class="w-50 red-check">
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Access to millions of influencers on social media</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Unlimited searches</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Save up to 300 influencers</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Analyse up to 75 profiles per month</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Get statistics and metrics of each influencer and their audience </label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Group influencers into 50 list</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Manage up to 5 campaigns</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Add up to 300 influencers per campaign</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>3 users</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Reach our support via email</label>
                </div>
            </form>
        @elseif(Auth::user()->card_brand === "Business")
            <form action="" class="w-50 red-check">
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Access to millions of influencers on social media</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Unlimited searches</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Save up to 1000 influencers</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Analyse up to 250 profiles per month</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Get statistics and metrics of each influencer and their audience </label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Group influencers into 100 list</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Manage up to 20 campaigns</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Add up to 300 influencers per campaign</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>55 users</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control">
                    <label>Reach our support via Phone & email</label>
                </div>
            </form>
        @endif
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
<div class="modal" id="ModalInfluence" tabindex="-1" role="dialog" aria-labelledby="ModalInfo"
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
<script src="https://js.stripe.com/v3/"></script>
<script src="{{asset('js/profil.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script>
    $('.cardButton').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            url: $(this).data('path'),
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            success: (response) => {
                $('#ModalInfluence div.modal-body').empty();
                document.getElementById('ModalInfluence').style.display="block";
                $('#ModalInfluence div.modal-body').append(response);
            }
        })
    });
    $('.close').on('click',function (event) {
        event.preventDefault();
        document.getElementById('ModalInfluence').style.display="none";
    })
    $('.add-promo').click(function () {
        let code = $('.promo').val();
        $.ajax({
            type: 'post',
            url: '/addPromocode',
            data: {_token: $('meta[name="csrf-token"]').attr('content'),code: code},
            success: function (data) {
                Swal.fire(data);
            }
        })
    })

</script>






