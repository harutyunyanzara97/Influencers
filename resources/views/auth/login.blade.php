@extends('layouts.app')
<style>

</style>
<main class="">
    <div class="d-flex align-items-center flex-wrap">
        <div class="relative">
            <img src="img/photo.png"  alt="" class="img-fluid home-img">
            <div class="rightSide-content d-flex flex-column">
                <div class="flex-1">
                    <a href="#">
                        <img src="{{asset('img/logo1.png')}}" width="34" height="34" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="flex-1 px-140">
            <h2 class="fs-24-bold-black mb-5">Login to your account </h2>
            <div class="d-flex justify-content-center m-0-auto flex-direction-column" >
                {{--                <a class="loginAsInfluencer" href="{{route('registerByInfluencer')}}" style="margin-top:140px;">Sign up as an influencer</a>--}}

                <a class="loginAsInfluencer" href="{{route('loginByInfluencer')}}" style="margin-left:40px;margin-top:140px;">Log in as an influencer</a>
            </div>
            <form method="POST" action="{{ route('login') }}" class="pt-2">
                @csrf
                <div class="form-group">
                    <label for="email" class="fs-14-gray @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>Email</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input type="email" class="form-control pr-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                </div>


                <div class="form-group">
                    <label for="password" class="fs-14-gray">{{ __('Password') }}</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input type="password" class="form-control pr-input @error('password') is-invalid @enderror" name="password" id="Password" placeholder="Password">
                </div>
                <div class="d-flex justify-content-between py-4">
                    <p class="fs-18-gray">Don't have an account yet? <a href="{{url('/register')}}" class="color-red">Sign Up </a></p>
                    @if (Route::has('password.request'))
                        <a class="fs-18-gray" href="{{ route('password.request') }}">Forgotten your password?</a>
                    @endif
                </div>


                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn-red fs-23 text-white mx-3 mb-2">Sign In</button>
                    <div class="d-flex text-center mt-4 social justify-content-center">
                        <div class="fb-default">
                            <a href="{{url('/redirect')}}"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="insta-default">
                            <a href="{{url('/login/instagram')}}"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

