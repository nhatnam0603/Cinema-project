@extends('layout')

@section('content')
<session class="content">
    <section class="main-page-header speaker-banner" style="background: url('assets/img/banner/banner-1.jpg');">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">forgot password</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        forgot password
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
                        <h2 class="title">don't worry</h2>
                    </div>
                    <form class="account-form">
                        <div class="form-group">
                            <label for="email">Email<span>*</span></label>
                            <input type="text" placeholder="Email" id="email" required="">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="reset link">
                        </div>
                    </form>
                    <div class="option">
                        We send a password reset link to your email.
                    </div>
                </div>
            </div>
        </div>
    </section>
</session>
@endsection