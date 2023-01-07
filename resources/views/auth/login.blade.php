@extends('layout')

@section('content')
<session class="content">
    <section class="main-page-header speaker-banner" style="background: url('assets/img/banner/banner-1.jpg');">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">login</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        login
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account-section">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">hello !</span>
                        <h2 class="title">welcome back</h2>
                    </div>
                    <form class="account-form" action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email<span>*</span></label>
                            <input type="text" placeholder="Email" name="email" id="email" required="">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password<span>*</span></label>
                            <input type="password" placeholder="Password" name="password" id="password" required="">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal2" name="remember" >
                            <label for="bal2">remember me</label>
                            <a href="#" class="forget-pass">Forgot Password?</a>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="log in">
                        </div>
                    </form>
                    <div class="option">
                        Don't have an account? <a href="{{route('register')}}">register now</a>.
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        
                        <li>
                            <a href="#">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </section>
</session>
@endsection