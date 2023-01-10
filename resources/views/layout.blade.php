<html lang="en" class=" sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cinema</title>

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

    <div class="preloader" style="display: none;">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fal fa-long-arrow-alt-up"></i>
    </a>


    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li class="menu-item">
                        <a href="{{route('home')}}" class="active">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">movies</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('movie.list')}}"><i class="fal fa-long-arrow-alt-right"></i>Movie List</a>
                            </li>
                            <li>
                                <a href="{{route('movie.detail')}}"><i class="fal fa-long-arrow-alt-right"></i>Movie Details</a>
                            </li>
                            <li>
                                <a href="{{route('movie.checkout')}}"><i class="fal fa-long-arrow-alt-right"></i>Movie Checkout</a>
                            </li>
                            <li>
                                <a href="{{route('ticket.plan')}}"><i class="fal fa-long-arrow-alt-right"></i>Movie Ticket Plan</a>
                            </li>
                            <li>
                                <a href="{{route('seat.plan')}}"><i class="fal fa-long-arrow-alt-right"></i>Movie Seat Plan</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="menu-item-has-children">
                        <a href="#">events</a>
                        <ul class="submenu">
                            <li>
                                <a href="events.html"><i class="fal fa-long-arrow-alt-right"></i>Events</a>
                            </li>
                            <li>
                                <a href="event-details.html"><i class="fal fa-long-arrow-alt-right"></i>Event Details</a>
                            </li>
                            <li>
                                <a href="event-speaker.html"><i class="fal fa-long-arrow-alt-right"></i>Event Speaker</a>
                            </li>
                            <li>
                                <a href="event-ticket.html"><i class="fal fa-long-arrow-alt-right"></i>Event Ticket</a>
                            </li>
                            <li>
                                <a href="event-checkout.html"><i class="fal fa-long-arrow-alt-right"></i>Event Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">sports</a>
                        <ul class="submenu">
                            <li>
                                <a href="sports.html"><i class="fal fa-long-arrow-alt-right"></i>Sports</a>
                            </li>
                            <li>
                                <a href="sport-details.html"><i class="fal fa-long-arrow-alt-right"></i>Sport Details</a>
                            </li>
                            <li>
                                <a href="sports-ticket.html"><i class="fal fa-long-arrow-alt-right"></i>Sport Ticket</a>
                            </li>
                            <li>
                                <a href="sports-checkout.html"><i class="fal fa-long-arrow-alt-right"></i>Sport Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">pages</a>
                        <ul class="submenu">
                            <li>
                                <a href="about.html"><i class="fal fa-long-arrow-alt-right"></i>About Us</a>
                            </li>
                            <li>
                                <a href="apps-download.html"><i class="fal fa-long-arrow-alt-right"></i>Apps Download</a>
                            </li>
                            <li>
                                <a href="team.html"><i class="fal fa-long-arrow-alt-right"></i>Team</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fal fa-long-arrow-alt-right"></i>Pricing</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="fal fa-long-arrow-alt-right"></i>Login</a>
                            </li>
                            <li>
                                <a href="register.html"><i class="fal fa-long-arrow-alt-right"></i>Register</a>
                            </li>
                            <li>
                                <a href="forgot-password.html"><i class="fal fa-long-arrow-alt-right"></i>Forgot Password</a>
                            </li>
                            <li>
                                <a href="faq.html"><i class="fal fa-long-arrow-alt-right"></i>Faq</a>
                            </li>
                            <li>
                                <a href="term-condition.html"><i class="fal fa-long-arrow-alt-right"></i>Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html"><i class="fal fa-long-arrow-alt-right"></i>Privacy Policy</a>
                            </li>
                            <li>
                                <a href="404.html"><i class="fal fa-long-arrow-alt-right"></i>404</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">blog</a>
                        <ul class="submenu">
                            <li>
                                <a href="blog.html"><i class="fal fa-long-arrow-alt-right"></i>Blog</a>
                            </li>
                            <li>
                                <a href="blog-2.html"><i class="fal fa-long-arrow-alt-right"></i>Blog 02</a>
                            </li>
                            <li>
                                <a href="blog-details.html"><i class="fal fa-long-arrow-alt-right"></i>Blog Single</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="{{route('contact')}}">contact</a>
                    </li>
                    <li class="header-button pr-0">
                        <a href="{{route('login')}}">Login</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

@yield('content')

    <footer class="footer-section">

        <div class="newsletter-section">
            <div class="container">
                <div class="newsletter-container">
                    <div class="newsletter-wrapper">
                        <h5 class="cate">subscribe now</h5>
                        <h3 class="title">to get latest update</h3>
                        <form class="newsletter-form">
                            <input type="text" placeholder="Your Email Address">
                            <button type="submit">subscribe</button>
                        </form>
                        <p>We send you latest update and news to your email</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-section-box">
            <div class="container">
                <div class="footer-top">
                    <div class="logo">
                        <a href="index-1.html">
                            <img src="assets/img/logo/logo.png" alt="footer">
                        </a>
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3">
                            <h5 class="footer-middle-title">Company</h5>
                            <p class="pb-4 footer-text">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                            </p>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="footer-middle-title">Important Link</h5>
                            <div class="footer-middle-link">
                                <a href="#">About Us</a>
                                <a href="#">Contact</a>
                                <a href="#">Faq</a>
                                <a href="#">Terms &amp; Conditions</a>
                                <a href="#">Privacy Policy</a>
                                <a href="#">Help</a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="footer-middle-title">Quick Browse</h5>
                            <div class="footer-middle-link">
                                <a href="#">Support</a>
                                <a href="#">Blog</a>
                                <a href="#">Movies</a>
                                <a href="#">Events</a>
                                <a href="#">Sports</a>
                                <a href="#">Feedback</a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="footer-middle-title">Download</h5>
                            <p class="footer-text">There are many variations of passages of Lorem Ipsum</p>
                            <div class="footer-middle-download">
                                <a href="#"><img src="assets/img/app/app_store.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/app/google_play.jpg" alt=""></a>
                                <a href=""> <img src="assets/img/app/windows.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left">
                        <p>Copyright © 2021.All Rights Reserved By <a href="#">Ticket</a>.</p>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Terms Of Use</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/heandline.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>