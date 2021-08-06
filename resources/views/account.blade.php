<div class="tab-pane  p-22-32" id="account-profile" role="tabpanel"
     aria-labelledby="account-profile-tab">
    <div class="max-w--933 mb-5 p-4">
        <h3 class="roboto-14">Account profile</h3>
        <p class="roboto-13">Date of account creation {{substr(Auth::user()->created_at,0,10)}}</p>

        <form action="{{url('/storeProfile')}}" method="post" class="pt-2"
              enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <div class="prof-img-area m-0--auto">

                    <img src="{{asset('img/'.Auth::user()->avatar_url)}}" alt="" width="100%">


                    <div class="abs d-flex justify-content-center" @if(Auth::user()->avatar_url) style="top: 100%;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                text-align: center;
                                background-color: #d9d9d9a6;
                                padding-top: 10px;
                                position: static" @endif>

                        <input id="upload" type='file' name="photo[]" onchange="readURL(this);" />
                        <label id="upload-label" for="upload" class="h--50 fs-14-black text-left text-muted">
                            <img src="img/photo-icon.png" alt="" class="mr-2"></label>
                        <img style="
                                /* top: -104px; */
                                bottom: -6px;
                                width: 103px;
                                height: 103px;
                                border-radius: 50%;
                                z-index: -1"
                             id="blah" src="http://placehold.it/180" alt="your image" >
                        {{--                            <input id="upload" type="file" name="photo[]"--}}
                        {{--                                   class="form-control">--}}
                        {{--                            <label id="upload-label" for="upload"--}}
                        {{--                                   class="h--50 fs-14-black text-left text-muted">--}}
                        {{--                                <img src="img/photo-icon.png" alt="" class="mr-2"></label>--}}

                    </div>
                    {{--                        <div class="image-upload post">--}}
                    {{--                            <div class="avatar-upload postAv">--}}
                    {{--                                <div class="avatar-edit">--}}

                    {{--                                    <label for="imageUpload">--}}
                    {{--                                        <div class="_1qOTu css-mm44dn css-1402lio">--}}
                    {{--                                            <svg width="30" height="19" viewBox="0 0 19 19" style="    margin-top: 10px;--}}
                    {{--    width: 43px;--}}
                    {{--    /* bottom: 16px; */--}}
                    {{--    color: white;--}}
                    {{--    display: block;--}}
                    {{--    margin-left: 40px;">--}}
                    {{--                                                <g fill-rule="evenodd">--}}
                    {{--                                                    <path--}}
                    {{--                                                        d="M2 6a1 1 0 0 1 1-1h2.75l.668-1.424A1 1 0 0 1 7.323 3h4.354a1 1 0 0 1 .905.576L13.25 5H16a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6zm1 0v8h13V6h-3.5l-1.018-2H7.518L6.5 6H3zm6.5 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0-1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>--}}
                    {{--                                                </g>--}}
                    {{--                                            </svg>--}}
                    {{--                                        </div>--}}
                    {{--                                        <input type="file" id="imageUpload" name="photo[]" multiple/>--}}
                    {{--                                    </label>--}}
                    {{--                                </div>--}}
                    {{--                                <div id="selectedFiles"></div>--}}
                    {{--                            </div>--}}

                    {{--                        </div>--}}
                    {{--                        <input id="upload" type="file" name="photo[]" onchange="readURL(this);"--}}
                    {{--                               class="form-control">--}}
                    {{--                        <label id="upload-label" for="upload"--}}
                    {{--                               class="h--50 fs-14-black text-left text-muted">--}}
                    {{--                            <img src="img/photo-icon.png" alt="" class="mr-2"></label>--}}

                </div>
            </div>
            <div class="form-group">
                <label for="nameSurname" class="fs-normal-12">Name Surname*</label>
                <input type="text" class="form-control h--50 fs-14-black text-left" id="name"
                       name="name" value="{{Auth::user()->name}}">
                <input type="hidden" class="form-control h--50 fs-14-black text-left" id="surname"
                       name="last_name" value="{{Auth::user()->last_name}}">

            </div>
            <div class="form-group">
                <label for="companyName" class="fs-normal-12">Company name*</label>
                <input type="text" class="form-control h--50 fs-14-black text-left" name="company_name"
                       id="companyName" value="{{Auth::user()->company_name}}">
            </div>
            <div class="form-group">
                <label for="email" class="fs-normal-12">Email*</label>
                <input type="email" class="form-control h--50 fs-14-black text-left" name="email"
                       id="email" value="{{Auth::user()->email}}">
            </div>
            <div>
                <div class="roboto-16 px-5 py-3 ml-4">Select Category</div>
                <div>
                    <div class="rightSide-content-radio">
                        <div class="d-flex justify-content-lg-around pt-5">
                            <div>
                                @if($tag_categories)
                                    @foreach($tag_categories as $category)
                                        <div class="form-group">
                                            <input type="checkbox" id="{{$category->name}}" name="category[]"
                                                   value="{{$category->name}}" {{  (strpos(Auth::user()->category, $category->name) !== false ? ' checked' : '') }}>
                                            <label for="{{$category->name}}">{{$category->name}}</label>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end max-w--440">
                <button class="btn-red-bordered mt-4 br-5 m-l--20">Cancel</button>
                <button class="btn-red mt-4 br-5 m-l--20" type="submit">Save</button>
            </div>
        </form>
        <p class="fs-13-gray px-5 mt-5 pt-5 text-right ">
            <a href="#">Edit Info</a> | <a href="#">Change password</a>
        </p>
    </div>
    <form method="post" action="{{route('saveNet')}}">
        @csrf
    <div class="max-w--933 p-5 mb-5">
        <h3 class="roboto-22 text-center mb-5">Network Selection</h3>
        <div class="mt-5 w-80 mx-auto">
            <div class="d-flex align-items-center mb-3">
                <div class="max-w--110 roboto-12">Facebook</div>
                <div class="flex-1 pr-2">
                    <input type="text" placeholder="http://..." name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..." name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..." name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..."  name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..." name="website[]"  class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..." name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..."  name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..." name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..."  name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..." name="website[]" class="w-100 h--45 social-input">
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
                    <input type="text" placeholder="http://..." name="website[]" class="w-100 h--45 social-input">
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
                    <input type="email" placeholder="http://..."  name="website[]" class="w-100 h--45 social-input">
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
            <button type="reset" class="btn-red-bordered mt-4 br-5 m-l--20">Cancel</button>
            <input class="btn-red mt-4 br-5 m-l--20" type="submit" value="Save">
        </div>
    </div>
    </form>
    <div class="max-w--933 mb-5 p-5">
        <h3 class="roboto-22 text-center mb-5">Change password</h3>
        <div class="max-w--440">
            <form action="{{url('/changePassword')}}" method="post">
                @csrf
                <div class="d-flex justify-content-center mb-4">
                    <div class="w-100">
                        <div class="form-group">
                            <label for="Current password" class="fs-normal-12">Current password</label>
                            <input type="password" class="form-control h--50 fs-14-black text-left"
                                   name="current_password" id="Current password" placeholder="*******">
                        </div>
                        <div class="form-group">
                            <label for="New password" class="fs-normal-12">New password</label>
                            <input type="password" class="form-control h--50 fs-14-black text-left"
                                   name="new_password" id="New password" placeholder="New password">
                        </div>
                        <div class="form-group">
                            <label for="Confirm password" class="fs-normal-12">Confirm password</label>
                            <input type="password" class="form-control h--50 fs-14-black text-left"
                                   name="confirm_password" id="Confirm password"
                                   placeholder="Confirm password">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn-red-bordered mt-4 br-5 m-l--20">Cancel</button>
                    <button class="btn-red mt-4 br-5 m-l--20">Save</button>
                </div>
            </form>

        </div>

    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .css('z-index', "1");
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
