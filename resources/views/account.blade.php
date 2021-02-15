<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/helper.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleDashboards.css')}}">
    <title>Client Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
<div class="tab-pane p-22-32" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab">
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
            <div class="d-flex justify-content-center mb-4">
                <div class="max-w--440">
                    <div class="form-group">
                        <label for="nameSurname" class="fs-normal-12">Name Surname*</label>
                        <input type="text" class="form-control h--50 fs-14-black text-left" id="nameSurname"
                               placeholder="Name Surname">
                    </div>
                    <div class="form-group">
                        <label for="companyName" class="fs-normal-12">Company name*</label>
                        <input type="text" class="form-control h--50 fs-14-black text-left" id="companyName"
                               placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="fs-normal-12">Email*</label>
                        <input type="email" class="form-control h--50 fs-14-black text-left" id="email"
                               placeholder="example@gmail.com">
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
                <div class="d-flex justify-content-center mb-4">
                    <div class="w-100">
                        <div class="form-group">
                            <label for="Current password" class="fs-normal-12">Current password</label>
                            <input type="password" class="form-control h--50 fs-14-black text-left"
                                   id="Current password" placeholder="*******">
                        </div>
                        <div class="form-group">
                            <label for="New password" class="fs-normal-12">Company name*</label>
                            <input type="password" class="form-control h--50 fs-14-black text-left" id="New password"
                                   placeholder="New password">
                        </div>
                        <div class="form-group">
                            <label for="Confirm password" class="fs-normal-12">Confirm password</label>
                            <input type="password" class="form-control h--50 fs-14-black text-left"
                                   id="Confirm password" placeholder="Confirm password">
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
</body>
</html>
