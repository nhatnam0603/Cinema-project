@extends('layout')

@section('content')
<session class="content">
    <section class="details-banner hero-area seat-plan-banner" style="background:url('assets/img/banner/banner-movie-details.jpg')">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">Irregular</h3>
                    <div class="tags">
                        <a href="#">MOVIE</a>
                        <a href="#">2D</a>
                        <a href="#">3D</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="far fa-reply"></i> Change Plan
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date">FRI 14, 2021</span>
                    <select class="select-bar" style="display: none;">
                        <option value="sc1">07:40</option>
                        <option value="sc2">09:40</option>
                        <option value="sc3">11:40</option>
                        <option value="sc4">13:40</option>
                        <option value="sc5">15:50</option>
                        <option value="sc6">19:50</option>
                    </select>
                    <div class="nice-select select-bar" tabindex="0"><span class="current">07:40</span>
                        <ul class="list">
                            <li data-value="sc1" class="option selected">07:40</li>
                            <li data-value="sc2" class="option">09:40</li>
                            <li data-value="sc3" class="option">11:40</li>
                            <li data-value="sc4" class="option">13:40</li>
                            <li data-value="sc5" class="option">15:50</li>
                            <li data-value="sc6" class="option">19:50</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <small> TIME LEFT </small>
                    <span class="h3 font-weight-bold"> 09:00 </span>
                </div>
            </div>
        </div>
    </section>
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">theater</h4>
                <div class="screen-thumb">
                    <img src="assets/img/movie/theater.png" alt="movie">
                </div>
                <h5 class="subtitle">single seat plan</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <span>H</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">h5</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-booked.png" alt="seat">
                                            <span class="sit-num">h6</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">h7</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-booked.png" alt="seat">
                                            <span class="sit-num">h8</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">h9</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">h10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>H</span>
                        </li>
                        <li class="seat-line">
                            <span>G</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">g1</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">g2</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">g3</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">g4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>G</span>
                        </li>
                        <li class="seat-line">
                            <span>f</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">f7</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">f8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">f9</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">f10</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num">f11</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>f</span>
                        </li>
                    </ul>
                </div>
                <h5 class="subtitle">double seat plan</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area couple">
                        <li class="seat-line">
                            <span>e</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">e1 e2</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">e3 e4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>e</span>
                        </li>
                        <li class="seat-line">
                            <span>d</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-booked.png" alt="seat">
                                            <span class="sit-num booked-bg">D7 D8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>d</span>
                        </li>
                        <li class="seat-line">
                            <span>c</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">c11 c12</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>c</span>
                        </li>
                        <li class="seat-line">
                            <span>b</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">b1 b2</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">b3 b4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">b7 b8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="assets/img/movie/seat-2.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>b</span>
                        </li>
                        <li class="seat-line">
                            <span>a</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-booked.png" alt="seat">
                                            <span class="sit-num booked-bg">a1 a2</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">a3 a4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">a5 a6</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">a7 a8</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">a9 a10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-booked.png" alt="seat">
                                            <span class="sit-num booked-bg">a11</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="assets/img/movie/seat-2-free.png" alt="seat">
                                            <span class="sit-num">a12</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>a</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="proceed-book">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span>Your Selected Seat</span>
                        <h3 class="title">a1, a2</h3>
                    </div>
                    <div class="book-item">
                        <span>total price</span>
                        <h3 class="title">$200</h3>
                    </div>
                    <div class="book-item">
                        <a href="movie-checkout.html" class="custom-button">checkout now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</session>
@endsection