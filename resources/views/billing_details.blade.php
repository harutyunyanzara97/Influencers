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
        <div class="card">
            <div class="d-flex justify-content-between align-items-center px-3 py-3 border-bottom">
                <div>
                    <span class="fs-18-gray-med">Credit Card: <span class="fw-300">None</span></span>

                </div>
                <button class="btn-red br-5 max-w--110 h--45">Add</button>
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
