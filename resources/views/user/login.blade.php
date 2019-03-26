@extends('layouts.login')

@section('content')
<div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ URL('/login') }}">
                    @csrf
                    <span class="login100-form-title p-b-53">
                        Sign In With
                    </span>

                    
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Email
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input {{ $errors->has('email')?'alert-validate':'' }}" data-validate = "{{ $errors->has('email')?$errors->first('email'):'Email is required' }}">
                        <input class="input100" type="text" name="email" >
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input {{ $errors->has('password')?'alert-validate':'' }}" data-validate = "{{ $errors->has('password')?$errors->first('password'):'Password is required' }}">
                        <input class="input100" type="password" name="password" >
                        <span class="focus-input100"></span>
                    </div>


                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Sign In
                        </button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <a href="{{ URL('/register') }}" class="txt2 bo1">
                            Sign up now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
