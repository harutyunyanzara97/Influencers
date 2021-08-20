<div class="content-header p-10-35">
    <div class="d-flex justify-content-end">
        <div id="calendar">
            <button><img src="{{asset('img/iconfinder_calendar.png')}}" alt="" ></button>
        </div>
        <div class="input-group m-0 header-input-section" style="width: 39%!important;">
            <input type="text" class="form-control m-0" placeholder="Search & find your category" aria-label="Search & find your category" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="" type="button" id="button-addon2"><img src="{{asset('img/search-settings.png')}}" alt=""></button>
            </div>
            <div id="menu-view" class="d-none"> <button class="btn-header bg-transparent ml-4"><img src="{{asset('img/view.png')}}" alt="" class="mr-2">View</button></div>
        </div>
    </div>
</div>
<div class="border-top"></div>
<div class="content-page">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Advertiser</th>
            <th scope="col">Product name</th>
            <th scope="col">Product description</th>
            <th scope="col">Post details</th>
            <th scope="col">Number</th>
            <th scope="col">Price</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody class="tbody">
        @foreach($campaigns as $campaign)
            <tr>
                <th scope="row"><img src="{{asset('img/'.$campaign->user->avatar_url)}}" alt="">{{$campaign->user->name}}</th>
                <td class="product-name">{{$campaign->title}}</td>
                <td class="product-description">{{$campaign->details}}</td>
                <td class="post-details"><p class="data-details">{{$campaign->start_date}}</p><p class="time-details">{{$campaign->start_date}}</p></td>
                <td class="dashboard-number">1</td>
                <td class="dashboard-price">{{$campaign->per_post_rate}} $</td>
                <td class="dashboard-check"><img class="check-mark accept" data-id="{{$campaign->id}}" src="{{asset('img/check-mark.png')}}" alt="">
                    <img class="check-close decline" data-id="{{$campaign->id}}" src="{{asset('img/chechk-close.png')}}" alt=""></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script>
    $("#profileMenu").addClass("enter");
</script>
