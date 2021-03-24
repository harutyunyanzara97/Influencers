@extends('layouts.app')


<main class="">
    <div class="d-flex align-items-center flex-wrap">
        <div class="relative">
            <img src="img/photo.png" alt="" class="img-fluid">
            <div class="rightSide-content d-flex flex-column">
                <div class="flex-1">
                    <a href="#" class="text-white fs-45">LOGO</a>
                </div>
                <div>
                    <h1 class="fs-72-bold-white mb-5">Welcome to <br> company name!</h1>
                    <p class="fs-16 text-white pt-5">
                        By creating an account you agree to the CName
                        <a href="#" class="color-red"> Terms of Service & Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-1 px-140">
            <ul id="tabs" class="nav nav-tabs">
                <li class="nav-item flex-1"><a href="" data-target="#step1" data-toggle="tab"
                                               class="nav-link small text-uppercase active">1 Step</a></li>
                <li class="nav-item flex-1"><a href="" data-target="#step2" data-toggle="tab"
                                               class="nav-link small text-uppercase">2 Step</a></li>
            </ul>
            <br>
            <h2 class="fs-24-bold-black mb-5">Logo is the smarter way to manage your <br> influencer marketing.</h2>
            <form action="{{url('/signup')}}" method="post" class="pt-2">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    @if($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                    <input type="email" class="form-control pr-input" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6 mb-0">
                        <label for="name" class="fs-14-gray">First Name</label>
                        @if($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                        <input type="text" class="form-control pr-input" id="name" name="name" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        @if($errors->has('last_name'))
                            <div class="error">{{ $errors->first('last_name') }}</div>
                        @endif
                        <label for="lastName" class="fs-14-gray">Last Name</label>
                        <input type="text" class="form-control pr-input" name="last_name" id="lastName"
                               placeholder="Last Name">
                    </div>

                </div>
                @if($errors->has('phone'))
                    <div class="error">{{ $errors->first('phone') }}</div>
                @endif
                <div class="form-group relative">
                    <div class="flag abs">
                        <img src="img/american-flag.png" alt="">
                        <img src="img/angle-down.png" alt="">
                    </div>
                    <label for="phone" class="fs-14-gray">Phone</label>

                    <input type="number" class="form-control pr-input p-l--80" name="phone" id="phone"
                           placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="Password" class="fs-14-gray">Password</label>
                    @if($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                    <input type="password" class="form-control pr-input" name="password" id="Password"
                           placeholder="Password">
                </div>
                <div class="py-4">
                    <p class="fs-18-gray text-left">Already have a Scrunch account?<a href="{{url('/login')}}"
                                                                                      class="color-red"> Log in</a></p>
                </div>
                <div class="fs-14-gray mb-4">Profile Type</div>
                <div class="d-flex justify-content-center">
                    <div class="white-space mx-2 my-2">
                        <div class="flex-1 justify-content-center d-flex">
                            <img src="img/company.png" width="41" height="34" alt="">
                        </div>
                        <div>
                            <h3 class="fs-14-black">Company</h3>
                            <p class="fs-12-gray">I want to promote my product or service</p>
                        </div>
                    </div>
                    <div class="white-space mx-2 my-2">
                        <div class="flex-1 justify-content-center d-flex">
                            <img src="img/brand.png" width="49" height="40" alt="">
                        </div>
                        <div>
                            <h3 class="fs-14-black">Brand</h3>
                            <p class="fs-12-gray">I manage compaigns for multiple brands.</p>
                        </div>
                    </div>
                    <div class="white-space mx-2 my-2">
                        <div class="flex-1 justify-content-center d-flex">
                            <img src="img/agency.png" width="39" height="42" alt="">
                        </div>
                        <div>
                            <h3 class="fs-14-black">Agency</h3>
                            <p class="fs-12-gray">I want to participate in agency compaigns.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 relative">
                    <button type="submit" class="btn-red fs-23 text-white mx-3 mb-2">Sign Up</button>
                    <div class="chat abs">
                        <img src="img/supportChat.png" alt="">
                    </div>
                </div>
            </form>

        </div>

    </div>

</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


