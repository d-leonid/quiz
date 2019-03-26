@extends('layouts.login')

@section('content')
<div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" method="post" action="{{ URL('/register') }}">
                    @csrf
                    <span class="login100-form-title p-b-53">
                        Sign Up With
                    </span>

                    
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            First Name
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input {{ $errors->has('first_name')?'alert-validate':'' }}" data-validate = "{{ $errors->has('first_name')?$errors->first('first_name'):'First Name is required' }}">
                        <input class="input100" type="text" name="first_name" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Last Name
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input {{ $errors->has('last_name')?'alert-validate':'' }}" data-validate = "{{ $errors->has('last_name')?$errors->first('last_name'):'Last Name is required' }}">
                        <input class="input100" type="text" name="last_name" >
                        <span class="focus-input100"></span>
                    </div>

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

                    
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Confirm Password
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input " data-validate = "Confirm password is required">
                        <input class="input100" type="password" name="password_confirmation" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>

                    <div class="w-full text-center p-t-55">

                        <a href="{{ URL('/login') }}" class="txt2 bo1">
                            Sign In 
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
