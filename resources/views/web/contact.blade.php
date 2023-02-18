@extends('layout')

@section('content')
<session class="content">
    <section class="main-page-header speaker-banner" style="background: url('assets/img/banner/banner-1.jpg');">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">contact us</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        contact us
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact-section padding-top">
        <div class="contact-container">
            <div class="bg-thumb" style="background: url('assets/img/contact/contact.jpg') no-repeat;"></div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="section-header-3 left-style">
                            <span class="cate">contact us</span>
                            <h2 class="title">get in touch</h2>
                            <p>If you have any questions, don't mind to contact us!</p>
                        </div>
                        <div>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                        </div>
                        <form method="post" action="{{  route('contactstore')  }}" id="contact-form" class="contact-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name <span>*</span></label>
                                <input type="text" placeholder="Enter Your Name" name="name" id="name" required="">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span>*</span></label>
                                <input type="text" placeholder="Enter Your Email" name="email" id="email" required="">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject <span>*</span></label>
                                <input type="text" placeholder="Enter Your Subject" name="subject" id="subject" required="">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="message">Message <span>*</span></label>
                                <textarea name="message" id="message" placeholder="Enter Your Message" required=""></textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Your Message">
                            </div>
                            <div class="col-md-12 my-2">
                                <div class="form-messege text-success text-center"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-lg-6">
                        <div class="padding-top padding-bottom contact-info">
                            <div class="info-area">
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <img src="assets/img/contact/phone.png" alt="contact">
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">phone</h6>
                                        <a href="Tel:123 456 65478">+84 123 456 7890</a>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <img src="assets/img/contact/email.png" alt="contact">
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">Email</h6>
                                        <a href="Mailto:example@domain.com">example@domain.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-counter padding-top padding-bottom">
        <div class="container">
            {{-- <div class="row justify-content-center mb-30-none">
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item">
                                <h5 class="title odometer odometer-auto-theme" data-odometer-final="150">
                                    <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                                </h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Followers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item">
                                <h5 class="title odometer odometer-auto-theme" data-odometer-final="60">
                                    <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                                </h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Followers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="far fa-users"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item">
                                <h5 class="title odometer odometer-auto-theme" data-odometer-final="45">
                                    <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div>
                                </h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item">
                                <h5 class="title odometer odometer-auto-theme" data-odometer-final="350">
                                    <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                                </h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Subscribers</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
</session>
@endsection
