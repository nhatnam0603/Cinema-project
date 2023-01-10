@extends('layout')
  
@section('content')
<session class="content">
 <section class="banner-section">
        <div class="banner-bg bg-fixed" style="background:url('assets/img/banner/banner-1.jpg')"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">Tickets Booking</span> for
                    <span class="color-theme cd-words-wrapper p-0 m-0" style="width: 239.156px;">
                        <b class="is-visible">Movie</b>
                    </span>
                </h1>
                <p>Buy Your Tickets Online And Enjoy Your Live Entertainment!</p>
            </div>
        </div>
    </section>


    <section class="search-ticket-section padding-top pt-lg-0">
        <div class="container">
            <div class="search-tab">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">search tickets </h6>
                            <h3 class="title">find your tickets now</h3>
                        </div>
                    </div>
                  
                </div>
                <div class="tab-area">

                    <div class="tab-item active">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search for Movies">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/img/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">Genre</span>
                                <select class="select-bar">
                                    <option value="1">Action</option>
                                    <option value="2">Horror</option>
                                    <option value="3">Romance</option>
                                    <option value="4">Animation</option>
                                    <option value="5">Comedy</option>
                                    <option value="6">Drama</option>
                                 
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/img/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">Date</span>
                                <select class="select-bar" >
                                    <option value="11/04/2021">11/04/2021</option>
                                    <option value="10/04/2021">10/04/2021</option>
                                    <option value="09/04/2021">09/04/2021</option>
                                    <option value="08/04/2021">08/04/2021</option>
                                    <option value="07/04/2021">07/04/2021</option>
                                    <option value="06/04/2021">06/04/2021</option>
                                    <option value="05/04/2021">05/04/2021</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/img/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">Type</span>
                                <select class="select-bar">
                                    <option value="2D">2D</option>
                                    <option value="3D">3D</option>
                                    <option value="IMax">IMax</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <button type="submit" class="filter-btn"><i class="far fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="movie-section padding-top bg-two">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-lg-12">
                    <div class="article-section padding-bottom">
                        <div class="section-header-1">
                            <h2 class="title">movies</h2>
                            <a class="view-more" href="movie-grid.html">View More <i class="fal fa-long-arrow-alt-right"></i> </a>
                        </div>
                        <div class="row mb-30-none justify-content-center">
                        @foreach ($movielist as $movie)
                           <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="{{asset($movie->image)}}" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">{{$movie->name}}</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span class="content">88.8k</span>
                                            </li>
                                            <li>
                                                <i class="fal fa-star"></i>
                                                <span class="content">5.0</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</session>
@endsection