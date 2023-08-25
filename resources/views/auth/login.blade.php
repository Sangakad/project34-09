@extends('layouts.master')
@section('content')

<div class="login-content">
    <div class="login-logo">
        <a href="index.html">
            <img class="align-content" src="{{asset('backend/images/logo.png')}}" alt="">
        </a>
    </div>
    <div class="login-form">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
                    <div class="checkbox">
                        <label>
                    <input type="checkbox"> Remember Me
                </label>
                        <label class="pull-right">
                    <a href="#">Forgotten Password?</a>
                </label>

                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    <div class="social-login-content">
                       
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ? <a href="{{route('register')}}"> Sign Up Here</a></p>
                    </div>
        </form>
    </div>
</div>

@endsection