@extends('layout')

@section('content')
<session class="content">
    <section class="details-banner hero-area seat-plan-banner" style="background:url('assets/img/banner/banner-movie-details.jpg')">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">{{$movieScreenTime->movie->name}}</h3>
                    <div class="tags">                     
                        <a href="#">{{$movieScreenTime->screen->type}}</a>
                        @foreach($movieScreenTime->movie->genres as $genre)
                            <a href="#">{{$genre->name}}</a>
                        @endforeach
                    </div>
                </div>
                <input type="hidden" id="screen-price" value="{{$movieScreenTime->screen->price}}">
            </div>
        </div>
    </section>
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="far fa-reply"></i> Change Option
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date">{{date('l d, M Y',strtotime($movieScreenTime->date))}}</span>    
                </div>
                <div class="item">
                    <small> TIME START </small>
                    <span class="h3 font-weight-bold"> {{$movieScreenTime->time->time}} </span>
                </div>
                <div class="item">
                    <small> TIME LEFT </small>
                    <span class="h3 font-weight-bold"> {{date('H:i',strtotime(strtotime($movieScreenTime->time->time),strtotime($movieScreenTime->movie->duration)))}} </span>
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
                        @foreach($output as $rowname => $row)
                        <li class="seat-line">
                            <span>{{$rowname}}</span>
                           
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                         @foreach($row as $number => $checkseat)
                                        <li class="single-seat seat-free">
                                            @if($checkseat)
                                            <img src="assets/img/movie/seat-1-free.png" alt="seat">
                                            <span class="sit-num" data-value ="{{$rowname}}{{$number}}">{{$rowname}}{{$number}}</span>
                                            @else
                                            <img src="assets/img/movie/seat-1.png" alt="seat">
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                            <span>{{$rowname}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- <h5 class="subtitle">double seat plan</h5>
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
                </div> -->
            </div>
            <div class="proceed-book">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span>Your Selected Seat</span>
                        <h3 class="title" id="booked"></h3>
                    </div>
                    <div class="book-item">
                        <span>total price (VND)</span>
                        <h3 class="title" id="total-price">0</h3>
                    </div>
                    <div class="book-item">
                        <form action="{{route('movie.checkout')}}" method="GET">
                            <input type="hidden" name="id" value="{{$movieScreenTime->id}}">
                            <input type="hidden" name="bookList" value="" id="inputBookList">
                            <button type='submit' class="custom-button">checkout now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</session>
@endsection