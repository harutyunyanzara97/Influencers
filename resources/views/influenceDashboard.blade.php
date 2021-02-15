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
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleDashboards.css">
    <title>Influence Dashboard</title>
</head>
<body>
<div class="d-flex" style="max-width: 1600px; margin: 0 auto; position: relative">
    <div class="left-sidebar-fix">
        <div class="p-11-25">
            <a href="#">
                <img src="img/logo1.png" width="34" height="34" alt="">
            </a>
        </div>
        <div class="avatar-area d-flex justify-content-center flex-column">
            <div class="avatar-img p-13-20">
                <img src="img/avatar-img.png" alt="">
                <div class="abs"></div>
            </div>
            <p class="fs-14-black p-13-20">Alice Jonson <img src="img/arrow-down-small.png" alt="" style="float: right;margin-top: 5px;" class="open-tab pointer"></p>
        </div>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link d-none" id="account-profile-tab" data-toggle="pill" href="#account-profile" role="tab" aria-controls="account-profile" aria-selected="false">Account profile</a>
            <a class="nav-link d-none" id="billing-details-tab" data-toggle="pill" href="#billing-details" role="tab" aria-controls="billing-details" aria-selected="false">Billing details</a>
            <a class="nav-link d-none" id="payment-method-tab" data-toggle="pill" href="#payment-method" role="tab" aria-controls="payment-method" aria-selected="false">Payment Method</a>

            <a class="nav-link  d-block" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="icon-teamwork-1"></span>Campaigns</a>
            <a class="nav-link  d-block active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="icon-Group"></span>Directory</a>
            <a class="nav-link d-block" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="icon-Vector"></span>Bookmarks</a>
            <a class="nav-link d-block" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span class="icon-file-1"></span>Campaign Report</a>
        </div>
    </div>
    <div class="main-content">
        <div class="content-header p-10-35">
            <div class="d-flex justify-content-between">
                <div class="d-none fs-18-gray" id="accountProfile">Account profile/Alice Jonson</div>
                <div class="d-none fs-18-gray" id="billingDetails">Billing Details</div>
                <div class="d-none fs-18-gray" id="planSubscribe">Payment Method</div>

                <div class="input-group m-0 header-input-section" style="width: 75%!important;">
                    <span class="abs"><img src="img/search-icon.png" width="16" height="17" alt=""></span>
                    <input type="text" class="form-control m-0" placeholder="Search the directory" aria-label="Search the directory" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="" type="button" id="button-addon2"><img src="img/search-settings.png" alt=""></button>
                    </div>

                    <div id="menu"> <button class="btn-header bg-red ml-4"><img src="img/filter.png" alt="" class="mr-2">Filter</button></div>
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
            </div>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade p-22-32" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab">
                <h3 class="fs-18-red">Account profile</h3>
                <div class="p-22-32">
                    <div class="bg-light-blue py-4">
                        <div class="text-center">
                            <div class="prof-img-area m-0--auto">
                                <img src="img/avatar-img.png" alt="" class="w-100">
                            </div>
                            <div>
                                <button class="btn-white"><img src="img/upload-image-icon%20(1).png" alt="" class="m-r--10">Upload image</button>
                                <button class="btn-white"><img src="img/edit-image-icon.png" alt="" class="m-r--10">Edit Info</button>
                            </div>
                        </div>
                        <form action="#">
                            <div  class="d-flex">
                                <div class="flex-1 px-4">
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
                                <div class="flex-1 px-4">
                                    <div class="form-group">
                                        <label for="CurrentPassword" class="fs-normal-12">Current Password</label>
                                        <input type="password" class="form-control h--50 fs-14-black text-left" id="CurrentPassword" placeholder="Current Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPassword" class="fs-normal-12">New Password</label>
                                        <input type="password" class="form-control h--50 fs-14-black text-left" id="NewPassword" placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="ConfirmPassword" class="fs-normal-12">Confirm Password</label>
                                        <input type="password" class="form-control h--50 fs-14-black text-left" id="ConfirmPassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                            <button class="btn-red mt-4 br-5 m-l--20">Save Changes</button>
                        </form>
                        <p class="fs-13-gray mt-4 text-center">Date of account creation 22/02/20</p>
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
            <div class="tab-pane fade p-22-32" id="payment-method" role="tabpanel" aria-labelledby="payment-method-tab">
                <div class="d-flex align-items-center">
                    <div class="flex-1 bg-light-blue">
                        <h3 class="fs-24-bold-black">Credit Card Information</h3>
                        <form action="#" class="card-form">
                            <p class="fs-18-gray">PayPal Selected</p>
                            <p class="fs-18-gray d-none">Cheque Selected</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="mx-2 my-2">
                                    <input type="radio" id="test5" name="radio-group" checked>
                                    <label for="test5"><img src="img/paypal.png" alt=""></label>
                                </p>
                                <p class="mx-2 my-2">
                                    <input type="radio" id="test6" name="radio-group">
                                    <label for="test6"><img src="img/amex.png" alt=""></label>
                                </p>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-3 px--16">
                                    <label for="name1" class="fs-12-light-gray">First Name</label>
                                    <input type="text" class="form-control h--50 fs-14-black text-left " id="name1" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6 mb-3 px--16">
                                    <label for="surname1" class="fs-12-light-gray">Surname</label>
                                    <input type="text" class="form-control h--50 fs-14-black text-left " id="surname1" placeholder="Surname">
                                </div>
                            </div>
                            <div class="d-block">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-3 px--16">
                                        <label for="cardNumber" class="fs-12-light-gray">Credit Card Number</label>
                                        <input type="number" class="form-control h--50 fs-14-black text-left " id="cardNumber" placeholder="****  ****  ****  ****">
                                    </div>
                                    <div class="form-group col-md-6 mb-3 px--16">
                                        <label for="SecurityCode" class="fs-12-light-gray">Security Code</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left " id="SecurityCode" placeholder="CVV">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-3 px--16 relative">
                                        <label for="expirationDate" class="fs-12-light-gray">Expiration Date</label>
                                        <input type="date" class="form-control h--50 fs-14-black text-left " id="expirationDate" placeholder="Company Size">
                                    </div>
                                    <div class="form-group col-md-6 mb-3 px--16 relative">
                                        <label for="postalCode" class="fs-12-light-gray">Postal Code</label>
                                        <input type="number" class="form-control h--50 fs-14-black text-left " id="postalCode" placeholder="0035">
                                    </div>
                                </div>
                            </div>
                            <div class="d-none">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-3 px--16">
                                        <label for="SelectDate" class="fs-12-light-gray">Select Date</label>
                                        <input type="date" class="form-control h--50 fs-14-black text-left " id="SelectDate" placeholder="****  ****  ****  ****">
                                    </div>
                                    <div class="form-group col-md-6 mb-3 px--16 relative">
                                        <label for="ReceiverName" class="fs-12-light-gray">Receiver Name</label>
                                        <input type="date" class="form-control h--50 fs-14-black text-left " id="ReceiverName" placeholder="Company Size">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-3 px--16">
                                        <label for="BankInfo" class="fs-12-light-gray">Bank Info</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left " id="BankInfo" placeholder="CVV">
                                    </div>
                                    <div class="form-group col-md-6 mb-3 px--16 relative">
                                        <label for="Amount" class="fs-12-light-gray">Amount</label>
                                        <input type="text" class="form-control h--50 fs-14-black text-left " id="Amount" placeholder="0035">
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 px--16 w-30">
                                <button type="submit" class="btn-red br-5 max-w--110 h--45">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex justify-content-center w-40">
                        <img src="img/paymentPlan-img.png" alt="">
                    </div>
                </div>
            </div>

            <div class="tab-pane fade p-22-32" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <h3 class="fs-18-red">Ad Campaign Set Up</h3>
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
                                                <img src="img/photo-icon.png" alt="" class="mr-2">
                                                Upload Images (Not Mandatory)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-red mt-4 br-5 m-l--20">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                <div class="pt-2 table-div d-none">
                    <p class="px-3 my-3"><img src="img/search-icon-dark.png" alt=""> 92,310 found</p>
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
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100 " >
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
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
                        </tr>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
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
                                    <span class="mx-2"><img src="img/twitter-table-icon.png" alt=""></span>
                                    <span class="mx-2"><img src="img/youtube-table-icon.png" alt=""></span>
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
                        </tr>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
                                    <ul class="list-unstyled d-flex justify-content-around m-0 flex-1 h-100 align-items-center">
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center">
                                            <img src="img/message-icon.png" alt=""></a>
                                        </li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center">
                                            <img src="img/mark-icon.png" alt=""></a>
                                        </li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center">
                                            <img src="img/edit-icon.png" alt=""></a>
                                        </li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center">
                                            <img src="img/continue-icon.png" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="img/insta-icon-big.png" alt="">
                                    <span class="ml-2">154 million</span>
                                    <span class="mx-2">
                                        <img src="img/twitter-table-icon.png" alt="">
                                    </span>
                                    <span class="mx-2">
                                        <img src="img/youtube-table-icon.png" alt="">
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
                                    <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                                    <button class="btn-light-yellow">fashion</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
                                    <ul class="list-unstyled d-flex justify-content-around m-0 flex-1 h-100 align-items-center">
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/message-icon.png" alt=""></a></li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/mark-icon.png" alt=""/></a></li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/edit-icon.png" alt=""></a></li>
                                        <li class="h-100"><a href="#" class="px-3 h-100 d-flex align-items-center"><img src="img/continue-icon.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="img/insta-icon-big.png" alt="">
                                    <span class="ml-2">154 million</span>
                                    <span class="mx-2"><img src="img/twitter-table-icon.png" alt=""></span>
                                    <span class="mx-2"><img src="img/youtube-table-icon.png" alt=""></span>
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
                                    <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                                    <button class="btn-light-yellow">fashion</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
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
                                    <span class="mx-2">
                                        <img src="img/twitter-table-icon.png" alt="">
                                    </span>
                                    <span class="mx-2">
                                        <img src="img/youtube-table-icon.png" alt="">
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
                                    <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                                    <button class="btn-light-yellow">fashion</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
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
                                    <span class="mx-2"><img src="img/twitter-table-icon.png" alt=""></span>
                                    <span class="mx-2"><img src="img/youtube-table-icon.png" alt=""></span>
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
                                    <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                                    <button class="btn-light-yellow">fashion</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
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
                                    <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                                    <button class="btn-light-yellow">fashion</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
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
                                    <span class="mx-2"><img src="img/twitter-table-icon.png" alt=""></span>
                                    <span class="mx-2"><img src="img/youtube-table-icon.png" alt=""></span>
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
                                    <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                                    <button class="btn-light-yellow">fashion</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" class="border-left border-right pt-0 pb-0 pointer openProfileMenu">
                                <div class="d-flex justify-content-around align-items-center h-100">
                                    <span class="mr-3 fs-18-gray">+</span>
                                    <span class="avatar-img-icon"><img src="img/avatar-image-icon.png" alt=""></span>
                                    <span class="ml-3 color-black mr-5">Kayle Jenner</span>
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
                                    <button class="btn-dark-gray text-white text-center mb-1">sport</button>
                                    <button class="btn-light-yellow">fashion</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
                        <select class="form-control h--50" >
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

<script src="js/clientDashboard.js" type="text/javascript"></script>

</body>
</html>
