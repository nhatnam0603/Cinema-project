@extends('layout')

@section('content')
<session class="content">
    <section class="main-page-header speaker-banner" style="background: url('assets/img/banner/banner-1.jpg');">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">register</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        register
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account-section bg_img" >
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">welcome !</span>
                        <h2 class="title">Create Account</h2>
                    </div>
                    <form class="account-form" action="{{  route('register.post')  }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name<span>*</span></label>
                            <input type="text" placeholder="Enter Your Name" name="name" id="name" required="" value="{{old('name')}}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span>*</span></label>
                            <input type="text" placeholder="Enter Your Email" name="email" id="email" required="" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password<span>*</span></label>
                            <input type="password" placeholder="Password" name="password" id="password" required="">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password<span>*</span></label>
                            <input type="password" placeholder="Re-type Password" name="password_confirmation" id="confirm-password" required="">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                    <div class="option">
                        Already have an account? <a href="{{route('login')}}">Login</a>.
                    </div>
                </div>
            </div>
        </div>
    </section>
</session>
@endsection
