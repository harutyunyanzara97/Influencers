<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://app.influencerunion.net/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://app.influencerunion.net/css/helper.css">
    <link rel="stylesheet" href="https://app.influencerunion.net/css/style.css">
    <link rel="stylesheet" href="https://app.influencerunion.net/css/styleDashboards.css">
    <link rel="stylesheet" href="https://app.influencerunion.net/css/profile.css">
    <title>Client Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta name="csrf-token" content="NXjDkqCK9oUeal9okekq7syvk0s3VNqM7ix6rrHx">



    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <script async="" type="text/javascript" src="https://cdn.livechatinc.com/tracking.js"></script><script async="" type="text/javascript" src="https://cdn.livechatinc.com/tracking.js"></script></head>
<body>

<main class="">
</main>


<script src="https://app.influencerunion.net/js/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12984156;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12984156/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->




<div class="modal fade" id="v-pills-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="pb-4">
                    <div class="d-flex">
                        <div class="flex-1 px-4">
                            <div class="form-group">
                                <label for="nameCampaign1" class="fs-normal-12 active">Campaign Name:</label>
                                <input type="text" class="form-control h--50 fs-14-black text-left" id="nameCampaign2" placeholder="Campaign Name">
                            </div>
                            <div class="form-group relative">
                                <label for="SelectReport" class="fs-normal-12">Select Report</label>
                                <select type="text" class="form-control h--50 fs-14-black text-left" id="SelectReport">
                                    <option value="Campaign Details" selected="" disabled="">Campaign Details</option>
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                </select>
                                <i class="angle-down top-42"><img src="https://app.influencerunion.net/img/arrow-down-small.png" alt=""></i>
                            </div>
                            <div class="form-group">
                                <label for="reportText" class="fs-normal-12 active">Report Text</label>
                                <textarea type="text" rows="10" class="form-control fs-14-black text-left no-resize" id="reportTextt" placeholder="Report Text"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-red mt-4 br-5 m-l--20">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Send message</button>
            </div>
        </div>
    </div>
</div>


