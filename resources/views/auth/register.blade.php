@extends('layouts.master')
@section('content')

<div class="login-content">
    <div class="login-logo">
        <a href="">
            <img class="align-content" src="{{asset('backend/images/logo.png')}}" alt="">
        </a>
    </div>
    <div class="login-form">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
            </div>
                   
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign Up</button>
                    <div class="social-login-content">
                       
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Go to ? <a href="{{route('login')}}"> Sign in</a></p>
                    </div>
        </form>
    </div>
</div>

@endsection