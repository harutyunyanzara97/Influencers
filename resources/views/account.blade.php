<div class="tab-pane  p-22-32" id="account-profile" role="tabpanel"
     aria-labelledby="account-profile-tab">
    <div class="max-w--933 mb-5 p-4">
        <h3 class="roboto-14">Account profile</h3>
        <p class="roboto-13">Date of account creation 22/02/20</p>

        <form action="{{url('/storeProfile')}}" method="post" class="pt-2"
              enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <div class="prof-img-area m-0--auto">
                    @if(Auth::user()->avatar_url)
                        <img src="{{asset('img/'.Auth::user()->avatar_url)}}" alt="" width="100%">
                    @endif
                    <div class="abs d-flex justify-content-center">
                        <input id="upload" type="file" name="photo[]" onchange="readURL(this);"
                               class="form-control">
                        <label id="upload-label" for="upload"
                               class="h--50 fs-14-black text-left text-muted">
                            <img src="img/photo-icon.png" alt="" class="mr-2"></label>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="nameSurname" class="fs-normal-12">Name Surname*</label>
                <input type="text" class="form-control h--50 fs-14-black text-left" id="name"
                       name="name" value="{{Auth::user()->name}}">
                <input type="text" class="form-control h--50 fs-14-black text-left" id="surname"
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
