@include('layout.header')
<div class="input-group m-0 header-input-section d-flex" style="width: 75%!important;">
    <span class="abs"><img src="img/search-icon.png" width="16" height="17" alt=""></span>
    <input type="text" class="form-control m-0 search" placeholder="Search the directory" id="search" name="search" aria-label="Search the directory" aria-describedby="button-addon2">
    <div class="input-group-append">
        <button class="" type="button" id="button-addon2"><img src="img/search-settings.png" alt=""></button>
    </div>

    <div id="menu"> <button class="btn-header filter bg-red ml-4"><img src="img/filter.png" alt="" class="mr-2">Filter</button></div>
    <div id="menu-view" class="d-none"> <button class="btn-header bg-transparent ml-4"><img src="img/view.png" alt="" class="mr-2">View</button></div>

    <button class="btn-header bg-purple ml-4" data-toggle="modal" data-target="#ImportModalCenter"><img src="img/import.png" alt="" class="mr-2">Import</button>
    <div id="lgMenu" class="px--20">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fs-24-bold-black mb-0 fw-normal">Filter</h2>
            <span id="exit"><img src="{{asset('img/cross-icon.png')}}" alt=""></span>
        </div>
        <div class="w-100">
            <button class="btn-clear-filter">Clear Filter</button>
        </div>
        <h4 class="title-12 py-4">Location</h4>
        <h4 class="title-12 py-4">Bookmarks & lists</h4>
    </div>