<div class="d-flex ava-new">
    <div id="left-sidebar-fix" class="left-sidebar-fix open-sidebar">
        <div class="flex-wrap  p-4">
            <a href="#">
                <img src="img/logo1.png" width="34" height="34" alt="" style="margin:0 auto;position: relative;left:48px">
            </a>
            <div>
                <a href="javascript:void(0)" id="closebtn" class="d-block" onclick="closeNav()">
                    <img src="img/menu-bar.png" alt="" style="position:relative; left: 55px;bottom:-7px">
                </a>
                <span style="margin:0 auto;
                position: relative;
                    font-size: 30px;
                    cursor: pointer;
                    left: 55px;
                    /* bottom: 10px; */
                    ;" id="openbtn" onclick="openNav()" class="d-none">
                    <img src="img/open-right-arrow.png" alt="">
                </span>
            </div>
            <div class="avatar-area" style="position: relative;">
                <div class="avatar-img">
                    <img src="https://app.influencerunion.net/img/1627367182avatar-image-icon.png" alt="" width="100%">
                </div>
                <p class="fs-14-black p-13-20"> admin <img src="img/arrow-down-small.png" alt="" style="float: right; margin-top: 5px; transform: rotate(180deg);" class="open-tab pointer rotate"></p>
            </div>
        </div>

        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-left:60px;">

            <a class="nav-link text-left profile-tab account-profile" href="#account-profile" role="tab" aria-controls="account-profile" aria-selected="false">Account profile</a>
            <a class="nav-link text-left billing" id="billing-details-tab" data-toggle="pill" href="#billing-details" role="tab" aria-controls="billing-details" aria-selected="false">Billing
                details</a>
            <a class="nav-link text-left payment active" id="payment-plans-tab" data-toggle="pill" href="#payment-plans" role="tab" aria-controls="payment-plans" aria-selected="false">Payment Plans</a>
            <a class="nav-link text-left logout" data-toggle="pill" href="https://app.influencerunion.net/logout" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                Sign out
            </a>

            <form id="logout-form" action="https://app.influencerunion.net/logout" method="POST" class="d-none">
                <input type="hidden" name="_token" value="NXjDkqCK9oUeal9okekq7syvk0s3VNqM7ix6rrHx">            </form>



            <a class="nav-link campaignsAndLists d-block" aria-selected="true">
                <div class="d-flex">
                    <span class="icon-teamwork-1"></span>
                    <span class="nav-link-title campaignsAndLists" style="margin-left:10px"> Campaigns</span>
                </div>
            </a>

            <a class="nav-link d-block searchInfluencer" aria-selected="false">
                <div class="d-flex">
                    <span class="icon-Group"></span>
                    <span class="nav-link-title" style="margin-left:10px"> Search </span>
                </div>
            </a>















            <a class="nav-link d-block myLists" aria-selected="false">
                <div class="d-flex">
                    <span class="icon-List"></span>
                    <span class="nav-link-title" style="cursor: pointer;margin-left: 30px">My Lists</span>
                </div>
            </a>
            <a class="nav-link d-block" aria-selected="false">
                <div class="d-flex">
                    <span class="icon-Vector"></span>
                    <span class="nav-link-title" style="cursor: pointer;margin-left:15px"> Bookmarks</span>
                </div>
            </a>
            <a class="nav-link contact d-block" aria-selected="false">
                <div class="d-flex">
                    <span class="icon-file-1"></span>
                    <span class="nav-link-title contact" style="cursor: pointer;margin-left:15px"> Campaign Report</span>
                </div>
            </a>
        </div>
    </div>
































































    <div id="main" class="main-content" style="margin-left: 260px;">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://app.influencerunion.net/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://app.influencerunion.net/css/helper.css">
        <link rel="stylesheet" href="https://app.influencerunion.net/css/style.css">
        <link rel="stylesheet" href="https://app.influencerunion.net/css/styleDashboards.css">
        <link rel="stylesheet" href="https://app.influencerunion.net/css/profile.css">
        <title>Client Dashboard</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>



        <div class="tab-pane p-22-32" id="payment-plans">
            <h3 class="fs-18-red mb-3">Payment Plans</h3>
            <div class="d-flex align-items-center flex-wrap">
                <form class="flex-1">
                    <h5></h5>
                    <div class="card mb-3 paymentPlan active">
                        <div class="d-flex justify-content-between align-items-center pt-1 px-3 ">
                            <p class="mx-2 my-2 dashboard-radio-btn">

                                <label for="starterInfluence" class="fs-18-gray-med">Basic </label>
                            </p>
                            <div class="d-flex align-items-center">
                                <span class="fs-24-bold-black color-gray mr-2">$10.00</span>
                                <span class="fw-300 fs-14"> USD/month <br> Current plan</span>
                                <button data-path="https://app.influencerunion.net/plan/basic" class="btn-header bg-purple ml-4 d-block h--45 d-flex cardButton" style="color:#fff;align-items: center;justify-content: center">Choose
                                </button>


                            </div>
                        </div>
                    </div>
                    <h5></h5>
                    <div class="card mb-3 paymentPlan active">
                        <div class="d-flex justify-content-between align-items-center pt-1 px-3 ">
                            <p class="mx-2 my-2 dashboard-radio-btn">

                                <label for="starterInfluence" class="fs-18-gray-med">Professional </label>
                            </p>
                            <div class="d-flex align-items-center">
                                <span class="fs-24-bold-black color-gray mr-2">$50.00</span>
                                <span class="fw-300 fs-14"> USD/month <br> Current plan</span>
                                <button data-path="https://app.influencerunion.net/plan/Professional" class="btn-header bg-purple ml-4 d-block h--45 d-flex cardButton" style="color:#fff;align-items: center;justify-content: center">Choose
                                </button>


                            </div>
                        </div>
                    </div>
                </form>
                <div class="flex-1 d-flex justify-content-center">
                    <img src="https://app.influencerunion.net/img/paymentPlan-img.png" alt="">
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
                        <label>Access to millions of influencers on social media</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Unlimited searches</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Save up to 300 influencers</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Analyse up to 75 profiles per month</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Get statistics and metrics of each influencer and their audience </label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Group influencers into 50 list</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Manage up to 5 campaigns</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Add up to 300 influencers per campaign</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>3 users</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-control">
                        <label>Reach our support via email</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="ImportModalCenter" tabindex="-1" role="dialog" aria-labelledby="ImportModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content p-32-64">
                    <div class="modal-header border-bottom-0 mb-3">
                        <p class="modal-title title-14 " id="exampleModalLongTitle" style="font-size:14px"><img src="https://app.influencerunion.net/img/import-icon.png" alt=""> Please add a payment method in your profile</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="abs"><img src="https://app.influencerunion.net/img/cross-icon.png" width="24" height="24" alt=""></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal" id="ModalInfluence" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content pb-5 pt-4">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="https://app.influencerunion.net/js/profil.js"></script>
        <script>
            $('.cardButton').on('click', function (event) {
                event.preventDefault();
                $.ajax({
                    url: $(this).data('path'),
                    method: "get",
                    data: {_token: $('meta[name="csrf-token"]').attr('content')},
                    success: (response) => {
                        $('#ModalInfluence div.modal-body').empty();
                        document.getElementById('ModalInfluence').style.display="block";
                        $('#ModalInfluence div.modal-body').append(response);
                    }
                })
            });
            $('.close').on('click',function (event) {
                event.preventDefault();
                document.getElementById('ModalInfluence').style.display="none";
            })

        </script>






    </div>
