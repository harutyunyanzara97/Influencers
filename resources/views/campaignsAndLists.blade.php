<div id="campaigns" style="margin-left: 32px">
        <form action="" class="w-75">
            <div class="">
                <div class="form-group position-relative my-5">
                    <div class="d-flex justify-content-between">
{{--                        <label for="myCampaign" class="fs-18-gray">My Campaigns</label>--}}
                        <button class="color-red fs-12 border-0 ml-2 bg-transparent">
{{--                            <img src="img/plus-icon.png" alt="" width="14" height="14" class="mr-1">--}}
                           <a href="{{route('create')}}">Create New Campaign</a>
                            </button>
                    </div>
                    @foreach($campaigns as $campaign)
                    <input type="text" class="form-control h--60 fs-14-black text-left"  placeholder="{{$campaign->title}}">
                    <div class="position-absolute r-35-b-14">
                        <div class="d-flex align-items-center">
{{--                            <div class="mr-5 ">1 influencer </div>--}}
                            <a href="{{route('statisticsCampaign')}}" id="ststis_a"><img src="img/circle-next-icon.png" alt="" class="pointer"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>

