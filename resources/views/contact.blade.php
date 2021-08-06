@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<style type="text/css">/* Chart.js */
    @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style>
{{--<div class="tab-pane p-22-32" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">--}}
{{--    <h3 class="fs-18-red">Contact with influencer</h3>--}}
{{--    <div class="p-22-32">--}}
{{--        <div class="bg-light-blue py-4">--}}
{{--            <form action="#" class="pb-4">--}}
{{--                <div class="d-flex">--}}
{{--                    <div class="flex-1 px-4">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="nameCampaign1" class="fs-normal-12">Campaign Name:</label>--}}
{{--                            <input type="text" class="form-control h--50 fs-14-black text-left" id="nameCampaign1"--}}
{{--                                   placeholder="Campaign Name">--}}
{{--                        </div>--}}
{{--                        <div class="form-group relative">--}}
{{--                            <label for="SelectReport" class="fs-normal-12">Select Report</label>--}}
{{--                            <select type="text" class="form-control h--50 fs-14-black text-left" id="SelectReports">--}}
{{--                                <option value="Campaign Details" selected disabled>Campaign Details</option>--}}
{{--                                <option value="1">1</option>--}}
{{--                                <option value="1">2</option>--}}
{{--                                <option value="1">3</option>--}}
{{--                                <option value="1">4</option>--}}

{{--                            </select>--}}
{{--                            <i class="angle-down top-42"><img src="{{asset('img/arrow-down-small.png')}}" alt=""></i>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="reportText" class="fs-normal-12">Report Text</label>--}}
{{--                            <textarea type="text" rows="10" class="form-control fs-14-black text-left no-resize"--}}
{{--                                      id="reportText" placeholder="Report Text"></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="flex-1 px-4">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn-red mt-4 br-5 m-l--20">Save</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div id="tabsContent" class="tab-content px-5">
    <div id="statistics" class="show">
        <div class="statistics_header">
            <div class="statistics_header_left">
                <a href="#"> Rebecca Zamoloimg <img src="img/Line%2079%20(1).png" alt=""></a>
                <a href="#">  Start DateApr-23-2020 <span>Ended</span></a>
            </div>
            <div class="statistics_header_right">
                <a href="#"><img src="img/share.svg" alt=""> Share</a>
            </div>
        </div>
        <div class="row statistics_categories_container no-margin">
            <div class="blocks">
                <h3 data-target=".bdcd-example-modal-lg" data-toggle="modal">Posts</h3>
                <p>In the campaign</p>
                <p class="number">0</p>
            </div>
            <div class="blocks">
                <h3 class="btn" data-toggle="modal" data-target="#exampleModalCenter">Engagement</h3>
                <p>In the campaign</p>
                <p class="number">10% <span>AVG. ER%</span></p>
                <div class="statistics_icons_blocks">
                    <div>
                        <img src="img/ant-design_play-circle-filled.svg" alt="">
                        <p>3</p>
                    </div>
                    <div>
                        <img src="img/like%201.svg" alt="">
                        <p>20</p>
                    </div>
                    <div>
                        <img src="img/message.svg" alt="">
                        <p>1</p>
                    </div>
                </div>
            </div>
            <div class="blocks">
                <h3 class="budget_link" data-target=".bdc-example-modal-lg" data-toggle="modal">Campaign <br> Budget</h3>
                <p class="number" style="margin-top:18px!important;">0 <span>AVG. ER%</span></p>
                <div class="statistics_icons_blocks">
                    <div>
                        <img src="img/ant-design_play-circle-filled.svg" alt="">
                        <p>$0.00</p>
                    </div>
                    <div>
                        <img src="img/like%201.svg" alt="">
                        <p>$0.00</p>
                    </div>
                    <div>
                        <img src="img/message.svg" alt="">
                        <p>$0.00</p>
                    </div>
                </div>
            </div>
            <div class="blocks">
                <h3 data-toggle="modal" data-target=".bd-example-modal-lg">Participating Influencers</h3>
                <div class="participating_block">
                    <p class="number">1</p>
                    <div class="participating_block-content">
                        <img src="img/Ellipse%2025.png" alt="">
                        <div>
                            <h4>Name</h4>
                            <button class="btn">0</button>
                            <button class="btn">Button Name</button>
                        </div>
                    </div>
                    <img src="img/edit.svg" alt="" class="edit">
                </div>
            </div>
        </div>
        <div class="analytics_container">
            <div class="analytics_audice_container">
                <section class="tabs">
                    <!-- BEGIN TAB HEADINGS -->
                    <ul class="analytics_ul">
                        <!-- the first tab is selected by default -->
                        <li id="tab1" class="selected">Analytics</li>
                        <li id="">Analytics</li>
                        <li id="tab3">Influencers</li>
                        <div class="clear"></div><!-- clearfix -->
                    </ul>

                    <!-- BEGIN TAB CONTENTS -->

                    <!-- the first tab is selected by default -->
                    <article id="tab1_content" class="selected">
                        <div class="analytics_block">
                            <ul class="analytics_block_ul">
                                <a href="#"> Engagement Rate</a>
                                <a href="#"> Engagement Per Post</a>
                                <a href="#"> Cost Per Engagement</a>
                                <a href="#"> Engagement Timeline</a>
                            </ul>
                            <div class="grafic_container">
                                <div class="bar_grafic">
                                    <canvas id="bar"></canvas>
                                    <p> ...Gathering Data... </p>
                                </div>

                                <div class="line_grafic">
                                    <canvas id="line"></canvas>
                                    <p>Gathering Engagement Trend…</p>
                                </div>

                            </div>
                        </div>
                        <div class="audience_geography_age_ethnicity_container">
                            <div class="audience_geography">
                                <h2>Audience Geography</h2>
                                <div class="top_container">
                                    <div class="top">
                                        <h5>Top Countries </h5>
                                        <p>No Geography data has been collected</p>
                                        <div class="top_bars_container">
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="top_right_block">
                                        <p>No Geography data has been collected</p>
                                        <div class="No_geography_conatiner">
                                            <div>
                                                <span></span>
                                                <p>No Geography data has been collected</p>
                                            </div>
                                            <div>
                                                <span></span>
                                                <p>No Geography data has been collected</p>
                                            </div>
                                            <div>
                                                <span></span>
                                                <p>No Geography data has been collected</p>
                                            </div>
                                            <div>
                                                <span></span>
                                                <p>No Geography data has been collected</p>
                                            </div>
                                            <div>
                                                <span></span>
                                                <p>No Geography data has been collected</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="audience_geography" style="margin-left: 40px">
                                <h2>Age / Ethnicity / Gender</h2>
                                <div class="top_container">
                                    <div class="top">
                                        <h5>Top Age </h5>
                                        <p> No Age data has been collected</p>
                                        <div class="top_bars_container">
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="top" style="margin-left: 27px;">
                                        <h5> Ethnicity </h5>
                                        <p> No Ethnicity data has been collected</p>
                                        <div class="top_bars_container">
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                            <div class="top_bars_block">
                                                <p>%</p>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top_third_block">
                                        <img src="img/wc%201.svg" alt="">
                                        <p>No Gender data has been collected</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article id="tab3_content">
                        <div class="influencers_tab_3_container">
                            <div class="header">
                                <h4>All Influencers</h4>
                                <a>Export to CSV</a>
                            </div>
                            <div class="influencers_social_container">
                                <h5>Socials</h5>
                                <div class="influencers_social_block">
                                    <div>Socials</div>
                                    <div>Finance</div>
                                    <div>Demographics</div>
                                </div>
                            </div>
                            <div class="links_container">
                                <a href="#">Influencer</a>
                                <a href="#">#Posts</a>
                                <a href="#">Posts Imp’s </a>
                                <a href="#">Likes</a>
                                <a href="#">Comments</a>
                                <a href="#">Views</a>
                                <a href="#">Campaign ER%</a>
                                <a href="#">Avg. ER% </a>
                                <a href="#">Potential Reach</a>
                                <a href="#">FTC Compliant</a>
                                <a href="#">Cost </a>
                                <a href="#">%/Like </a>
                                <a href="#">%Comments</a>
                                <a href="#">Top Geo</a>
                                <a href="#">Top Age Group </a>
                                <a href="#">Top Gender</a>
                            </div>
                            <div class="influencers_bottom_cont">
                                <div>
                                    <img src="img/Ellipse%2026.png" alt="">
                                    <p>cccscs</p>
                                    <span>0</span>
                                    <span>0</span>
                                    <span>%10.00</span>
                                </div>
                            </div>
                        </div>

                    </article>

                    <!-- modals start -->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modal_report_stats">
                                <div class="row" id="modalContent">
                                    <div class="col-md-6" id="report_stats">
                                        <h2>Report Stats</h2>
                                        <div class="d-flex align-items-center">
                                            <a href="#">Report A Story</a>
                                            <a href="#">Report A Post</a>
                                        </div>
                                        <div class="select_influencer">
                                            <img src="img/Ellipse%2025%20(1).png" alt="">
                                            <form action="">
                                                <select class="select_influencers">
                                                    <option style="background-image: url('img/amex.png')">Select Influencer
                                                        <img src="img/american-flag.png" alt=""></option>
                                                    <option>Select Influencer</option>
                                                    <option>Select Influencer</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="stats_screenshot_container">
                                            <h2>Stats Screenshot</h2>
                                            <label for="file-input" id="file_label">
                                                <img src="img/bx_bxs-cloud-upload.png"/>
                                                Click to browse. Or drop an image here
                                            </label>
                                            <input id="file-input" type="file" />
                                        </div>

                                    </div>
                                    <div class="col-md-6" id="stats_data">
                                        <div id="stats_data_header">
                                            <h4>Stats Data</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div id="stats_data_form">
                                            <form class="text-left">
                                                <div class="form-group">
                                                    <label for="story_date">Story Date</label>
                                                    <input type="text" class="form-control" id="story_date" aria-describedby="emailHelp" placeholder="Story Date">
                                                    <label for="sticker_taps">Sticker Taps</label>
                                                    <input type="text" class="form-control" id="sticker_taps" aria-describedby="emailHelp" placeholder="Sticker Taps">
                                                    <label for="total_reach">Total Reach</label>
                                                    <input type="text" class="form-control" id="total_reach" aria-describedby="emailHelp" placeholder="Total Reach">
                                                    <label for="link_clicks">Link Clicks</label>
                                                    <input type="text" class="form-control" id="link_clicks" aria-describedby="emailHelp" placeholder="Link Clicks">

                                                    <label for="impressions"># of impressions</label>
                                                    <input type="text" class="form-control" id="impressions" aria-describedby="emailHelp" placeholder="# of impressions">
                                                    <label for="replies">Replies</label>
                                                    <input type="text" class="form-control" id="replies" aria-describedby="emailHelp" placeholder="Replies">
                                                    <label for="taps_back">Taps Back</label>
                                                    <input type="text" class="form-control" id="taps_back" aria-describedby="emailHelp" placeholder="Taps Back">
                                                    <label for="taps_forward">Taps Forward</label>
                                                    <input type="text" class="form-control" id="taps_forward" aria-describedby="emailHelp" placeholder="Taps Forward">
                                                </div>
                                                <button type="submit" class="btn btn-primary bg-red border-0">Done</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade bdc-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" id="track_invitations_container">
                            <div class="track_invitations_header">
                                <h4>Track Invitations</h4>
                                <span aria-hidden="true">×</span>
                            </div>
                            <div class="influencers_invite">
                                <p>Influencers to invite <span>How do invitations work?</span></p>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="select_influencer">
                                    <img src="img/Ellipse%2025%20(1).png" alt="">
                                    <form action="" id="modalForminfluencer">
                                        <select class="select_influencers">
                                            <option>Select Influencer</option>
                                        </select>
                                        <button class="btn-outline-danger" type="submit">Button Name</button>
                                    </form>

                                </div>
                                <div class="track_invitations_email">
                                    <form action="" class="d-flex justify-content-end align-items-center">
                                        <input type="email" required placeholder=" E-Mail" class="form-control">
                                        <button class="btn-red-bordered fs-16">Send</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal fade bdcd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" id="add_past_post_container">
                            <div class="add_past_post_header">
                                <h4>Add Past Post</h4>
                                <span aria-hidden="true">×</span>
                            </div>
                            <form action="" id="add_past_post_form">
                                <label for="post_url">Post Url</label>
                                <input type="text" class="form-control" placeholder="Post Url" id="post_url">

                                <label for="post_costs">Post Costs </label>
                                <input type="text" class="form-control" placeholder="Post Costs" id="post_costs">

                                <button class="btn bg-red">Add</button>
                            </form>
                        </div>
                    </div>










                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content" id="add_influencers">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalCenterTitle"> Add Influencer(s)</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="instagram_handle_body">
                                    <label for="instagram_handle" id="instagram_handle_label">Instagram Handle</label>
                                    <input type="text" id="instagram_handle" placeholder="Instagram Handle" name="" class="form-control">
                                    <p> Separate IG handles by a comma, space, tab or enter to add multiple influencers</p>
                                    <h3> What Would You Like To Track? </h3>
                                    <div class="instagram_handle_profile">
                                        <img src="img/Ellipse%2025%20(1).png" alt="">
                                        <div class="">
                                            <img src="img/Rectangle%20274.png" alt="">
                                            <img src="img/Rectangle%20275.png" alt="">
                                        </div>

                                    </div>
                                    <div class="posts_paragraph">
                                        <h5>Posts</h5>
                                        <p> *In order to track reach & impressions influencers must opt-in to HYPR's application using their Instagram account. We will walk you through the process if you choose this option.</p>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- modals end -->





                </section><!-- //.tabs -->

            </div><!-- //#wrapper -->

        </div>
    </div>
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
                        <a href="profile.html"><img src="img/cba7c99d-de72-4072-95a6-8223b3d646c2%201%20(1).png" alt=""></a>
                    </div>
                    <div>
                        <div class="py-2 px-3">
                            <div class="d-flex justify-content-between fs-16 mb-2">
                                <a href="profile.html">Rebeca Zamolo</a>
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
    <div id="campaigns" class="tab-pane fade" style="margin-left: 32px">
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
                            <a href="#" id="ststis_a"><img src="img/circle-next-icon.png" alt="" class="pointer"></a>
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
                            <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
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
<script src="js/ststistics.js"></script>
