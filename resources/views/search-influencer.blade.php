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
    <p class="px-3 my-3"><img src="{{asset('img/search-icon-dark.png')}}" alt=""> 92,310 found</p>
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
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#search').on('keyup', function () {
        let value = $(this).val();
        $.ajax({
            type: 'get',
            url: '/searchTag',
            data: {'search': value},
            success: function (data) {
                $('.main').empty();
                $(data).each(function (val, i) {
                    let a=i.data;
                    console.log(a);
                    for(var j in  a) {
                        var item = a[j];

                        if (item.media_url && item.media_type==="IMAGE") {

                            $('.main').append(`<div class='mr-3 mb-3 influencer-areas d-flex justify-content-center'>
                                    <div class='abss' style="width:35%">
                                    <img src="${item.media_url}" width="300px" height="300px">
                                    </div>
                                    <div class="info-insta" style="width:50%;text-align:justify;">
                                    <a href="${item.permalink}" style="color:darkolivegreen">See the post</a>
                                    <p>${item.caption}</p>
                                    <button style="background: #1e7e34">Likes count - ${item.like_count}</button>
                                    <button  style="background: #1e7e34">Comments count - ${item.comments_count}</button>
                                </div>
                                    </div>`);
                        }
                    }
                });
            }
        });
    });
</script>