</div>
<div class="modal fade" id="ImportModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="ImportModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-32-64">
            <div class="modal-header border-bottom-0 mb-3">
                <h5 class="modal-title title-48 " id="exampleModalLongTitle"><img
                        src="{{asset('img/import-icon.png')}}" alt=""> Import</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="abs"><img src="{{asset('img/cross-icon.png')}}" width="24"
                                                                      height="24" alt=""></span>
                </button>
            </div>
            <p class="fs-18-light">Paste the URL of the blog, Instagram, or Twitter account of the profile you
                want to import.
                Import multiple profiles at once by adding URLs on seperate lines.</p>
            <form action="#" class="mt-4">
                <div class="form-group">
                    <label for="url" class="fs-12-light-gray">URLs</label>
                    <textarea class="form-control no-resize" id="url" rows="6"></textarea>
                </div>
                <div class="relative mb-3 mt-4">
                    <label class="fs-12-light-gray">Import profiles into list:</label>
                    <select class="form-control h--50">
                        <option disabled selected>Import profiles into list</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <span class="select-arrow abs"><img src="{{asset('img/angle-down.png')}}" alt=""></span>
                </div>
                <div class="modal-footer border-top-0 p-0 mt-4">
                    <button type="button" class="btn-header bg-red m-0 h--50">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="profileMenu" class="p-30-15">
    <div class="profileMenu--block--content">
        <div class="d-flex  align-items-center mb-2">
            <div class="mr-2 d-flex align-items-center flex-1">
                <img src="img/back-icon.png" alt="" class="mr-2 back-icon">
                <h2 class="fs-12 fw-300 font-italic mb-0">View Kylie ✨ profile</h2>
            </div>
            <span id="exit-profile1" class="d-flex"><img src="img/cross-icon.png" alt=""></span>
        </div>
        <hr>
        <div class="profileMenu--block--content-img">
            <img src="img/profBlock-content-img.png" alt="" class="mb-2">
            <p class="fs-14-gray fw-normal">Throwback🤰🏻pregnant with my baby girl. I can’t believe my daughter will be two soon..🖤 #stormi</p>
        </div>
        <div class="d-flex flex-column mb-3">
            <div class="d-flex mb-3">
                <div class="fs-14 fw-300">Status</div>
                <div class="d-flex align-items-end ml-3">
                    <img src="img/dots.png" alt="" class="mb-2">
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex mr-4">
                    <img src="img/heart-icon.png" alt="" class="mr-2">
                    <p class="m-0 fs-14-black">9.5 million likes</p>
                </div>
                <div class="d-flex">
                    <img src="img/chat-icon.png" alt="" class="mr-2">
                    <p class="m-0 fs-14-black">41,758 comments</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column mb-3">
            <div class="d-flex mb-3">
                <div class="fs-14 fw-300">Author</div>
                <div class="d-flex align-items-end ml-3">
                    <img src="img/dots.png" alt="" class="mb-2">
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex">
                    <div>
                        <img src="img/insta-icon-big.png" alt="" class="mr-2">
                    </div>
                    <div>
                        <p class="m-0 fs-14">156.8 million social reach</p>
                        <p class="m-0 fs-14">@kyliejenner @kylieskin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profileMenu--content">
        <div class="d-flex  align-items-start mb-5">
            <div class="d-flex align-items-center flex-1">
                <div class="profileMenu--avatar-img mr-2">
                    <img src="img/prof-avatar.png" alt="">
                </div>
                <div>
                    <h2 class="fs-24-bold-black fw-normal mb-2">Kylie Jenner✨</h2>
                    <div class="d-flex">
                        <button class="btn-sm-prof fs-12 mx-1">Female</button>
                        <button class="btn-sm-prof fs-12 mx-1">English</button>
                    </div>
                </div>
            </div>
            <span id="exit-profile" class="d-flex"><img src="img/cross-icon.png" alt=""></span>
        </div>
        <ul class="list-unstyled d-flex justify-content-end mb-4 flex-1 align-items-center">
            <li><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/message-icon.png" alt=""></a></li>
            <li><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/mark-icon.png" alt=""></a></li>
            <li><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/edit-icon.png" alt=""></a></li>
            <li><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/continue-icon.png" alt=""></a></li>
        </ul>
        <hr>
        <h4 class="fs-24-bold-black text-left pt-3">156.8 million social reach</h4>
        <div class="d-flex align-items-start mb-3">
            <img src="img/insta-icon-big.png" alt="" class="mt-1">
            <span class="ml-2 fs-14 pr-5">156.8 million Instagram followers @kyliejenner</span>
        </div>
        <hr>
        <h4 class="fs-24-bold-black text-left">Engagement</h4>
        <div class="engagement-col mb-3">
            <img src="img/insta-icon-small.png" alt="">
            <span class="ml-2">High engagement on Instagram</span>
        </div>
        <hr>
        <h4 class="fs-24-bold-black text-left">Estimated cost per post</h4>
        <div class="cost-col">
            <img src="img/insta-icon-small.png" alt="">
            <span class="ml-2">$7k - $15k on Instagram</span>
        </div>
        <hr>
        <h4 class="fs-24-bold-black text-left">Topics</h4>
        <div class="topic-col d-flex">
            <button type="button" class="btn-light-gray text-center mx-1">fashion</button>
            <button type="button" class="btn-light-gray text-center mx-1">beauty</button>
            <button type="button" class="btn-light-gray text-center mx-1">makeup</button>
        </div>
        <hr>
        <hr>
        <h4 class="fs-24-bold-black text-left">Save to list</h4>
        <div class="topic-col d-flex">
            <button type="button" class="btn-light-gray text-center mx-1">fashion</button>
            <button type="button" class="btn-light-gray text-center mx-1">beauty</button>
            <button type="button" class="btn-light-gray text-center mx-1">makeup</button>
        </div>
        <hr>
        <div class="d-flex justify-content-between flex-wrap" style="max-height: 350px; overflow-y: scroll; overflow-x: hidden">
            <div class="profileMenu--block">
                <img src="img/Prof-img1.png" alt="">
                <div class="abs">
                    <p class="m-0 fs-14 text-white">Throwback🤰🏻pregnant with my baby girl. I can’t believe my daughter will be two soon.. 🖤 #stormi</p>
                </div>
            </div>
            <div class="profileMenu--block">
                <img src="img/prof-img2.png" alt="">
                <div class="abs">
                    <p class="m-0 fs-14 text-white">Throwback🤰🏻pregnant Animi cupiditate deserunt ipsum magnam obcaecati, porro repudiandae saepe? Accusantium distinctio eaque expedita iste nam quia saepe velit. Labore. 🖤 #stormi</p>
                </div>
            </div>
            <div class="profileMenu--block">
                <img src="img/prof-img2.png" alt="">
                <div class="abs">
                    <p class="m-0 fs-14 text-white"> Animi cupiditate deserunt ipsum magnam obcaecati, porro repudiandae saepe? Accusantium distinctio eaque expedita iste nam quia saepe velit. Labore</p>
                </div>
            </div>
            <div class="profileMenu--block">
                <img src="img/maui-weddings-home1%201.png" alt="">
                <div class="abs">
                    <p class="m-0 fs-14 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam molestias, nemo..</p>
                </div>
            </div>
            <div class="profileMenu--block">
                <img src="img/maui-weddings-home1%201.png" alt="">
                <div class="abs">
                    <p class="m-0 fs-14 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam molestias, nemo..</p>
                </div>
            </div>
            <div class="profileMenu--block">
                <img src="img/prof-img2.png" alt="">
                <div class="abs">
                    <p class="m-0 fs-14 text-white"> Animi cupiditate deserunt ipsum magnam obcaecati, porro repudiandae saepe? Accusantium distinctio eaque expedita iste nam quia saepe velit. Labore</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <div class="p-30 main-blocks-div">
        <h2 class="fs-24-bold-black text-left m-b--30">Find influencers in these topics</h2>
        <div class="d-flex flex-wrap main" style="max-width: calc(100% - 350px); width: 100%">
            @if($categories)
                @foreach($categories as $category)
                    <div class="mr-3 mb-3 influecer-area">
                        <div class="abs"></div>
                        <img src="{{asset('img/'.$category->img_url)}}" alt="">
                        <h3 class="influecer-title">{{$category->name}}</h3>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    {{--                    <p class="px-3 my-3"><img src="{{asset('img/search-icon-dark.png')}}" alt=""> 92,310 found</p>--}}
    <div class="mt-2 table-div d-none">
        <table class="table bg-white client-table">
            <thead>
            <tr>
                <th scope="col" class="border-left border-right">Profile</th>
                <th scope="col">Social reach</th>
                <th scope="col">Engagement</th>
                <th scope="col">Estimated cost per post</th>
                <th scope="col">Post engagement</th>
                <th scope="col">Bio</th>
                <th scope="col">Topics</th>
                <th scope="col">Location</th>
                <th scope="col">Languages</th>
                <th scope="col">Gender</th>
                <th scope="col">Age Range</th>
                <th scope="col">Ethnicity</th>
                <th scope="col">Locations</th>
                <th scope="col">Hashtags</th>
                <th scope="col">Mentions</th>
                <th scope="col">Website</th>
                <th scope="col">Number of Posts</th>
                <th scope="col">Other Social Media Accounts</th>
                <th scope="col">Notes</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td scope="row" class="border-left border-right pt-0 pb-0 pointer">
                    <div class="d-flex justify-content-around align-items-center h-100 ">
                        <span class="mr-3 fs-18-gray">+</span>
                        <span class="avatar-img-icon"><img src="{{asset('img/avatar-image-icon.png')}}"
                                                           alt=""></span>
                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
                        <ul class="list-unstyled d-flex justify-content-around m-0 flex-1 h-100 align-items-center">
                            <li class="h-100">
                                <a href="#" data-target="#v-pills-1" data-toggle="modal"
                                   class="px-3 h-100 d-flex align-items-center">
                                    <img src="{{asset('img/message-icon.png')}}" alt="">
                                </a>
                            </li>
                            <li class="h-100">
                                <a href="#" class="px-3 h-100 d-flex align-items-center">
                                    <img src="{{asset('img/mark-icon.png')}}" alt="">
                                </a>
                            </li>
                            <li class="h-100">
                                <a href="#" class="px-3 h-100 d-flex align-items-center">
                                    <img src="{{asset('img/edit-icon.png')}}" alt="">
                                </a>
                            </li>
                            <li class="h-100">
                                <a href="#" class="px-3 h-100 d-flex align-items-center">
                                    <img src="{{asset('img/continue-icon.png')}}"
                                         class="openProfileMenu" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="{{asset('img/insta-icon-big.png')}}" alt="">
                        <span class="ml-2 white-space-nowrap">154 million</span>
                        <span class="mx-2">
                                            <img src="{{asset('img/twitter-table-icon.png')}}">
                                        </span>
                        <span class="mx-2">
                                            <img src="{{asset('img/youtube-table-icon.png')}}">
                                        </span>
                    </div>
                </td>
                <td>
                    <div class="engagement-col">
                        <img src="{{asset('img/insta-icon-small.png')}}" alt="">
                        <span class="ml-2">Good</span>
                    </div>
                </td>
                <td>
                    <div class="cost-col">
                        <img src="{{asset('img/insta-icon-small.png')}}" alt="">
                        <span class="ml-2">$100 - $300</span>
                    </div>
                </td>
                <td>
                    <div class="">
                        <span class="ml-2">2,751$</span>
                        <span class="ml-2 color-light-gray">per post</span>
                    </div>
                </td>
                <td>
                    <div class="bio-col">
                                        <span class="color-light-gray fs-normal-12">
                                            Germany 📧
                                            bibisbeautypalace@web.de ❤
                                            @julienco_ 👇🏼👇🏼👇🏼</span>
                    </div>
                </td>
                <td>
                    <div class="topic-col d-flex flex-column">
                        <div class="d-flex">
                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport
                            </button>
                            <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                        </div>
                        <button class="btn-light-yellow">fashion</button>
                    </div>
                </td>
                <td>

                </td>
                <td>
                    <div class="topic-col d-flex flex-column">
                        <button class="btn-dark-gray text-white text-center mb-1">english</button>
                    </div>
                </td>
                <td>
                    <div class="cost-col">
                        <span class="ml-2">Female</span>
                    </div>
                </td>
                <td>
                    <div class="cost-col">
                        <span class="ml-2">18-24</span>
                    </div>
                </td>
                <td>
                    <div class="cost-col">
                        <span class="ml-2">White</span>
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
            </tr>
            <tr>
                <td scope="row" class="border-left border-right pt-0 pb-0 pointer">
                    <div class="d-flex justify-content-around align-items-center h-100">
                        <span class="mr-3 fs-18-gray">+</span>
                        <span class="avatar-img-icon"><img src="{{asset('img/avatar-image-icon.png')}}"
                                                           alt=""></span>
                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
                        <ul class="list-unstyled d-flex justify-content-around m-0 flex-1 h-100 align-items-center">
                            <li class="h-100"><a href="#" data-target="#v-pills-1" data-toggle="modal"
                                                 class="px-3 h-100 d-flex align-items-center">
                                    <img src="{{asset('img/message-icon.png')}}" alt="">
                                </a></li>
                            <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="{{asset('img/mark-icon.png')}}" alt=""></a></li>
                            <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="{{asset('img/edit-icon.png')}}" alt=""></a></li>
                            <li class="h-100"><a href="#"
                                                 class="px-3 h-100 openProfileMenu d-flex align-items-center"><img
                                        src="{{asset('img/continue-icon.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                </td>

                <td>
                    <div class="d-flex align-items-center">
                        <img src="{{asset('img/insta-icon-big.png')}}" alt="">
                        <span class="ml-2 white-space-nowrap">154 million</span>
                        <span class="mx-2">
                                            <img src="{{asset('img/twitter-table-icon.png')}}">
                                        </span>
                        <span class="mx-2">
                                            <img src="{{asset('img/youtube-table-icon.png')}}">
                                        </span>
                    </div>
                </td>
                <td>
                    <div class="engagement-col">
                        <img src="{{asset('img/insta-icon-small.png')}}" alt="">
                        <span class="ml-2">Good</span>
                    </div>
                </td>
                <td>
                    <div class="cost-col">
                        <img src="{{asset('img/insta-icon-small.png')}}" alt="">
                        <span class="ml-2">$100 - $300</span>
                    </div>
                </td>
                <td>
                    <div class="">
                        <span class="ml-2">2,751$</span>
                        <span class="ml-2 color-light-gray">per post</span>
                    </div>
                </td>
                <td>
                    <div class="bio-col">
                                            <span class="color-light-gray fs-normal-12">
                                                Germany 📧
                                                bibisbeautypalace@web.de ❤
                                                @julienco_ 👇🏼👇🏼👇🏼</span>
                    </div>
                </td>
                <td>
                    <div class="topic-col d-flex flex-column">
                        <div class="d-flex">
                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport
                            </button>
                            <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                        </div>
                        <button class="btn-light-yellow">fashion</button>
                    </div>
                </td>
                <td>

                </td>
                <td>
                    <div class="topic-col d-flex flex-column">
                        <button class="btn-dark-gray text-white text-center mb-1">english</button>
                    </div>
                </td>
                <td>
                    <div class="cost-col">
                        <span class="ml-2">Female</span>
                    </div>
                </td>
                <td>
                    <div class="cost-col">
                        <span class="ml-2">18-24</span>
                    </div>
                </td>
                <td>
                    <div class="cost-col">
                        <span class="ml-2">Asian</span>
                    </div>
                </td>
                <td>
                    <div class="">
                        <span class="ml-2">***</span>
                    </div>
                </td>
                <td>
                    <div class="">
                        <span class="ml-2">***</span>
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
                <td>
                    <div class="">
                        ***
                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</div>


