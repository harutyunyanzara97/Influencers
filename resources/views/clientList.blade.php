<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleDashboards.css">
    <link rel="stylesheet" href="css/clientList.css">
    <link rel="stylesheet" href="css/fresh-bootstrap-table.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <script src="js/clientList.js"></script>


    <link rel="stylesheet" href="cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <title>Client List</title>
</head>
<body>
<div class="d-flex" style="max-width: 1600px; position: relative">
    <div id="left-sidebar-fix" class="left-sidebar-fix">
        <div class="d-flex justify-content-center align-items-center flex-wrap  p-4">
            <a href="#">
                <img src="img/logo1.png" width="34" height="34" alt="">
            </a>
            <div>
                <a href="javascript:void(0)" id="closebtn" class=" d-none" onclick="closeNav()">
                    <img src="img/menu-bar.png" alt="">
                </a>
                <span style="font-size:30px;cursor:pointer" id ="openbtn" onclick="openNav()">
                    <img src="img/open-right-arrow.png" alt="">
                </span>
            </div>
        </div>
        <div class="avatar-area d-flex justify-content-center flex-column">
            <div class="avatar-img">
                <img src="img/avatar-img.png" alt="avatarImg">
                <div class="abs"></div>
            </div>
            <p class="fs-14-black p-13-20">Alice Jonson <img src="img/arrow-down-small.png" alt="" style="float: right;margin-top: 5px;" class="open-tab pointer"></p>
        </div>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link text-left  d-none profile-tab" data-toggle="pill" href="#account-profile" role="tab" aria-controls="account-profile" aria-selected="false">Account profile</a>
            <a class="nav-link text-left  d-none" id="billing-details-tab" data-toggle="pill" href="#billing-details" role="tab" aria-controls="billing-details" aria-selected="false">Billing details</a>
            <a class="nav-link text-left  d-none" id="payment-plans-tab" data-toggle="pill" href="#payment-plans" role="tab" aria-controls="payment-plans" aria-selected="false">Payment Plans</a>

            <a class="nav-link  d-block" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <div class="d-flex">
                    <span class="icon-teamwork-1"></span>
                    <span class="nav-link-title"> Campaigns</span>
                </div>
            </a>
            <a class="nav-link  d-block " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                <div class="d-flex">
                    <span class="icon-Group"></span>
                    <span class="nav-link-title"> Search </span>
                </div>
            </a>
            <a class="nav-link  d-block " id="v-pills-profile1-tab" data-toggle="pill" href="#v-pills-profile1" role="tab" aria-controls="v-pills-profile1" aria-selected="false">
                <div class="d-flex">
                    <span class="icon-List"></span>
                    <span class="nav-link-title">My Lists</span>
                </div>
            </a>
            <a class="nav-link d-block" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                <div class="d-flex">
                    <span class="icon-Vector"></span>
                    <span class="nav-link-title"> Bookmarks</span>
                </div>
            </a>
            <a class="nav-link d-block" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                <div class="d-flex">
                    <span class="icon-file-1"></span>
                    <span class="nav-link-title"> Campaign Report</span>
                </div>
            </a>
        </div>
    </div>
    <div  id="main" class="main-content">
        <div class="content-header p-10-35">
            <div class="d-flex justify-content-between">
                <div class="d-none fs-18-gray" id="accountProfile">Account profile/Alice Jonson</div>
                <div class="d-none fs-18-gray" id="billingDetails">Billing Details</div>
                <div class="d-none fs-18-gray" id="planSubscribe">Plan Subscription</div>

                <div class="input-group m-0 header-input-section" style="width: 75%!important;">
                    <span class="abs"><img src="img/search-icon.png" width="16" height="17" alt=""></span>
                    <input type="text" class="form-control m-0" placeholder="Search the directory" aria-label="Search the directory" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="" type="button" id="button-addon2"><img src="img/search-settings.png" alt=""></button>
                    </div>

                    <div id="menu"> <button class="btn-header bg-red ml-4"><img src="img/filter.png" alt="" class="mr-2">Filter</button></div>
                    <div id="menu"> <button class="btn-header-view btn-red-bordered ml-4"><i class="fa fa-eye mr-2" aria-hidden="true" alt=""></i>View</button></div>

                    <div id="menu-view" class="d-none"> <button class="btn-header bg-transparent ml-4"><img src="img/view.png" alt="" class="mr-2">View</button></div>
                </div>
                <button class="btn-header bg-purple ml-4" data-toggle="modal" data-target="#ImportModalCenter"><img src="img/import.png" alt="" class="mr-2">Import</button>
                <div id="lgMenu" class="px--20">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="fs-24-bold-black mb-0 fw-normal">Filter</h2>
                        <span id="exit"><img src="img/cross-icon.png" alt=""></span>
                    </div>
                    <div class="w-100">
                        <button class="btn-clear-filter">Clear Filter</button>
                    </div>
                    <h4 class="title-12 py-4">Location</h4>
                    <div>
                        <input type="text" placeholder="Find profiles in any of these locations" class="form-control">
                        <div class="form-group text-center my-3">
                            <form action="#">
                                <div class="form-check text-left mb-3 mt-3">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label fs-14-gray" for="gridCheck1">Europe</label>
                                </div>
                                <div class="form-check text-left mb-3">
                                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                                    <label class="form-check-label fs-14-gray" for="gridCheck2">North America</label>
                                </div>
                                <div class="form-check text-left mb-3">
                                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                                    <label class="form-check-label fs-14-gray" for="gridCheck3">South America</label>
                                </div>
                                <div class="form-check text-left mb-3">
                                    <input class="form-check-input" type="checkbox" id="gridCheck4">
                                    <label class="form-check-label fs-14-gray" for="gridCheck4">Oceanla</label>
                                </div>
                                <div class="form-check text-left mb-3">
                                    <input class="form-check-input" type="checkbox" id="gridCheck5">
                                    <label class="form-check-label fs-14-gray" for="gridCheck5">Asia</label>
                                </div>
                                <div class="form-check text-left mb-3">
                                    <input class="form-check-input" type="checkbox" id="gridCheck6">
                                    <label class="form-check-label fs-14-gray" for="gridCheck6">Africa</label>
                                </div>
                            </form>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center justify-content-between">
                                <span class="fs-12-light-gray">Follower range</span>
                                <span><img src="img/padlock.png" alt=""></span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <span class="fs-12-light-gray">Networks</span>
                                <span><img src="img/padlock.png" alt=""></span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <span class="fs-12-light-gray">Audience filters</span>
                                <span><img src="img/padlock.png" alt=""></span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <span class="fs-12-light-gray">Post frequency</span>
                                <span><img src="img/padlock.png" alt=""></span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <span class="fs-12-light-gray">Follower range</span>
                                <span><img src="img/padlock.png" alt=""></span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <span class="fs-12-light-gray">Date range</span>
                                <span><img src="img/padlock.png" alt=""></span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <span class="fs-12-light-gray">Gender</span>
                                <span><img src="img/padlock.png" alt=""></span>
                            </li>
                        </ul>
                    </div>
                    <h4 class="title-12 py-4">Bookmarks & lists</h4>
                </div>
                <div id="lgMenu-view" class="px--20">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="fs-24-bold-black mb-0 fw-normal">View</h2>
                        <span id="exit-view"><img src="img/cross-icon.png" alt=""></span>
                    </div>
                    <div>
                        <p class="fs-18-gray text-left">Turn columns on or off to <br> customize the current view. </p>
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
                                    <div class="m">
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
                        <div class="d-flex  align-items-start mb-2">
                            <div class="d-flex align-items-center flex-1">
                                <div class="profileMenu--avatar-img mr-2">
                                    <img src="img/prof-avatar.png" alt="">
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
                            <span id="exit-profile" class="d-flex"><img src="img/cross-icon.png" alt=""></span>
                        </div>
                        <ul class="list-unstyled d-flex justify-content-end mb-2 flex-1 align-items-center">
                            <li><a href="#" class="px-1  d-flex align-items-center"><img src="img/message-icon.png" alt=""></a></li>
                            <li><a href="#" class="px-1  d-flex align-items-center"><img src="img/mark-icon.png" alt=""></a></li>
                            <li><a href="#" class="px-1  d-flex align-items-center"><img src="img/edit-icon.png" alt=""></a></li>
                        </ul>
                        <div class="d-flex">
                            <div class="gray-bordered-btn mr-2">
                                <img src="img/plus-add.png" alt="" width="18" height="18" class="mr-2">
                                Add To List</div>
                            <div class="gray-bordered-btn mr-2">
                                <img src="img/minus-remove.png" alt="" width="18" height="18" class="mr-2">
                                Remove From List</div>
                        </div>
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
                        <div class="d-flex justify-content-between flex-wrap" style="max-height: 350px; overflow-y: scroll; overflow-x: hidden">
                            <div class="profileMenu--block">
                                <img src="img/Prof-img1.png" alt="">
                                <div class="abs">
                                    <p class="m-0 roboto-12 text-white">Throwback🤰🏻pregnant with my baby girl. I can’t believe my daughter will be two soon.. 🖤 #stormi</p>
                                </div>
                            </div>
                            <div class="profileMenu--block">
                                <img src="img/prof-img2.png" alt="">
                                <div class="abs">
                                    <p class="m-0 roboto-12 text-white">Throwback🤰🏻pregnant Animi cupiditate deserunt ipsum magnam obcaecati, porro repudiandae saepe? Accusantium distinctio eaque expedita iste nam quia saepe velit. Labore. 🖤 #stormi</p>
                                </div>
                            </div>
                            <div class="profileMenu--block">
                                <img src="img/prof-img2.png" alt="">
                                <div class="abs">
                                    <p class="m-0 roboto-12 text-white"> Animi cupiditate deserunt ipsum magnam obcaecati, porro repudiandae saepe? Accusantium distinctio eaque expedita iste nam quia saepe velit. Labore</p>
                                </div>
                            </div>
                            <div class="profileMenu--block">
                                <img src="img/maui-weddings-home1%201.png" alt="">
                                <div class="abs">
                                    <p class="m-0 roboto-12 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam molestias, nemo..</p>
                                </div>
                            </div>
                            <div class="profileMenu--block">
                                <img src="img/maui-weddings-home1%201.png" alt="">
                                <div class="abs">
                                    <p class="m-0 roboto-12 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam molestias, nemo..</p>
                                </div>
                            </div>
                            <div class="profileMenu--block">
                                <img src="img/prof-img2.png" alt="">
                                <div class="abs">
                                    <p class="m-0 roboto-12 text-white"> Animi cupiditate deserunt ipsum magnam obcaecati, porro repudiandae saepe? Accusantium distinctio eaque expedita iste nam quia saepe velit. Labore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 ml-3">
            <img src="img/Vector (3).svg" alt="">
            <span>92,310 found</span>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" style="height: calc(100vh - 57px)">
                <div class="h-100 d-flex flex-column justify-content-sm-top table-responsive">
                       
                        <!-- <div class="row">
                            <div class="col-sm-12">
                              <div class="panel panel-default panel-table">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">
                                  <table id="table-scroll" class="table-scroll table">
                                    <thead class="client-list-thead">
                                      <tr>
                                        <th scope="row" class="th-profil">Profile</th>
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
                                    <tbody class="client-list-tbody">
                                      <tr>
                                          <td class="d-flex justify-content-between">
                                              <a href="#" class="pl-2">
                                                <img src="img/+.svg" alt="">
                                                <img src="img/prof-avatar.png" alt="" class="client-list-avatar ml-1">
                                                <span class="ml-2 client-list-name">Kylie Jenner</span>
                                            </a>
                                            <a href="#" class="client-list-tbody-a-icons">
                                                <img src="img/Vector.svg" alt="">
                                                <img src="img/Vector (1).svg" alt="">
                                                <img src="img/writing 2.svg" alt="">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="">
                                                <img src="img/instagram-logo 1svg.svg" alt="">
                                                <span class="client-list-value-text">154 million</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="bg-light-green">
                                                <img src="img/instagram-logo 3.svg" alt="">
                                                <span class="client-list-value-text">Good</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="">
                                                <img src="img/instagram-logo 3.svg" alt="">
                                                <span class="client-list-value-text btn-light-gray">$100 - $300</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="">
                                                <p class="client-list-value-text"> 2,751$ <span>per post</span></p>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="">
                                                <p class="client-list-value-text"><span>Germany 📧 <br> bibisbeautypalace@web.de ❤️<br> @julienco_ 👇🏼👇🏼👇🏼</span></p>
                                            </a>
                                        </td>
                                        
                                      </tr>
                                  </tbody>
                                  
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div> -->

                          <!-- <table 
                            data-toggle="table" 
                            data-pagination="true" 
                            data-search="true" 
                            data-url="data.json">
                            <thead class="client-list-thead">
                                <tr>
                                    <th data-field="Profile" data-sortable="true" class="pl-3">Profile</th>
                                    <th data-field="Social reach" data-sortable="true" class="">Social reach</th>
                                    <th data-field="Engagement" data-sortable="true" class="">Engagement</th>
                                    <th data-field="Estimated cost per post" data-sortable="true" class="">Estimated cost per post</th>
                                    <th data-field="Post engagement" data-sortable="true" class="">Post engagement</th>
                                    <th data-field="Bio" data-sortable="true" class="">Bio</th>
                                    <th data-field="Topics" data-sortable="true" class="">Topics</th>
                                </tr>
                            </thead>
                        </table> -->

                        
                            

                    </div>
                </div>
            </div>
            <div class="tab-pane fade p-22-32" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab">
                <div class="max-w--933 mb-5 p-4">
                    <h3 class="roboto-14">Account profile</h3>
                    <p class="roboto-13">Date of account creation 22/02/20</p>
                    <div class="text-center">
                        <div class="prof-img-area m-0--auto">
                            <img src="img/avatar-img.png" alt="" width="100%">
                            <div class="abs d-flex justify-content-center">
                                <img src="img/photo-icon.png" alt="" width="20" height="20">
                            </div>
                        </div>
                    </div>
                    <form action="#">
                        <div  class="d-flex justify-content-center mb-4">
                            <div class="max-w--440">
                                <div class="form-group">
                                    <label for="nameSurname" class="fs-normal-12">Name Surname*</label>
                                    <input type="text" class="form-control h--50 fs-14-black text-left" id="nameSurname" placeholder="Name Surname">
                                </div>
                                <div class="form-group">
                                    <label for="companyName" class="fs-normal-12">Company name*</label>
                                    <input type="text" class="form-control h--50 fs-14-black text-left" id="companyName" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="fs-normal-12">Email*</label>
                                    <input type="email" class="form-control h--50 fs-14-black text-left" id="email" placeholder="example@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="roboto-16 px-5 py-3 ml-4">Select Category</div>
                            <div>
                                <div class="rightSide-content-radio">
                                    <div class="d-flex justify-content-lg-around pt-5">
                                        <div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Fashion">
                                                <label for="Fashion">Fashion</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Beauty">
                                                <label for="Beauty">Beauty</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Travel">
                                                <label for="Travel">Travel</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Animals&pets">
                                                <label for="Animals&pets">Animals & pets</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Health&fitness">
                                                <label for="Health&fitness">Health & fitness</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Food&drink">
                                                <label for="Food&drink">Food & drink</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Sustainability">
                                                <label for="Sustainability">Sustainability</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Wedding">
                                                <label for="Wedding">Wedding</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Home interior">
                                                <label for="Home interior">Home interior</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Business & finance">
                                                <label for="Business & finance">Business & finance</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Baking">
                                                <label for="Baking">Baking</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Sport">
                                                <label for="Sport">Sport</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Technology">
                                                <label for="Technology">Technology</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Books">
                                                <label for="Books">Books</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Environment">
                                                <label for="Environment">Environment</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Family">
                                                <label for="Family">Family</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Music">
                                                <label for="Music">Music</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Organic food">
                                                <label for="Organic food">Organic food</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="Photography">
                                                <label for="Photography">Photography</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end max-w--440">
                            <button class="btn-red-bordered mt-4 br-5 m-l--20">Cancel</button>
                            <button class="btn-red mt-4 br-5 m-l--20">Save</button>
                        </div>
                    </form>
                    <p class="fs-13-gray px-5 mt-5 pt-5 text-right ">
                        <a href="#">Edit Info</a> | <a href="#">Change password</a>
                    </p>
                </div>
                <div class="max-w--933 p-5 mb-5">
                    <h3 class="roboto-22 text-center mb-5">Network Selection</h3>
                    <div class="mt-5 w-80 mx-auto">
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Facebook</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Facebook">
                                        <input type="checkbox" id="Facebook" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Twitter</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Twitter">
                                        <input type="checkbox" id="Twitter" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Linkedin</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Linkedin">
                                        <input type="checkbox" id="Linkedin" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Google+</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Google">
                                        <input type="checkbox" id="Google" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">YouTube</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="YouTube">
                                        <input type="checkbox" id="YouTube" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Instagram</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Instagram">
                                        <input type="checkbox" id="Instagram" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Tumbler</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Tumbler">
                                        <input type="checkbox" id="Tumbler" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Patreon</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Patreon">
                                        <input type="checkbox" id="Patreon" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Pinterest</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Pinterest">
                                        <input type="checkbox" id="Pinterest" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Wordpress</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Wordpress">
                                        <input type="checkbox" id="Wordpress" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Website</div>
                            <div class="flex-1 pr-2">
                                <input type="text" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Website">
                                        <input type="checkbox" id="Website" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="max-w--110 roboto-12">Email</div>
                            <div class="flex-1 pr-2">
                                <input type="email" placeholder="http://..." class="w-100 h--45 social-input">
                            </div>
                            <div class="ml-1">
                                <div class="checkbox switcher">
                                    <label for="Email1">
                                        <input type="checkbox" id="Email1" value="">
                                        <span><small class="on-off"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end max-w--440">
                        <button class="btn-red-bordered mt-4 br-5 m-l--20">Cancel</button>
                        <button class="btn-red mt-4 br-5 m-l--20">Save</button>
                    </div>
                </div>
                <div class="max-w--933 mb-5 p-5">
                    <h3 class="roboto-22 text-center mb-5">Change password</h3>
                    <div class="max-w--440">
                        <form action="#">
                            <div  class="d-flex justify-content-center mb-4">
                                <div class="w-100">
                                    <div class="form-group">
                                        <label for="Current password" class="fs-normal-12">Current password</label>
                                        <input type="password" class="form-control h--50 fs-14-black text-left" id="Current password" placeholder="*******">
                                    </div>
                                    <div class="form-group">
                                        <label for="New password" class="fs-normal-12">Company name*</label>
                                        <input type="password" class="form-control h--50 fs-14-black text-left" id="New password" placeholder="New password">
                                    </div>
                                    <div class="form-group">
                                        <label for="Confirm password" class="fs-normal-12">Confirm password</label>
                                        <input type="password" class="form-control h--50 fs-14-black text-left" id="Confirm password" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-end">
                            <button class="btn-red-bordered mt-4 br-5 m-l--20">Cancel</button>
                            <button class="btn-red mt-4 br-5 m-l--20">Save</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade p-22-32" id="billing-details" role="tabpanel" aria-labelledby="billing-details-tab">
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
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020-01-08</td>
                                <td>$0.00</td>
                                <td>None</td>
                                <td>Paid</td>
                            </tr>
                            <tr>
                                <td>2020-01-08</td>
                                <td >$0.00</td>
                                <td>None</td>
                                <td>Paid</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade p-22-32" id="payment-plans" role="tabpanel" aria-labelledby="payment-plans-tab">
                <h3 class="fs-18-red mb-3">Payment Plans</h3>
                <div class="d-flex align-items-center flex-wrap">
                    <form class="flex-1">
                        <div class="card mb-3 paymentPlan active">
                            <div class="d-flex justify-content-between align-items-center pt-1 px-3 ">
                                <p class="mx-2 my-2 dashboard-radio-btn">
                                    <input type="radio" id="starterInfluence" name="radio-group" checked>
                                    <label for="starterInfluence" class="fs-18-gray-med">Stater (Influencer) </label>
                                </p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-24-bold-black color-gray mr-2">$0.00 </span>
                                    <span class="fw-300 fs-14"> USD/month <br> Current plan</span>
                                    <button type="button" class="btn-header bg-purple ml-4 d-none h--45" data-toggle="modal" data-target="#ModalInfluence">Upgrade</button>
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
                                    <button type="button" class="btn-header bg-purple ml-4 d-none h--45" data-toggle="modal" data-target="#ModalInfluence">Upgrade</button>
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
                                    <button type="button" class="btn-header bg-purple ml-4 d-none h--45" data-toggle="modal" data-target="#ModalInfluence">Upgrade</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="flex-1 d-flex justify-content-center">
                        <img src="img/paymentPlan-img.png" alt="">
                    </div>
                </div>
                <div class="w-50 mt-4">
                    <div class="card mb-3 w-75">
                        <div class="d-flex justify-content-between align-items-center py-1 pl-3 pr-1 ">
                            <input type="text" class="border-0 flex-1 font-italic" placeholder="Promo code">
                            <button class="btn-dark--grey max-w--120 h--45">Apply</button>
                        </div>
                    </div>
                    <h3 class="fs-18-red mt-4 mb-4">Features</h3>
                    <div class="fs-14-gray font-italic fw-300">Influencer:</div>
                    <form action="" class="w-50 red-check">
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Submit your quote on any campaign a brand invites you to</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>View audience analysis for your claimed profiles on supported social networks campaign a brand invites you to</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Access to training videos to grow your business of Influence</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Access to handy business templates</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Access to cheat sheets </label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Access to a library of Light room Presets</label>
                    </div>
                </form>
                </div>
            </div>


            <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="pb-4">
                    <div class="pt-3 mb-4 border-bottom d-flex justify-content-between w-100">
                        <ul id="tabs" class="nav nav-tabs px-5">
                            <li class="nav-item mr-5"><a href="" data-target="#Lists" data-toggle="tab" class="nav-link small  active">Lists</a></li>
                            <li class="nav-item mr-5"><a href="" data-target="#Campaigns" data-toggle="tab" class="nav-link small">Campaigns</a></li>
                        </ul>
                        <div class="d-flex pr-5">
                            <button class="color-red fs-12 border-0 ml-2 bg-transparent">
                                <img src="img/plus-icon.png" alt="" width="14" height="14" class="mr-1">
                                Create New Campaign</button>
                            <button class="color-red fs-12 border-0 ml-2 bg-transparent">
                                <img src="img/plus-icon.png" alt="" width="14" height="14" class="mr-1">
                                Create New List</button>
                        </div>
                    </div>
                    <div id="tabsContent" class="tab-content px-5">
                        <div id="Lists" class="tab-pane fade active show">
                            <div class="d-flex ">
                                <div class="card">
                                    <div class="roboto-18-gray mb-3">Favorites List</div>
                                    <img src="img/insta-logo.png" alt="" width="18" height="18">
                                    <div class="roboto-16 my-2">Favorites List</div>
                                    <div class="roboto-12 mb-1">1 Influencer</div>
                                    <div class="d-flex justify-content-end">
                                        <button class="gray-bordered-btn list-see-more">See More <img src="img/see-more-icon.png" alt="" width="13" height="13" class="ml-1"></button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="roboto-18-gray mb-3">Favorites List</div>
                                    <img src="img/insta-logo.png" alt="" width="18" height="18">
                                    <div class="roboto-16 my-2">Nina Mendes</div>
                                    <div class="roboto-12 mb-2">1 Influencer</div>
                                    <div class="d-flex justify-content-end">
                                        <button class="gray-bordered-btn list-see-more">See More <img src="img/see-more-icon.png" alt="" width="13" height="13" class="ml-1"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="more-list-card">
                                <div class="d-flex">
                                    <div class="d-flex bg-white" style="border: 1px solid #BFC5CF;">
                                        <div>
                                            <img src="img/cba7c99d-de72-4072-95a6-8223b3d646c2%201%20(1).png" alt="">
                                        </div>
                                        <div>
                                            <div class="py-2 px-3">
                                                <div class="d-flex justify-content-between fs-16 mb-2">
                                                    Rebeca Zamolo
                                                    <button class="bg-transparent border-0">
                                                        <img src="img/carbon_delete.png" alt="" width="15" height="15" class="pointer">
                                                    </button>
                                                </div>
                                                <div class="d-flex mb-4">
                                                    <button class="btn-red-bordered mr-2 size-75-23 fs-12">Music</button>
                                                    <button class="btn-red-bordered mr-2 size-75-23 fs-12">Dance</button>
                                                    <button class="btn-red-bordered mr-2 size-75-23 fs-12">Humor</button>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="d-flex flex-1 mr-3">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-baseline">
                                                                <div class="mr-2">
                                                                    <img src="img/youtube1.png" alt="">
                                                                </div>
                                                                <div class="d-flex fs-12">
                                                                    <div class="mr-2">6.1M <br> Followers</div>
                                                                    <div class="white-space-nowrap">6.34% <br> Engagement rate</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-baseline">
                                                                <div class="mr-2">
                                                                    <img src="img/fb1.png" alt="">
                                                                </div>
                                                                <div class="d-flex fs-12">
                                                                    <div class="mr-2">6.1M <br> Followers</div>
                                                                    <div class="white-space-nowrap">6.34% <br> Engagement rate</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-1">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-baseline">
                                                                <div class="mr-2">
                                                                    <img src="img/insta1.png" alt="">
                                                                </div>
                                                                <div class="d-flex fs-12">
                                                                    <div class="mr-2">6.1M <br> Followers</div>
                                                                    <div class="white-space-nowrap">6.34% <br> Engagement rate</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-baseline">
                                                                <div class="mr-2">
                                                                    <img src="img/twitter1.png" alt="">
                                                                </div>
                                                                <div class="d-flex fs-12">
                                                                    <div class="mr-2">6.1M <br> Followers</div>
                                                                    <div class="white-space-nowrap">6.34% <br> Engagement rate</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end mt-3">
                                                    <button class="color-red fs-12 border-0 ml-2 bg-transparent">
                                                        <img src="img/export-icon.png" alt="" width="14" height="14" class="mr-1">
                                                        Export</button>
                                                    <button class="color-red fs-12 border-0 ml-2 bg-transparent">
                                                        <img src="img/share-icon.png" alt="" width="14" height="14" class="mr-1">
                                                        Share</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Campaigns" class="tab-pane fade">
                            <form action="" class="w-75">
                                <div class="">
                                    <div class="form-group position-relative my-5">
                                        <div class="d-flex justify-content-between">
                                            <label for="myCampaign" class="fs-18-gray">My Campaigns</label>
                                            <button class="color-red fs-12 border-0 ml-2 bg-transparent">
                                                <img src="img/plus-icon.png" alt="" width="14" height="14" class="mr-1">
                                                Create New Campaign</button>
                                        </div>
                                        <input type="text" class="form-control h--60 fs-14-black text-left" id="myCampaign" placeholder="Rebecca Zamolo">
                                        <div class="position-absolute r-35-b-14">
                                            <div class="d-flex align-items-center">
                                                <div class="mr-5 ">1 influencer </div>
                                                <img src="img/circle-next-icon.png" alt="" class="pointer">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative my-5">
                                        <div class="d-flex justify-content-between">
                                            <label for="myLists" class="fs-18-gray">My Lists</label>
                                            <button class="color-red fs-12 border-0 ml-2 bg-transparent">
                                                <img src="img/plus-icon.png" alt="" width="14" height="14" class="mr-1">
                                                Create New List</button>
                                        </div>
                                        <input type="text" class="form-control h--60 fs-14-black text-left" id="myLists" placeholder="Favorites">
                                        <div class="position-absolute r-35-b-14">
                                            <div class="d-flex align-items-center">
                                                <div class="mr-5 ">1 influencer </div>
                                                <img src="img/circle-next-icon.png" alt="" class="pointer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="p-30 main-blocks-div">
                    <h2 class="fs-24-bold-black text-left m-b--30">Find influencers in these topics</h2>
                    <div class="d-flex flex-wrap" style="max-width: calc(100% - 350px); width: 100%">
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/Fashion.png" alt="">
                            <h3 class="influecer-title">Fashion</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/Makeup-for-stunning-and-Adorable-Look-1%201.png" alt="">
                            <h3 class="influecer-title">Beauty</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/travel-blog%201.png" alt="">
                            <h3 class="influecer-title">Travel</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/turtle-caught%201.png" alt="">
                            <h3 class="influecer-title">Animals</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/cardio-workout%201.png" alt="">
                            <h3 class="influecer-title">Health & fitness</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/Local+188+Seafood+Paella+resized%201.png" alt="">
                            <h3 class="influecer-title">Food & drink</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/maui-weddings-home1%201.png" alt="">
                            <h3 class="influecer-title">Wedding</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/InteriorDesign_10_WashingtonDC_-Katherine-Robert%201.png" alt="">
                            <h3 class="influecer-title">Home interior</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/inf9.png" alt="">
                            <h3 class="influecer-title">Business & finance</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/inf10.png" alt="">
                            <h3 class="influecer-title">Baking</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/inf11.png" alt="">
                            <h3 class="influecer-title">Sport</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/inf12.png" alt="">
                            <h3 class="influecer-title">Technology</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/Fashion.png" alt="">
                            <h3 class="influecer-title">Fashion</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/Makeup-for-stunning-and-Adorable-Look-1%201.png" alt="">
                            <h3 class="influecer-title">Beauty</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/travel-blog%201.png" alt="">
                            <h3 class="influecer-title">Travel</h3>
                        </div>
                        <div class="mr-3 mb-3 influecer-area">
                            <div class="abs"></div>
                            <img src="img/turtle-caught%201.png" alt="">
                            <h3 class="influecer-title">Animals</h3>
                        </div>
                    </div>
                </div>
                <p class="px-3 my-3"><img src="img/search-icon-dark.png" alt=""> 92,310 found</p>
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
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100 " >
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
                                        <ul class="list-unstyled d-flex justify-content-around m-0 flex-1 h-100 align-items-center">
                                            <li class="h-100">
                                                <a href="#" class="px-3 h-100 d-flex align-items-center">
                                                    <img src="img/message-icon.png" alt="">
                                                </a>
                                            </li>
                                            <li class="h-100">
                                                <a href="#" class="px-3 h-100 d-flex align-items-center">
                                                    <img src="img/mark-icon.png" alt="">
                                                </a>
                                            </li>
                                            <li class="h-100">
                                                <a href="#" class="px-3 h-100 d-flex align-items-center">
                                                    <img src="img/edit-icon.png" alt="">
                                                </a>
                                            </li>
                                            <li class="h-100">
                                                <a href="#" class="px-3 h-100 d-flex align-items-center">
                                                    <img src="img/continue-icon.png" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="img/insta-icon-big.png" alt="">
                                        <span class="ml-2 white-space-nowrap">154 million</span>
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
                                        <div class="d-flex">
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100">
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
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
                                        <span class="ml-2 white-space-nowrap">154 million</span>
                                        <span class="mx-2">
                                            <img src="img/twitter-table-icon.png">
                                        </span>
                                        <span class="mx-2">
                                            <img src="img/youtube-table-icon.png">
                                        </span>
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
                                        <div class="d-flex">
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                            <tr>
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100">
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
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
                                        <span class="ml-2 white-space-nowrap">154 million</span>
                                        <span class="mx-2"><img src="img/twitter-table-icon.png"></span>
                                        <span class="mx-2"><img src="img/youtube-table-icon.png"></span>
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
                                    <div class="white-space-nowrap">
                                        <span class="ml-2">2,751$ </span>
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
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                                        <span class="ml-2">Male</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">18-24</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">Black</span>
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
                            <tr>
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100">
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
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
                                        <span class="ml-2 white-space-nowrap">154 million</span>
                                        <span class="mx-2"><img src="img/twitter-table-icon.png"></span>
                                        <span class="mx-2"><img src="img/youtube-table-icon.png"></span>
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
                                    <div class="white-space-nowrap">
                                        <span class="ml-2">2,751$ </span>
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
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                                        <span class="ml-2">25-30</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">White</span>
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
                            <tr>
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100">
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
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
                                        <span class="ml-2 white-space-nowrap">154 million</span>
                                        <span class="mx-2"><img src="img/twitter-table-icon.png"></span>
                                        <span class="mx-2"><img src="img/youtube-table-icon.png"></span>
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
                                    <div class="white-space-nowrap">
                                        <span class="ml-2">2,751$ </span>
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
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                                        <span class="ml-2">Male</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">25-30</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">White</span>
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
                            <tr>
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100">
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
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
                                        <span class="ml-2 white-space-nowrap">154 million</span>
                                        <span class="mx-2"><img src="img/twitter-table-icon.png"></span>
                                        <span class="mx-2"><img src="img/youtube-table-icon.png"></span>
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
                                    <div class="white-space-nowrap">
                                        <span class="ml-2">2,751$ </span>
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
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                                        <span class="ml-2">25-30</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">White</span>
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
                            <tr>
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100">
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
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
                                        <span class="ml-2 white-space-nowrap">154 million</span>
                                        <span class="mx-2"><img src="img/twitter-table-icon.png"></span>
                                        <span class="mx-2"><img src="img/youtube-table-icon.png"></span>
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
                                    <div class="white-space-nowrap">
                                        <span class="ml-2">2,751$ </span>
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
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                                        <span class="ml-2">Male</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">25-30</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">White</span>
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
                            <tr>
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100">
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
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
                                        <span class="ml-2 white-space-nowrap">154 million</span>
                                        <span class="mx-2"><img src="img/twitter-table-icon.png"></span>
                                        <span class="mx-2"><img src="img/youtube-table-icon.png"></span>
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
                                    <div class="white-space-nowrap">
                                        <span class="ml-2">2,751$ </span>
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
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                                        <span class="ml-2">25-30</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">White</span>
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
                            <tr>
                                <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                    <div class="d-flex justify-content-around align-items-center h-100">
                                        <span class="mr-3 fs-18-gray">+</span>
                                        <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                        <span class="ml-3 color-black mr-5 white-space-nowrap">Kayle Jenner</span>
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
                                        <span class="ml-2 white-space-nowrap">154 million</span>
                                        <span class="mx-2"><img src="img/twitter-table-icon.png"></span>
                                        <span class="mx-2"><img src="img/youtube-table-icon.png"></span>
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
                                    <div class="white-space-nowrap">
                                        <span class="ml-2">2,751$ </span>
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
                                            <button class="btn-dark-gray text-white text-center mb-1 mr-2">sport</button>
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
                                        <span class="ml-2">Male</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">25-30</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cost-col">
                                        <span class="ml-2">White</span>
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
            <div class="tab-pane fade" id="v-pills-profile1" role="tabpanel" aria-labelledby="v-pills-profile1-tab">
                <div class="p-22-32">
                    <div class="bg-light-blue py-4">
                        <form action="#" class="pb-4">
                            <div  class="d-flex">
                                <div class="flex-1 px-4">
                                    <div class="form-group">
                                        <label for="nameCampaign" class="fs-normal-12">Campaign Name:</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left" id="nameCampaign" placeholder="Campaign Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="CampaignDetails" class="fs-normal-12">Campaign Details</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left" id="CampaignDetails" placeholder="Campaign Details">
                                    </div>
                                    <div class="form-group">
                                        <label for="CampaignCategory" class="fs-normal-12">Category</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left" id="CampaignCategory" placeholder="Category">
                                    </div>
                                    <div class="form-group">
                                        <label for="CampaignDescription" class="fs-normal-12">Business, Product or Service Description</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left" id="CampaignDescription" placeholder="Business, Product or Service Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="CampaignHashTags" class="fs-normal-12">Hash Tags</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left" id="CampaignHashTags" placeholder="Hash Tags">
                                    </div>
                                </div>
                                <div class="flex-1 px-4">
                                    <div class="form-group">
                                        <label for="CampaignCost" class="fs-normal-12">Cost Per Post Rate</label>
                                        <input type="number" class="form-control h--50 fs-14-black text-left" id="CampaignCost" placeholder="Cost Per Post Rate">
                                    </div>
                                    <div class="form-group">
                                        <label for="CampaignGEO" class="fs-normal-12">GEO</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left" id="CampaignGEO" placeholder="GEO">
                                    </div>
                                    <div class="form-group">
                                        <label for="URLCampaign" class="fs-normal-12">Landing Page URL</label>
                                        <input type="url" class="form-control h--50 fs-14-black text-left" id="URLCampaign" placeholder="Landing Page URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="CampaignDate" class="fs-normal-12">Start Date and End Date</label>
                                        <input type="date" class="form-control h--50 fs-14-black text-left" id="CampaignDate" placeholder="Start Date and End Date">
                                    </div>
                                    <div class="form-group mt-4 pt-1 w-50">
                                        <div class="input-group my-3 px-2 py-2 bg-white border-input">
                                            <input id="upload" type="file" onchange="readURL(this);" class="form-control">
                                            <label id="upload-label" for="upload" class="h--50 fs-14-black text-left text-muted">
                                                <img src="img/photo-icon.png" alt="" class="mr-2">Upload Images (Not Mandatory)</label>
                                            <!--                                            <div class="input-group-append">-->
                                            <!--                                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>-->
                                            <!--                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-red mt-4 br-5 m-l--20">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade p-22-32" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                Tab 3
            </div>
            <div class="tab-pane fade p-22-32" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h3 class="fs-18-red">Ad Campaign Set Up</h3>
                <div class="p-22-32">
                    <div class="bg-light-blue py-4">
                        <form action="#" class="pb-4">
                            <div  class="d-flex">
                                <div class="flex-1 px-4">
                                    <div class="form-group">
                                        <label for="nameCampaign1" class="fs-normal-12">Campaign Name:</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left" id="nameCampaign1" placeholder="Campaign Name">
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
                                        <i class="angle-down top-42"><img src="img/arrow-down-small.png" alt=""></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="reportText" class="fs-normal-12">Report Text</label>
                                        <textarea type="text" rows="10" class="form-control fs-14-black text-left no-resize" id="reportText" placeholder="Report Text"></textarea>
                                    </div>
                                </div>
                                <div class="flex-1 px-4">

                                </div>
                            </div>
                            <button type="submit" class="btn-red mt-4 br-5 m-l--20">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ImportModalCenter" tabindex="-1" role="dialog" aria-labelledby="ImportModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content p-32-64">
                <div class="modal-header border-bottom-0 mb-3">
                    <h5 class="modal-title title-48 " id="exampleModalLongTitle"><img src="img/import-icon.png" alt=""> Import</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="abs"><img src="img/cross-icon.png" width="24" height="24" alt=""></span>
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
                        <select class="form-control h--50">
                            <option disabled selected>Import profiles into list</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <span class="select-arrow abs"><img src="img/angle-down.png" alt=""></span>
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
                        <span aria-hidden="true"><img src="img/cross-icon.png" alt=""></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center p-22-32">
                        <h3 class="title-24">Influencer - $10/month</h3>
                        <p class="fs-18-gray">USD$ 10/per month</p>
                        <p class="fs-18-gray mb-5">loremipsum@gmail.com</p>
                        <div class="form-group relative">
                            <img src="img/cart-icon.png" alt="" class="abs img-icon">
                            <input type="number" class="form-control pl-5 h--45" placeholder="Card number">
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-4">
                            <div class="form-group relative pr-3 w-50">
                                <img src="img/calendar.png" alt="" class="abs img-icon">
                                <input type="date" class="form-control fs-14 pl-5 h--45">
                            </div>
                            <div class="form-group relative w-50 ">
                                <img src="img/lock-icon.png" alt="" class="abs img-icon">
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
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="js/clientDashboard.js" type="text/javascript"></script>
<script src="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.js"></script>

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


</body>
</html>