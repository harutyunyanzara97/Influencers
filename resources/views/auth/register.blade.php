@extends('layouts.app')


<main class="">
    <div class="d-flex align-items-center">
        <div class="relative">
            <img src="img/photo.png"  alt="" class="img-fluid">
            <div class="rightSide-content d-flex flex-column">
                <div class="flex-1">
                    <a href="#">
                        <img src="{{asset('img/logo1.png')}}" width="34" height="34" alt="">
                    </a>
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
            <h2 class="fs-24-bold-black mb-5">Advertise your business or brand to millions of people on social media.  Our influencer marketing platform makes it easy to build ad campaigns and post ads within our network of professional influencers. </h2>
            <form action="{{ route('register') }}" method="post" class="pt-2">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control pr-input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label for="name" class="fs-14-gray">First Name</label>
                        <input type="text" class="form-control pr-input @error('name') is-invalid @enderror" id="name" name="name" placeholder="First Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label for="lastName" class="fs-14-gray">Last Name</label>
                        <input type="text" class="form-control pr-input @error('last_name') is-invalid @enderror" name="last_name" id="lastName" placeholder="Last Name">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group relative">
                    <div class="flag abs">
                        <img src="img/american-flag.png" alt="">
                        <img src="img/angle-down.png" alt="">
                    </div>
                    <label for="phone" class="fs-14-gray">Phone</label>
                    <input type="number" class="form-control pr-input p-l--80 @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Password" class="fs-14-gray">Password</label>
                    <input type="password" class="form-control pr-input password" name="password" id="Password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="fs-14-gray">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control pr-input" name="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="py-4">
                    <p class="fs-18-gray text-left">Already have a Scrunch account?<a href="{{url('/login')}}" class="color-red"> Log in</a></p>
                </div>
                <input type="hidden" class="profile-input" name="company_name">
                <div class="fs-14-gray mb-4">Profile Type</div>
                <div class="d-flex justify-content-center radio-group">
                    <div class="white-space mx-2 my-2 radio" data-value="Influencer">
                        <div class="flex-1 justify-content-center d-flex">
                            <img src="img/company.png" width="41" height="34" alt="">
                        </div>
                        <div>
                            <h3 class="fs-14-black profile-type">Influencer</h3>
                            <p class="fs-12-gray">I want to promote my product or service</p>
                        </div>
                    </div>
                    <div class="white-space mx-2 my-2 radio" data-value="Company">
                        <div class="flex-1 justify-content-center d-flex">
                            <img src="img/company.png" width="41" height="34" alt="">
                        </div>
                        <div>
                            <h3 class="fs-14-black profile-type">Company</h3>
                            <p class="fs-12-gray">I want to promote my product or service</p>
                        </div>
                    </div>
                    <div class="white-space mx-2 my-2 radio" data-value="Brand">
                        <div class="flex-1 justify-content-center d-flex">
                            <img src="img/brand.png" width="49" height="40" alt="">
                        </div>
                        <div>
                            <h3 class="fs-14-black">Brand</h3>
                            <p class="fs-12-gray">I manage compaigns for multiple brands.</p>
                        </div>
                    </div>
                    <div class="white-space mx-2 my-2 radio" data-value="Agency">
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
                    <!--         <div class="chat abs">
                                 <img src="img/supportChat.png" alt="">
                             </div> -->
                </div>

            </form>

        </div>

    </div>

</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

<script>
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
        var val = $(this).attr('data-value');
        //alert(val);
        $('.profile-input').val(val);
        Swal.fire('Company has been chosen');

    });
</script>
