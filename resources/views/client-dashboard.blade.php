@include('layout.header')
<div class="modal fade" id="v-pills-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="pb-4">
                    <div class="d-flex">
                        <div class="flex-1 px-4">
                            <div class="form-group">
                                <label for="nameCampaign1" class="fs-normal-12">Campaign Name:</label>
                                <input type="text" class="form-control h--50 fs-14-black text-left" id="nameCampaign2"
                                       placeholder="Campaign Name">
                            </div>
                            <div class="form-group relative">
                                <label for="SelectReport" class="fs-normal-12">Select Report</label>
                                <select type="text" class="form-control h--50 fs-14-black text-left" id="SelectReport">
                                    <option value="Campaign Details" selected disabled>Campaign Details</option>
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                </select>
                                <i class="angle-down top-42"><img src="{{asset('img/arrow-down-small.png')}}"
                                                                  alt=""></i>
                            </div>
                            <div class="form-group">
                                <label for="reportText" class="fs-normal-12">Report Text</label>
                                <textarea type="text" rows="10" class="form-control fs-14-black text-left no-resize"
                                          id="reportTextt" placeholder="Report Text"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-red mt-4 br-5 m-l--20">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>


<div class="d-flex ava-new">
    <div id="left-sidebar-fix" class="left-sidebar-fix">
        <div class="d-flex justify-content-center align-items-center flex-wrap  p-4">
            <a href="#">
                <img src="{{asset('img/logo1.png')}}" width="34" height="34" alt="">
            </a>
        </div>
        <div class="avatar-area d-flex justify-content-center flex-column">
            <div class="avatar-img">

                @if(Auth::user()->avatar_url)
                    <img src="{{asset('img/'.Auth::user()->avatar_url)}}">
                @endif

                <div class="abs"></div>
            </div>
            <p class="fs-14-black p-13-20">{{Auth::user()->name}} <img src="" alt=""
                                                                class="open-tab pointer ava-user"></p>
        </div>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link text-left  d-block profile-tab account-tab" data-toggle="pill" href="#account-profile" role="tab"
               aria-controls="account-profile" aria-selected="false">Account profile</a>
            <a class="nav-link text-left  d-block billing"  href="">Billing details</a>
            <a class="nav-link text-left payment  d-block" id=""  href="">Payment Plans</a>
            <a class="nav-link  d-block " id="v-pills-profile-tab"   role="tab"
               aria-controls="v-pills-profile" aria-selected="false">
                <form>
                <div class="d-flex">
                    <input type="hidden" name="code" value="EAAKOjXPe6CkBAEQaEtyAHwZCbhFvdvbriTts0vjyJBX6xuHL3MSZAQeBWOeGKHqIjIyUf6fYQ7HCT6WV7llOi9qWOnBHwje8GwrZBuiaVkTD7zSiInqsoemDKEhkduZCxkOuFCjmBZB9hLCUNmPNosjDiM8UOqY5v6CwwuLE5oZCEsvg2lRq5biflcQkt49AHCqBwIL2nZAmmFwbR7XZBRPakW6eIXeQvf5Uyb9ekIDbUjkmPulUChbJ">
                    <span class="icon-Group searchInfluencer">   Search</span>
                    <span class="nav-link-title search">  Search </span>
                </div>
                </form>
            </a>

            <a class="nav-link d-block campaignsAndLists">
                <span class="icon-teamwork-1">   Campaigns</span>
            </a>

            <a class="nav-link myLists d-block">
                <span class="icon-List">     My Lists</span>
            </a>
            <a class="nav-link d-block contact">
                <span class="icon-file-1">  Contact with influencer</span>
            </a>
                <a class="nav-link d-block logout"  href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>


        </div>
    </div>
    <div id="main" class="main-content">
        <div class="content-header ">
            <div class="d-flex justify-content-between">
                <div class="input-group m-0 header-input-section">
                    <div id="lgMenu-view" class="px--20">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="fs-24-bold-black mb-0 fw-normal">View</h2>
                            <span id="exit-view"><img src="{{asset('img/cross-icon.png')}}" alt=""></span>
                        </div>
                        <div>
                            <p class="fs-18-gray text-left">Turn columns on or off to <br> customize the current view.
                            </p>
                            <form action="#">
                                <div class="rightSide-content-radio">
                                    <h2 class="title-12 py-4">Rows</h2>
                                    <p class="mx-2 my-2">
                                        <input type="radio" id="test1" name="radio-group" checked>
                                        <label for="test1">Compact view</label>
                                    </p>
                                    <p class="mx-2 my-2">
                                        <input type="radio" id="test2" name="radio-group">
                                        <label for="test2">Content view</label>
                                    </p>
                                    <hr>
                                    <h2 class="title-12 py-4">Columns</h2>
                                    <div class="form-group">
                                        <input type="checkbox" id="Europe">
                                        <label for="Europe">Europe</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="NorthAmerica">
                                        <label for="NorthAmerica">North America</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="SouthAmerica">
                                        <label for="SouthAmerica">South America</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="Oceanla">
                                        <label for="Oceanla">Oceanla</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="Asia">
                                        <label for="Asia">Asia</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="Africa">
                                        <label for="Africa">Africa</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="profileMenu" class="p-30-15">
                        <div class="profileMenu--block--content">
                            <div class="d-flex  align-items-center mb-2">
                                <div class="mr-2 d-flex align-items-center flex-1">
                                    <img src="{{asset('img/back-icon.png')}}" alt="" class="mr-2 back-icon">
                                    <h2 class="fs-12 fw-300 font-italic mb-0">View Kylie ✨ profile</h2>
                                </div>
                                <span id="exit-profile1" class="d-flex"><img src="{{asset('img/cross-icon.png')}}"
                                                                             alt=""></span>
                            </div>
                            <hr>
                            <div class="profileMenu--block--content-img">
                                <img src="{{asset('img/profBlock-content-img.png')}}" alt="" class="mb-2">
                                <p class="fs-14-gray fw-normal">Throwback🤰🏻pregnant with my baby girl. I can’t believe
                                    my daughter will be two soon..🖤 #stormi</p>
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="d-flex mb-3">
                                    <div class="fs-14 fw-300">Status</div>
                                    <div class="d-flex align-items-end ml-3">
                                        <img src="{{asset('img/dots.png')}}" alt="" class="mb-2">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="d-flex mr-4">
                                        <img src="{{asset('img/heart-icon.png')}}" alt="" class="mr-2">
                                        <p class="m-0 fs-14-black">9.5 million likes</p>
                                    </div>
                                    <div class="d-flex">
                                        <img src="{{asset('img/chat-icon.png')}}" alt="" class="mr-2">
                                        <p class="m-0 fs-14-black">41,758 comments</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="d-flex mb-3">
                                    <div class="fs-14 fw-300">Author</div>
                                    <div class="d-flex align-items-end ml-3">
                                        <img src="{{asset('img/dots.png')}}" alt="" class="mb-2">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div class="m">
                                            <img src="{{asset('img/insta-icon-big.png')}}" alt="" class="mr-2">
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
                            <div class="d-flex  align-items-start mb-2">
                                <div class="d-flex align-items-center flex-1">
                                    <div class="profileMenu--avatar-img mr-2">
                                        <img src="{{asset('img/prof-avatar.png')}}" alt="">
                                    </div>
                                    <div>
                                        <h2 class="fs-24-bold-black fw-normal mb-2">Kylie Jenner✨</h2>
                                        <div class="d-flex">
                                            <button class="btn-sm-prof fs-12 mx-1">Female</button>
                                            <button class="btn-sm-prof fs-12 mx-1">English</button>
                                            <button class="btn-sm-prof fs-12 mx-1">Preview</button>
                                        </div>
                                    </div>
                                </div>
                                <span id="exit-profile" class="d-flex"><img src="{{asset('img/cross-icon.png')}}"
                                                                            alt=""></span>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-end mb-2 flex-1 align-items-center">
                                <li><a class="nav-link d-block" data-toggle="v-pills-1" href="#v-pills-1" role="tab"
                                       aria-controls="v-pills-1" aria-selected="false">
                                        <img src="{{asset('img/message-icon.png')}}" alt="">
                                    </a>
                                </li>
                                <li><a href="#" class="px-1  d-flex align-items-center"><img
                                            src="{{asset('img/mark-icon.png')}}" alt=""></a></li>
                                <li><a href="#" class="px-1  d-flex align-items-center"><img
                                            src="{{asset('img/edit-icon.png')}}" alt=""></a></li>
                            </ul>
                            <div class="d-flex">
                                <div class="gray-bordered-btn mr-2">
                                    <img src="{{asset('img/plus-add.png')}}" alt="" width="18" height="18" class="mr-2">
                                    Add To List
                                </div>
                                <div class="gray-bordered-btn mr-2">
                                    <img src="{{asset('img/minus-remove.png')}}" alt="" width="18" height="18"
                                         class="mr-2">
                                    Remove From List
                                </div>
                            </div>
                            <hr>
                            <h4 class="fs-24-bold-black text-left pt-3">156.8 million social reach</h4>
                            <div class="d-flex align-items-start mb-3">
                                <img src="{{asset('img/insta-icon-big.png')}}" alt="" class="mt-1">
                                <span class="ml-2 fs-14 pr-5">156.8 million Instagram followers @kyliejenner</span>
                            </div>
                            <hr>
                            <h4 class="fs-24-bold-black text-left">Engagement</h4>
                            <div class="engagement-col mb-3">
                                <img src="{{asset('img/insta-icon-small.png')}}" alt="">
                                <span class="ml-2">High engagement on Instagram</span>
                            </div>
                            <hr>
                            <h4 class="fs-24-bold-black text-left">Estimated cost per post</h4>
                            <div class="cost-col">
                                <img src="{{asset('img/insta-icon-small.png')}}" alt="">
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
                            <div class="d-flex justify-content-between flex-wrap prof"
                                 >
                                <div class="profileMenu--block">
                                    <img src="{{asset('img/Prof-img1.png')}}" alt="">
                                    <div class="abs">
                                        <p class="m-0 roboto-12 text-white">Throwback🤰🏻pregnant with my baby girl. I
                                            can’t believe my daughter will be two soon.. 🖤 #stormi</p>
                                    </div>
                                </div>
                                <div class="profileMenu--block">
                                    <img src="{{asset('img/prof-img2.png')}}" alt="">
                                    <div class="abs">
                                        <p class="m-0 roboto-12 text-white">Throwback🤰🏻pregnant Animi cupiditate
                                            deserunt ipsum magnam obcaecati, porro repudiandae saepe? Accusantium
                                            distinctio eaque expedita iste nam quia saepe velit. Labore. 🖤 #stormi</p>
                                    </div>
                                </div>
                                <div class="profileMenu--block">
                                    <img src="{{asset('img/prof-img2.png')}}" alt="">
                                    <div class="abs">
                                        <p class="m-0 roboto-12 text-white"> Animi cupiditate deserunt ipsum magnam
                                            obcaecati, porro repudiandae saepe? Accusantium distinctio eaque expedita
                                            iste nam quia saepe velit. Labore</p>
                                    </div>
                                </div>
                                <div class="profileMenu--block">
                                    <img src="{{asset('img/maui-weddings-home1%201.png')}}" alt="">
                                    <div class="abs">
                                        <p class="m-0 roboto-12 text-white">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Aperiam molestias, nemo..</p>
                                    </div>
                                </div>
                                <div class="profileMenu--block">
                                    <img src="{{asset('img/maui-weddings-home1%201.png')}}" alt="">
                                    <div class="abs">
                                        <p class="m-0 roboto-12 text-white">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Aperiam molestias, nemo..</p>
                                    </div>
                                </div>
                                <div class="profileMenu--block">
                                    <img src="{{asset('img/prof-img2.png')}}" alt="">
                                    <div class="abs">
                                        <p class="m-0 roboto-12 text-white"> Animi cupiditate deserunt ipsum magnam
                                            obcaecati, porro repudiandae saepe? Accusantium distinctio eaque expedita
                                            iste nam quia saepe velit. Labore</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active tab-account" >
                    <div class="h-100 d-flex align-items-center flex-column justify-content-sm-center big">
                        <img src="{{asset('img/wlcome-icon.png')}}" alt="">

                        <div>
                            Welcome to our platform
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade p-22-32" id="payment-plans" role="tabpanel"
                     aria-labelledby="payment-plans-tab">
                    <h3 class="fs-18-red mb-3">Payment Plans</h3>
                    <div class="d-flex align-items-center flex-wrap">
                        <form class="flex-1">
                            <div class="card mb-3 paymentPlan active">
                                <div class="d-flex justify-content-between align-items-center pt-1 px-3 ">
                                    <p class="mx-2 my-2 dashboard-radio-btn">
                                        <input type="radio" id="starterInfluence" name="radio-group" checked>
                                        <label for="starterInfluence" class="fs-18-gray-med">Stater
                                            (Influencer) </label>
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <span class="fs-24-bold-black color-gray mr-2">$0.00 </span>
                                        <span class="fw-300 fs-14"> USD/month <br> Current plan</span>
                                        <button type="button" class="btn-header bg-purple ml-4 d-none h--45"
                                                data-toggle="modal" data-target="#ModalInfluence">Upgrade
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 paymentPlan">
                                <div class="d-flex justify-content-between align-items-center pt-1 px-3 ">
                                    <p class="mx-2 my-2 dashboard-radio-btn">
                                        <input type="radio" id="starterInfluence1" name="radio-group">
                                        <label for="starterInfluence1" class="fs-18-gray-med">Influence </label>
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <span class="fs-24-bold-black color-gray mr-2">$10.00 </span>
                                        <span class="fw-300 fs-14"> USD/month <br> Current plan</span>
                                        <button type="button" class="btn-header bg-purple ml-4 d-none h--45"
                                                data-toggle="modal" data-target="#ModalInfluence">Upgrade
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 paymentPlan">
                                <div class="d-flex justify-content-between align-items-center pt-1 px-3 ">
                                    <p class="mx-2 my-2 dashboard-radio-btn">
                                        <input type="radio" id="starterInfluence2" name="radio-group">
                                        <label for="starterInfluence2" class="fs-18-gray-med">Influence </label>
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <span class="fs-24-bold-black color-gray mr-2">$100.00 </span>
                                        <span class="fw-300 fs-14"> USD/month <br> Current plan</span>
                                        <button type="button" class="btn-header bg-purple ml-4 d-none h--45"
                                                data-toggle="modal" data-target="#ModalInfluence">Upgrade
                                        </button>
                                    </div>
                                </div>
                            </div>
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



                <div class="tab-pane fade p-22-32" id="v-pills-messages" role="tabpanel"
                     aria-labelledby="v-pills-messages-tab">
                    Tab 3
                </div>
            </div>
        </div>
        <div class="overlay"></div>

        <div class="modal fade" id="ModalInStatiscic" tabindex="-1" role="dialog" aria-labelledby="ModalInfluenceLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content pb-5 pt-4">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><img src="{{asset('img/cross-icon.png')}}" alt=""></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center p-22-32">
                            <h3 class="title-24">Influencer - $10/month</h3>
                            <p class="fs-18-gray">USD$ 10/per month</p>
                            <p class="fs-18-gray mb-5">loremipsum@gmail.com</p>
                            <div class="form-group relative">
                                <img src="{{asset('img/cart-icon.png')}}" alt="" class="abs img-icon">
                                <input type="number" class="form-control pl-5 h--45" placeholder="Card number">
                            </div>
                            <div class="d-flex justify-content-between w-100 mt-4">
                                <div class="form-group relative pr-3 w-50">
                                    <img src="{{asset('img/calendar.png')}}" alt="" class="abs img-icon">
                                    <input type="date" class="form-control fs-14 pl-5 h--45">
                                </div>
                                <div class="form-group relative w-50 ">
                                    <img src="{{asset('img/lock-icon.png')}}" alt="" class="abs img-icon">
                                    <input type="date" class="form-control fs-14 pl-5 h--45">
                                </div>
                            </div>
                            <button class="btn-red w-100 br-5 h--45 mt-3">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<!-- <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> -->
<script src="{{asset('js/clientDashboard.js')}}" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="{{asset('js/ststistics.js')}}"></script>
<script src="{{asset('js/jquery/jquery-3.5.1.min.js')}}"></script>

<script>
    function openNav() {
        document.getElementById("left-sidebar-fix").classList.add("open-sidebar");
        document.getElementById("main").style.marginLeft = "240px";
        document.getElementById("openbtn").classList.add("d-none");
        document.getElementById("openbtn").classList.remove("d-block");
        document.getElementById("closebtn").classList.remove("d-none");
        document.getElementById("closebtn").classList.add("d-block");
    }

    function closeNav() {
        document.getElementById("left-sidebar-fix").classList.remove("open-sidebar");
        document.getElementById("main").style.marginLeft = "80px";
        document.getElementById("closebtn").classList.remove("d-block");
        document.getElementById("closebtn").classList.add("d-none");
        document.getElementById("openbtn").classList.add("d-block");
    }



</script>





