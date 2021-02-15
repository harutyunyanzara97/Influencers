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
<div class="modal fade" id="ModalInfluence" tabindex="-1" role="dialog" aria-labelledby="ModalInfluenceLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-5 pt-4">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('img/cross-icon.png')}}" alt=""></span>
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
</script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51IDT1rLV6S2YaGRAadUEI9mxO2j2wbfh5Jc69TSDKj7Cdo1sxfpn1XNyPJdmIPS0axoc3VyAWiC3y5QkSDlIuLnF00sP8sZ7Ge');
    // Create an instance of Elements.
    var elements = stripe.elements();
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    var card = elements.create('card', {style: style});
    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function (event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        stripe.createToken(card).then(function (result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'token');
        hiddenInput.setAttribute('value', 'token');
        form.appendChild(hiddenInput);
        // Submit the form
        form.submit();
    }
</script>




