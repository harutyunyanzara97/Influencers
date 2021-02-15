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
    <link rel="stylesheet" href="css/profile.css">
    <!--chart js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!--chart js-->
    <title>Profile</title>
</head>
<body>
<div class="d-flex" style="max-width: 1600px; position: relative; margin: auto; padding-bottom: 16px; background: #F5F7FB">
    <div  id="main" class="main-content profil-content">
        <div class="content-header p-10-35">
            <div class="d-flex justify-content-between">
                <div class="d-none fs-18-gray" id="accountProfile">Account profile/Alice Jonson</div>
                <div class="d-none fs-18-gray" id="billingDetails">Billing Details</div>
                <div class="d-none fs-18-gray" id="planSubscribe">Plan Subscription</div>

                <div class="input-group  header-input-section" style="width: 593px; margin-right: 410px; margin-left: 220px">
                    <span class="abs"><img src="img/search-icon.png" width="16" height="17" alt=""></span>
                    <input type="text" class="form-control m-0" placeholder="Search the list" aria-label="Search the list" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="" type="button" id="button-addon2"><img src="img/search-settings.png" alt=""></button>
                    </div>

                </div>
                <div class="drop_menu_profile_container">
                    <img src="img/avatar-img.png" alt="" class="rounded-circle">
                    <span id="drop_menu_profile">Alice Jonson<i class="fa fa-angle-down ml-2" aria-hidden="true" style="color: #4C505F;"></i></span>
                    <div class="menu_profile">
                        <a href="#">Accaunt profile</a>
                        <a href="#">Billing details</a>
                        <a href="#">Payment Plans</a>
                    </div>

               </div>
                    <div id="menu-view" class="d-none"> <button class="btn-header bg-transparent ml-4"><img src="img/view.png" alt="" class="mr-2">View</button></div>
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

        <div class="container-fluid no-padding">
                <div class="pb-2">
                    <div class=" border-bottom d-flex justify-content-between w-100" id="">
                        <ul id="tabs" class="nav nav-tabs px-1 profil-tabs">
                            <li class="nav-item mr-4"><a href="clientDashboard.blade.php" data-target="#back" data-toggle="" class="nav-link smal"><i class="fa fa-angle-left mr-3" aria-hidden="true"></i>
 Back to list</a></li>
                            <li class="nav-item mr-4"><a href="#" data-target="#owerview" data-toggle="" class="nav-link smal">Owerview</a></li>
                            <li class="nav-item mr-4"><a href="#" data-target="#Lists" data-toggle="" class="nav-link small">Lists</a></li>
                            <li class="nav-item mr-4"><a href="#" data-target="#Campaigns" data-toggle="" class="nav-link small">Campaigns</a></li>

                        </ul>
                        <div class="d-flex profil-geader-buttons-block" id="profil-geader-buttons-block">
                            <li class="nav-item favorites"><a href="" data-target="#favorites" data-toggle="tab" class="nav-link smal">Favorites</a></li>

                           <button class="color-red fs-12 border-0 bg-transparent">
                                <img src="img/export-icon.png" alt="" width="14" height="14" class="mr-1">
                               Export</button>
                               <button class="color-red fs-12 border-0 ml-3 bg-transparent share-btn">
                                <img src="img/share-icon.png" alt="" width="14" height="14" class="mr-1">
                               Share</button>

                            <button class="color-red fs-12 border-0 ml-3 bg-transparent">
                                <img src="img/plus-icon.png" alt="" width="14" height="14" class="mr-1">
                                Create New Campaign</button>
                            <button class="color-red fs-12 border-0 ml-3 mr-3 bg-transparent">
                                <img src="img/plus-icon.png" alt="" width="14" height="14" class="mr-1">
                                Create New List</button>
                        </div>
                    </div>
                    <div id="tabsContent" class="tab-content px-5">
                        <div id="Lists" class="tab-pane fade show">
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
               <div class="row no-margin">
                   <div class="profile-left-sidebar col-lg-3 no-padding" style="border: 1px solid  #BFC5CF;">
                       <div class="profile-header-info d-flex">
                           <div class="profile-header-img">
                               <img src="img/profile-page-img.png" alt="">
                           </div>
                           <div class="profile-header-text">
                                <h5>Rebecca Zamolo</h5>
                                <a href="#">https://rebeccazamolo.com/</a>
                                <p>Rebecca Zamolo is an American lifestyle enthusiast, fashion influencer, and owner of 'rebeccazamolo', an online fashion shop where she advertises her accessories. In</p>
                           </div>
                       </div>
                       <div class="audit-container">
                           <div class="d-flex align-items-center justify-content-between audit-title-block">
                               <span><img src="img/Vector%20(4).svg" alt="">Adult</span>
                               <span><img src="img/Vector%20(5).svg" alt="">Female</span>
                               <span><img src="img/Group%20205.svg" alt="">Caucasian</span>
                           </div>
                           <div class="sociacl">
                               <div class="d-flex align-items-center justify-content-around">
                                   <img src="img/youtube%201.svg" alt="">
                                   <p><span>6.1M</span><br>Followers</p>
                                   <p><span>48.9K</span><br>Likes</p>
                                   <p><span>32.5K</span><br>Comments</p>
                                   <p><span>-</span><br>  Shares</p>
                                   <p><span>1.3M</span><br>Views</p>
                               </div>
                           </div>
                           <div class="sociacl">
                               <div class="d-flex align-items-center justify-content-around">
                                   <img src="img/Group.svg" alt="">
                                   <p><span>2.8M</span><br>Followers</p>
                                   <p><span>71.7K</span><br>Likes </p>
                                   <p><span>7.5K </span><br>Comments </p>
                                   <p><span>-</span><br>  -</p>
                                   <p><span>168.8K</span><br>Views</p>
                               </div>
                           </div>
                           <div class="sociacl">
                               <div class="d-flex align-items-center justify-content-around">
                                   <img src="img/bx_bxl-facebook.svg" alt="">
                                   <p><span>97.6K</span><br>Followers</p>
                                   <p><span>282</span><br>Reactions </p>
                                   <p><span>62 </span><br>Comments </p>
                                   <p><span> 5 </span><br>Shares</p>
                                   <p><span>-</span><br>Views</p>
                               </div>
                           </div>
                           <div class="sociacl">
                               <div class="d-flex align-items-center justify-content-around">
                                   <img src="img/twitter-black-shape 1.svg" alt="">
                                   <p><span>66.1K</span><br>Followers</p>
                                   <p><span>114</span><br>Likes</p>
                                   <p><span>18</span><br>Comments</p>
                                   <p><span>10</span><br>  Retweets</p>
                                   <p><span>-</span><br>Views</p>
                               </div>
                           </div>
                           <div class="sociacl">
                               <div class="d-flex align-items-center justify-content-start">
                                   <img src="img/Vector (6).svg" alt="" class="ml-3 mr-3">
                                   <p>Info.Rebeccazamolo@gmail.com</p>
                                   <img src="img/Vector (7).svg" alt="" class="ml-5 mr-3">
                                   <p>Unknown</p>

                               </div>
                           </div>
                       </div>
                       <div class="popular-container">
                           <div class="popular-head">
                               <h5>Динамика популярности</h5>
                               <p>По всему миру. 17.06.2017 – 17.06.2020. Веб-поиск.</p>
                               <h4>Rebecca Zamolo</h4>
                           </div>

                           <div class="scale-container">
                             <img src="img/Vector%201%20(1).png" alt="">
                              <div class="scale-line-block">
                                   <p>100</p>
                                    <div class="scale-line"></div>
                              </div>
                              <div class="scale-line-block">
                                   <p>75</p>
                                    <div class="scale-line"></div>
                              </div>
                              <div class="scale-line-block">
                                   <p>50</p>
                                    <div class="scale-line"></div>
                              </div>
                              <div class="scale-line-block">
                                   <p>25</p>
                                    <div class="scale-line"></div>
                              </div>
                                <!--<canvas id="myStat" width="400" height="400"></canvas>-->
                           </div>
                           <div class="events">
                              <div class="events-text">
                                  <p>18 июн. 201… </p>
                                  <p>27 янв. 2020 г.‬ </p>
                              </div>
                               <img src="img/lockup_trends_color_142x24dp%201.png" alt="">
                           </div>
                       </div>
                   </div>
                   <div class="profile-center col-lg-6 no-padding">
                       <div class="audience-interests-container">
                           <div class="audience-interests-header">
                               <h5>Key Audience Interests</h5>
                               <div class="audience-interests-caegories d-flex justify-content-between align-items-center">
                                   <p class="no-margin">Music</p>
                                   <div style="background: #A7E0F6"></div>
                                   <div style="background: #90D8F3"></div>
                                   <div style="background: #79D0F1"></div>
                                   <div style="background: #62C7EE"></div>
                                   <div style="background: #4BBFEC"></div>
                                   <div style="background: #1DAFE7"></div>
                                   <div style="background: #148EBD"></div>
                                   <div style="background: #0F6B8F"></div>
                                   <div style="background: #0A4961;"></div>
                                   <div style="background: #052633;"></div>
                               </div>
                               <div class="audience-interests-caegories d-flex justify-content-between align-items-center">
                                   <p class="no-margin">Dance</p>
                                   <div style="background: #A7E0F6;"></div>
                                   <div style="background: #90D8F3;"></div>
                                   <div style="background: #79D0F1;"></div>
                                   <div style="background: #62C7EE;"></div>
                                   <div style="background: #4BBFEC;"></div>
                                   <div style="background: #1DAFE7;"></div>
                                   <div style="background: #148EBD;"></div>
                                   <div style="background: #0F6B8F;"></div>
                                   <div style="background: #0A4961;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                               </div>
                               <div class="audience-interests-caegories d-flex justify-content-between align-items-center">
                                   <p class="no-margin">Humor</p>
                                   <div style="background: #A7E0F6;"></div>
                                   <div style="background: #90D8F3;"></div>
                                   <div style="background:  #79D0F1;"></div>
                                   <div style="background:  #62C7EE;"></div>
                                   <div style="background: #4BBFEC;"></div>
                                   <div style="background: #1DAFE7;"></div>
                                   <div style="background: #148EBD;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                               </div>
                               <div class="audience-interests-caegories d-flex justify-content-between align-items-center">
                                   <p class="no-margin">Slime</p>
                                   <div style="background: #A7E0F6;"></div>
                                   <div style="background:  #90D8F3;"></div>
                                   <div style="background: #79D0F1;"></div>
                                   <div style="background: #62C7EE;"></div>
                                   <div style="background: #4BBFEC;"></div>
                                   <div style="background:  #1DAFE7;"></div>
                                   <div style="background:  #148EBD;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                               </div>
                               <div class="audience-interests-caegories d-flex justify-content-between align-items-center">
                                   <p class="no-margin">Gaming</p>
                                   <div style="background: #A7E0F6;"></div>
                                   <div style="background:  #90D8F3;"></div>
                                   <div style="background: #79D0F1;"></div>
                                   <div style="background: #62C7EE;"></div>
                                   <div style="background: #4BBFEC;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                                   <div style="background: #fff; border: 1px solid #9BA9B7;"></div>
                               </div>
                           </div>
                       </div>
                       <div class="age-ethnicity-gender-container">
                           <div class="engagement-rate-header">
                              <h5>Age / Ethnicity / Gender </h5>
                         </div>
                         <div class="row">
                             <div class="col-lg-4 text-center">
                                 <img src="img/Group%20215.png" alt="" class="img-responsive">
                             </div>
                             <div class="col-lg-4 text-center">
                                 <img src="img/Group.png" alt="" class="img-responsive">

                             </div>
                             <!--
                             <div class="col-lg-4" style="display: flex;justify-content: flex-start; align-items: flex-end;">
                                 <img src="img/Vector%20(8).svg" alt="" class="img-responsive" style="margin-bottom: 20px">
                                     <div class="d-flex woman">
                                      <meter id="disk_d" value="0.8">84%</meter>
                                      <p>84%</p>
                                     </div>
                             </div>
                             -->
                             <div class="col-lg-4" style="display: flex;justify-content: flex-start; align-items: flex-end;">
                                 <img src="img/Vector%20(8).svg" alt="" class="img-responsive mb-4">
                                 <div style="display: flex; justify-content: flex-start; align-items: center; flex-direction: column;">
                                  <div class="woman">
                                      <div class="woman-line"></div>
                                  </div>
                                     <p class="no-margin woman-text">84%</p>
                                 </div>

                             </div>
                         </div>
                         <div class="row mt-4 mb-4">
                             <div class="col-lg-4">
                                 <div class="age-block">
                                     <h5>Age</h5>
                                     <div class="ml-3 d-flex">
                                         <p><span style="background: #4066E9;"></span>12-18: 36%</p>
                                         <p class="ml-3"><span style="background: #F67159;"></span>26-32: 19%</p>
                                         <p class="ml-2"><span style="background: #A0B3F2;"></span>40-46: 2%</p>
                                     </div>
                                      <div class="ml-3 d-flex">
                                         <p><span style="background: #01EFE6;"></span>19-25: 36%</p>
                                         <p class="ml-3"><span style="background: #FFAB9C;"></span> 33-39: 6%</p>
                                         <p class="ml-2"><span style="background: #7B4DFF;"></span>47>: 1%</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4">
                                  <div class="age-block ethnicity">
                                     <h5>Ethnicity</h5>
                                     <div class="ml-3 d-flex">
                                         <p><span style="background: #4066E9;"></span>African Descent: 10%</p>
                                         <p class="ml-3"><span style="background: #FFAB9C;"></span>Hispanic: 19% </p>
                                     </div>
                                      <div class="ml-3 d-flex">
                                         <p><span style="background: #01EFE6;"></span>Caucasian: 53%</p>
                                         <p><span style="background:  #A0B3F2;margin-left: 40px!important;"></span> Indian: 3%</p>
                                     </div>
                                    <div class="ml-3 d-flex">
                                         <p><span style="background: #F67159;"></span> Asian: 15%</p>
                                     </div>
                                 </div>
                             </div>
                             <!--
                                 <div class="col-lg-4" style="display: flex;justify-content: flex-start; align-items: baseline;">
                                 <img src="img/v9.svg" alt="" class="img-responsive" style="margin-bottom: 20px">
                                 <div class="d-flex woman">
                                     <meter id="disk_c" value="0.3">16%</meter>
                                     <p>16%</p>
                                 </div>
                             </div>
                             -->
                             <div class="col-lg-4" style="display: flex;justify-content: flex-start; align-items: flex-start;">
                                 <img src="img/v9.svg" alt="" class="img-responsive mb-4">
                                 <div style="display: flex; justify-content: flex-start; align-items: center; flex-direction: column;">
                                     <div class="woman"><div class="woman-line" style="width: 31px;"></div></div>
                                     <p class="no-margin woman-text">16%</p>
                                 </div>

                             </div>
                         </div>
                       </div>
                       <div class="engagement-rate-container">
                           <div class="engagement-rate-header">
                              <h5>Avg. Engagement Rate</h5>
                             </div>

                               <div class="row no-margin" id="soc-container">
                                   <div class="col-lg-4 pb-3" style="margin: auto">
                                       <div class="avg">
                                           Avg. ER% <span>2.71% </span>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 pb-3" style="border-left: 0.5px solid #BFC5CF; border-right: 0.5px solid #BFC5CF;">
                                       <div class="row ml-4 mt-2">
                                           <a href="https://www.youtube.com/" target="_blank"><img src="img/Group%20211.png" alt="" class="mr-3"></a>
                                           <div class="soc-text"><span>6.34% </span>Engagement</div>
                                       </div>
                                          <div class="row ml-4 mt-4 pb-3">
                                           <a href="https://twitter.com/" target="_blank"><img src="img/Group%20212.png" alt="" class="mr-3"></a>
                                           <div class="soc-text"><span>0.22% </span>Engagement</div>
                                       </div>
                                   </div>
                                   <div class="col-lg-4">
                                        <div class="row ml-4 mt-2">
                                           <a href="https://www.facebook.com/" target="_blank"><img src="img/Group%20214.png" alt="" class="mr-3"></a>
                                           <div class="soc-text"><span>0.36% </span>Engagement</div>
                                       </div>
                                          <div class="row ml-4 mt-4 pb-3">
                                           <a href="https://www.instagram.com/" target="_blank"><img src="img/Group%20213.png" alt="" class="mr-3"></a>
                                           <div class="soc-text"><span> 2.85% </span>Engagement</div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <div class="profile-right-sidebar col-lg-3 no-padding">
                       <div class="audience-geography-container">
                           <div class="audience-geography-header">
                               <h3>Audience Geography</h3>
                           </div>
                           <div class="box-audience-container">
                               <div class="box-audience-block">
                                   <span>55%</span>
                                   <div class="box-audience" style="background: #0A4961; height: 111px;"></div>
                                   <img src="img/cif_us.png" alt="">
                                   <p>US</p>
                               </div>
                               <div class="box-audience-block">
                                   <span>4%</span>
                                   <div class="box-audience" style="background: #0F6B8F; height: 15px;"></div>
                                   <img src="img/cif_gb.png" alt="">
                                   <p>GB</p>
                               </div>
                               <div class="box-audience-block">
                                   <span>3%</span>
                                   <div class="box-audience" style="background: #148EBD; height: 9px;"></div>
                                   <img src="img/cif_ca.png" alt="">
                                   <p>CA</p>
                               </div>
                               <div class="box-audience-block">
                                   <span>2%</span>
                                   <div class="box-audience" style="background: #1DAFE7; height: 7px;"></div>
                                   <img src="img/Rectangle%20342%20(1).png" alt="">
                                   <p>ID</p>
                               </div>
                               <div class="box-audience-block">
                                   <span>2%</span>
                                   <div class="box-audience" style="background: #62C7EE; height: 7px;"></div>
                                   <img src="img/cif_br.png" alt="">
                                   <p>BR</p>
                               </div>
                           </div>
                       </div>
