@include('layout.header')

<main class="">
    <div class="d-flex align-items-center flex-wrap">
        <div class="relative">
            <img src="img/photo.png"  alt="" class="img-fluid">
            <div class="rightSide-content d-flex flex-column">
                <div class="flex-1">
                    <a href="#" class="text-white fs-45">LOGO</a>
                </div>
                <div>
                    <h1 class="fs-72-bold-white mb-5">Welcome to <br> company name!</h1>
                    <p class="fs-16 text-white pt-5">
                         By creating an account you agree to the CName <a href="#" class="color-red"> Terms of Service & Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-1 px-140">
            <h2 class="fs-24-bold-black mb-5">Log in to your account</h2>
            <form action="{{url('/dashboard')}}" method="post" class="pt-2">
                @csrf
                <div class="form-group">
                    <label for="email" class="fs-14-gray">Email</label>
                    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                    <input type="email" class="form-control pr-input" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="Password" class="fs-14-gray">Password</label>
                    {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                    <input type="password" class="form-control pr-input" name="password" id="Password" placeholder="Password">
                </div>
                <div class="d-flex justify-content-between py-4">
                    <p class="fs-18-gray">Don't have an account yet? <a href="{{url('/register')}}" class="color-red">Sign Up </a></p>
                    <a class="fs-18-gray" href="{{ url('/forgetPassword')}}">Forgotten your password?</a>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn-red fs-23 text-white mx-3 mb-2">Sign In</button>
                    <div class="d-flex text-center mt-4 social">
                        <div class="fb-default">
                            <a href="{{url('/redirect')}}"><i class="fa fa-facebook"></i></a>
                        </div>
                    <div class="insta-default">
                        <a href="{{url('/instagram')}}"><i class="fa fa-instagram"></i></a>
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