<script src="{{asset('js/clientDashboard.js')}}" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script src="{{asset('js/jquery/jquery-3.5.1.min.js')}}"></script>

<script>
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    // var settings = {
    //     "url": "  https://graph.facebook.com/v10.0/instagram_oembed?url=https://www.instagram.com/p/fA9uwTtkSN/&access_token=EAAVo0YqyOfQBAGx46pGon9Vw4iQ2kLpG5isQ6MtJizxFQgKgzqJwHreOC1vYj9jVvJ9ZCbscg4OvP69Vf7ZBiolAA4Tpc6ywesh6SZCQlqPbPVSiAD9hL0NGovyqaz3UrBPiXbbbE047ZA8kkzl2zWgBkXO5WxZA5C5B4wzBaksbH7VRaMOjZCu96LQupfxeheoZBcgtLtaeZBVAM6eU4thxK5oS5HlWvZC36MVawpoZAMp6MqfSnV4UdK5hk6jFknK4gZD",
    //     "method": "GET",
    //     "timeout": 0,
    // };
    //
    // $.ajax(settings).done(function (response) {
    //     console.log(response);
    // });
    $('#search').on('keyup', function () {
        let value = $(this).val();
        $.ajax({
            type: 'get',
            url: '/searchNameByInf',
            data: {'search': value},
            success: function (response) {
                let data = response.data;
                // let per_page = data[1].replace('" "', '');
                $('.main').empty();
                $(data).each(function (val, i) {







                    {{--$(data).each(function (val, i) {--}}
                    {{--    let a = i.data;--}}
                    {{--    for (var j in a) {--}}
                    {{--        var item = a[j];--}}

                    {{--        if (item.media_url && item.media_type === "IMAGE") {--}}
                    {{--            let post=item.media_url;--}}
                    {{--            // let link=item.permalink;--}}
                    {{--            let url = "{{ route("favorite", '') }}" + "/" + post ;--}}
                    //                             console.log(url);
                    {{--        $.ajax({--}}
                    {{--            type: 'get',--}}
                    {{--            url: '/searchTag',--}}
                    {{--            data: {'search': value},--}}
                    {{--            success: function (data) {--}}
                    {{--                // let per_page = data[1].replace('" "', '');--}}
                    {{--                $('.main').empty();--}}
                    {{--                $(data).each(function (val, i) {--}}
                    {{--                    let a = i.data;--}}
                    {{--                    for (var j in a) {--}}
                    {{--                        var item = a[j];--}}

                    {{--                        if (item.media_url && item.media_type === "IMAGE") {--}}
                    {{--                            let post=item.media_url;--}}
                    {{--                            // let link=item.permalink;--}}
                    {{--                            let url = "{{ route("favorite", '') }}" + "/" + post ;--}}
                    {{--//                             console.log(url);--}}
                    {{--                            $('.main').append(`<div class='mr-3 mb-3 mt-3 influencer-areas d-flex justify-content-between">--}}
                    {{--                                    <div class='abss'>--}}
                    {{--                                    <img src="${item.media_url}" width="300px" height="300px">--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="info-insta" style="width:50%;text-align:justify;">--}}
                    {{--                                    <a href="${item.permalink}" style="color:darkolivegreen">See the post</a>--}}
                    {{--                                    <a id="favik" href="{{route('favorite')}}" class="fav"  style="color:darkolivegreen"> Add to favorites</a>--}}
                    {{--                                    <p>${item.caption}</p>--}}
                    {{--                                    <button  style="background: #1e7e34">Likes count - ${item.like_count}</button>--}}
                    {{--                                    <button  style="background: #1e7e34">Comments count - ${item.comments_count}</button>--}}
                    {{--                                    <button style="background:: #8fd19e"> Connect with influencers</button>--}}
                    {{--                                </div>--}}
                    {{--                                    </div>`);--}}
                    {{--           --}}
                    {{--                        }--}}
                    {{--                    }--}}
                    {{--                });--}}
                    {{--            }, error(error) {--}}
                    {{--                Swal.fire(error.responseJSON.message);--}}
                    {{--            }--}}
                    {{--        });--}}
                    $('.main').append(`
                    <table class="table bg-white client-table">
                        <thead>
                        <tr>
                            <th scope="col" class="border-left border-right">Profile</th>
                            <th scope="col">Social reach</th>
                            <th scope="col">Engagement</th>
                            <th scope="col">Estimated cost per post</th>
                            <th scope="col">Post engagement</th>
                            <th scope="col">Bio</th>
                            <th scope="col">Topics</th>
                            <th scope="col">Add to list</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100 " >
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">${i.name} ${i.last_name}</span>
                                    <ul class="list-unstyled d-flex justify-content-around m-0 flex-1 h-100 align-items-center">
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/message-icon.png" alt=""></a></li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/mark-icon.png" alt=""></a></li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/edit-icon.png" alt=""></a></li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/continue-icon.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="img/insta-icon-big.png" alt="">
                                    <span class="ml-2">154 million</span>
                                </div>
                            </td>
                            <td>
                                <div class="engagement-col">
                                    <img src="img/insta-icon-small.png" alt="">
                                    <span class="ml-2">Good</span>
                                </div>
                            </td>
                            <td>
                                <div class="cost-col">
                                    <img src="img/insta-icon-small.png" alt="">
                                    <span class="ml-2">$100 - $300</span>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <span class="ml-2">2,751$</span>
                                    <span class="ml-2 color-light-gray">per post</span>
                                </div>
                            </td>
                            <td>
                                <div class="bio-col">
                                        <span class="color-light-gray fs-normal-12">
                                            Germany 📧
                                            bibisbeautypalace@web.de ❤
                                            @julienco_ 👇🏼👇🏼👇🏼</span>
                                </div>
                            </td>
                            <td>
                                <div class="topic-col d-flex flex-column">
                                    <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                                    <button class="btn-light-yellow">fashion</button>
                                </div>
                            </td>
                              <td>
                               <button class="success add-list btn-header" data-id="${i.id}" style="background: #18FF59;color:black" type="button">Save to lists</button>
                            </td>
                        </tr>
                          </tbody>
                           </table>
                                `);
                })
            }
        })
    })

    $(".open-bar").on("click", function() {
        $(".overlay").css("display", "block");
        $("#profileMenu").addClass("enter");
    });

</script>
