@if(isset($cards))
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
                    <input type="hidden" name="plan" value="{{ $plan->id }}"/>
                </div>
            </div>
        </div>
        <div class='form-row row'>
            <input type="number" class="form-control" id="price" name="price"
                   placeholder="Please enter the price">
        </div>

        @foreach($cards as $card)
            <label class="radio-row">
                <div>
                    {{--                                                    <input type="hidden" name="customer_id" value="{{$card->customer}}" >--}}
                    <input type="hidden" name="card_id"
                           value="{{$card->card_id}}">

                </div>

                <div id="saved-card d-flex">
                    <input type="radio" name="payment-source"
                           class="group-radio position-static"
                           value="saved-card-1">**** ****
                    **** {{substr($card->card_number, -4)}}
                </div>
            </label>
        @endforeach

        <div class="outcome">
            <div class="error"></div>
        </div>
        <button id="payment-submit" type="submit" class="btn-red w-100 br-5 h--45 mt-3">Subscribe
        </button>

    </form>
@else
    <form id="payment-form" action="{{ route('stripe.create') }}" method="post">
        @csrf
        <div class='form-row row'>
            <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label> <input
                    class='form-control name' size='4' type='text' name="name">
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
@endif

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="{{asset('profil.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script>
    $('#payment-submit').click(function () {
        let form = $('#payment-forms');
        let formdata = new FormData(form[0]);
        // let card = '';
        // $('input[type=radio]').each(function () {
        // if ($(this).is(':checked')) {
        // card = $(this).prev().val();
        // }
        // })
        // formdata.append('card', card);
        $(this).attr('disabled', 'disabled');

        $.ajax({
            type: "post",
            url: form.attr('action'),
            data: formdata,
            processData: false,
            contentType: false,

            success: function (response) {
                $(this).attr('enabled', 'enabled');
                Swal.fire(response);
                document.getElementById('ModalInfluence').style.display = "none";
                $('.modal-backdrop').css('display', 'none')

            },
            error: function (err) {
                $('#ModalInfluence #card-errors').html(`<p style="color:red"> ${err.responseJSON.message}</p>`);
                $(this).attr('enabled', 'enabled');

            }

        });
    });
    $('.payment-submit').submit(function () {
        let form = $('#payment-form');
        let name = $('.name').val();
        let number = $('.card-number');
        let month = $('.card-expiry-month').val();
        let year = $('.card-expiry-year').val();
        let cvc = $('.card-cvc').val();
        $.ajax({
            type: "post",
            url: form.attr('action'),
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                name: name,
                number: number,
                month: month,
                year: year,
                cvc: cvc
            },
            success: function (response) {
                Swal.fire(response);
                $('#stripeModal').modal('hide');
                $('.modal-backdrop').css('display', 'none');
            },
            error: function (err) {
                $('#stripeModal #card-errors').html(`<p style="color:red"> ${err.responseJSON.message}</p>`);

            }
        });
    })
</script>
