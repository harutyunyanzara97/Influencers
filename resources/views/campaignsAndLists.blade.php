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
                </div>
            </div>
        </form>
    </div>

<div class="d-flex" style="max-width: 1600px; margin: 0 auto; position: relative">

    <div class="main-content">
        <div class="content-header p-10-35">
            <div class="d-flex justify-content-end">
                {{--                <div class="search">--}}
                <div id="calendar">
                    <button><img src="{{asset('img/iconfinder_calendar.png')}}" alt="" ></button>
                </div>
                <div class="input-group m-0 header-input-section" style="">
                    <input type="text" class="form-control m-0 search" name="search" placeholder="Search & find your category" aria-label="Search & find your category" aria-describedby="button-addon2">
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
                    <th scope="col">Productname</th>
                    <th scope="col">Product</th>
                    <th scope="col">Creative</th>
                    <th scope="col">Category</th>
                    <th scope="col">Hashtags</th>
                    <th scope="col">Budget</th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody class="tbody">
                @foreach($campaigns as $campaign)
                <tr>
                    <th scope="row"><span>{{$campaign->title}}</span></th>
                    <td class="product-image"><img src="{{asset('img/'.$campaign->images)}}" alt="" width="200px"></td>
                    <td class="product-description">{{$campaign->details}}</td>
                    <td class="product-description">{{$campaign->category->name}}</td>
                    <td class="product-description">{{$campaign->hashtags}}</td>
                    <td class="dashboard-number">{{$campaign->budget}}</td>
                    <td class="post-details"><p class="data-details">07.02.2021</p><p class="time-details">13:00</p></td>


                    <td class="dashboard-point"><div class="point p-online"></div>Started</td>
                </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="ImportModalCenter" tabindex="-1" role="dialog" aria-labelledby="ImportModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content p-32-64">
                <div class="modal-header border-bottom-0 mb-3">
                    <h5 class="modal-title title-48 " id="exampleModalLongTitle"><img src="{{asset('img/import-icon.png')}}" alt=""> Import</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="abs"><img src="{{asset('img/cross-icon.png" width="24" height="24')}}" alt=""></span>
                    </button>
                </div>
                <p class="fs-18-light">Paste the URL of the blog, Instagram, or Twitter account of the profile you want to import.
                    Import multiple profiles at once by adding URLs on seperate lines.</p>
                <form action="#" class="mt-4">
                    <div class="form-group">
                        <label for="url" class="fs-12-light-gray">URLs</label>
                        <textarea class="form-control no-resize" id="url" rows="6"></textarea>
                    </div>
                    <div class="relative mb-3 mt-4">
                        <label class="fs-12-light-gray">Import profiles into list:</label>
                        <select class="form-control h--50" >
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
    <div class="modal fade" id="ModalInfluence" tabindex="-1" role="dialog" aria-labelledby="ModalInfluenceLabel" aria-hidden="true">
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

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="js/clientDashboard.js" type="text/javascript"></script>