</div>




<!-- <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> -->







<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://app.influencerunion.net/js/ststistics.js"></script>
<script src="https://app.influencerunion.net/js/jquery/jquery-3.5.1.min.js"></script>
<script src="https://app.influencerunion.net/js/clientDashboard.js" type="text/javascript"></script>


<script>
    function openNav() {
        document.getElementById("left-sidebar-fix").classList.add("open-sidebar");

        // document.getElementById("main").style.marginLeft = "240px";
        document.getElementById("openbtn").classList.add("d-none");
        document.getElementById("openbtn").classList.remove("d-block");
        document.getElementById("closebtn").classList.remove("d-none");
        document.getElementById("closebtn").classList.add("d-block");

    }

    function closeNav() {
        document.getElementById("left-sidebar-fix").classList.remove("open-sidebar");
        // document.getElementById("main").style.marginLeft = "80px";
        document.getElementById("closebtn").classList.remove("d-block");
        document.getElementById("closebtn").classList.add("d-none");
        document.getElementById("openbtn").classList.add("d-block");
        var c = document.getElementsByClassName("text-left");
        for (i = 0; i < c.length; i++) {
            c[i].classList.add("d-none");
        }
    }

    $(document).ready(function () {
        $('.open-tab').click(function () {
            if ($(this).hasClass('rotate')) {
                $(".open-tab").css('transform', 'rotate(360deg)');
                $(".open-tab").removeClass('rotate');
                var c = document.getElementsByClassName("text-left");
                for (i = 0; i < c.length; i++) {
                    c[i].classList.add("d-none");
                }

            } else {
                var c = document.getElementsByClassName("text-left");
                for (i = 0; i < c.length; i++) {
                    c[i].classList.remove("d-none");
                }
                $(".open-tab").css('transform', 'rotate(180deg)');
                $(".open-tab").addClass('rotate');
            }
        })
    })


</script>





<div id="chat-widget-container" style="opacity: 1; visibility: visible; z-index: 2147483639; position: fixed; bottom: 30px; width: 84px; height: 84px; max-width: 100%; max-height: calc(100% - 30px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 30px; transition: none 0s ease 0s !important;"><iframe allow="autoplay;" src="https://secure.livechatinc.com/customer/action/open_chat?license_id=12984156&amp;group=0&amp;embedded=1&amp;widget_version=3&amp;unique_groups=0" allowtransparency="true" id="chat-widget" name="chat-widget" title="LiveChat chat widget" scrolling="no" style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; position: absolute; inset: 0px; transition: none 0s ease 0s !important;"></iframe></div><div class="hiddendiv common"></div><iframe name="stripeXDM_default150469_provider" id="stripeXDM_default150469_provider" aria-hidden="true" src="https://js.stripe.com/v2/channel.html?stripe_xdm_e=https%3A%2F%2Fapp.influencerunion.net&amp;stripe_xdm_c=default150469&amp;stripe_xdm_p=1#__stripe_transport__" frameborder="0" style="position: absolute; top: -2000px; left: 0px;"></iframe><iframe name="__privateStripeMetricsController4340" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/m-outer-5564a2ae650989ada0dc7f7250ae34e9.html#url=https%3A%2F%2Fapp.influencerunion.net%2Fhome&amp;title=Client%20Dashboard&amp;referrer=https%3A%2F%2Fapp.influencerunion.net%2F&amp;muid=eecf9c9b-00d2-462c-a8f3-db3d7952813346ddb1&amp;sid=b0bb33b5-7b02-4d43-a50a-bda5ae4c13ac28fa7d&amp;version=6&amp;preview=false" aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe></body></html>