<!--
                       <canvas id="myBar" width="400" height="400"></canvas>
-->
                       <div class="education-container">
                           <div class="household-income">
                              <div class="audience-geography-header">
                                  <h3>Education / Household Income (US only)</h3>
                               </div>
                               <div class="progres-container">
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #0A4961; width: 119px;"></div>
                                        <p> 9% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background:  #0F6B8F; width: 279px;"></div>
                                        <p> 27% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #148EBD; width: 329px;"></div>
                                        <p> 30% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #4BBFEC; width: 200px;"></div>
                                        <p> 21% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #A7E0F6; width: 140px;"></div>
                                        <p> 13% </p>
                                   </div>
                               </div>
                                <div class="education-text-container">
                                   <h4>Education</h4>
                                   <div class="">
                                       <p><span style="background: #0A4961;"></span>Under High School: 9%</p>
                                       <p><span style="background: #0F6B8F;"></span>High School Degree: 27%</p>
                                       <p><span style="background:  #148EBD;"></span>Some College / Associate Degree: 30%</p>
                                       <p><span style="background:  #4BBFEC;"></span>Bachelor's Degree: 21%</p>
                                       <p><span style="background: #A7E0F6;"></span>Advanced Degree: 13%</p>
                                   </div>
                               </div>
                              <div class="progres-container">
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #0A4961; width: 310px;"></div>
                                        <p> 25% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background:  #0F6B8F; width: 291px;"></div>
                                        <p> 24% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #148EBD; width: 226px;"></div>
                                        <p> 17% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background:  #4BBFEC; width: 130px;"></div>
                                        <p> 11% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #A7E0F6; width: 148px;"></div>
                                        <p> 12% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #C6EAF9; width: 84px;"></div>
                                        <p> 5% </p>
                                   </div>
                                   <div class="progres-block">
                                        <div class="progres-line" style="background: #E0F6FF; width: 106px;"></div>
                                        <p> 6% </p>
                                   </div>
                               </div>
                               <div class="education-text-container">
                                   <h4>Household Income</h4>
                                   <div class="">
                                       <p><span style="background: #0A4961;"></span> Under $25K: 25%</p>
                                       <p><span style="background: #0F6B8F;"></span>$25K-$50K: 24%</p>
                                       <p><span style="background:  #148EBD;"></span>$50K-$75K: 17% </p>
                                       <p><span style="background:  #4BBFEC;"></span>$75K-$100K: 11% </p>
                                       <p><span style="background: #A7E0F6;"></span>$100K-$150K: 12%</p>
                                       <p><span style="background: #E0F6FF;"></span>$150K-$200K: 5%</p>
                                   </div>
                               </div>

                           </div>
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
<!-- <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> -->
<script src="js/clientDashboard.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/profil.js"></script>
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
