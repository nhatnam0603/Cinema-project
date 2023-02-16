@extends('layout')

@section('content')
<session class="content">
    <section class="details-banner" style="background:url('{{ ($movie->banner === NULl)?asset('assets/img/movie/'.$movie->image):asset('assets/img/banner/'.$movie->banner) }}') no-repeat fixed center">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="{{ asset('assets/img/movie/'.$movie->image) }}" alt="movie" style="height: 350px">
                    <a href="{{$movie->video}}" class="video-button video-popup">
                        <i class="fal fa-play"></i>
                    </a>
                </div>
                <div class="details-banner-content offset-lg-4">
                    <h3 class="title">{{$movie->name}}</h3>
                    <div class="tags">
                        @foreach($movie->types as $type)
                        <a href="#">{{$type->name}}</a>
                        @endforeach
                    </div>
                    @foreach($movie->genres as $genre)
                    <a href="#" class="button">{{$genre->name}}</a>
                    @endforeach
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fal fa-calendar-alt"></i><span>{{date('d-m-Y',strtotime($movie->began_at))}}</span>
                            </div>
                            <div class="item">
                                <i class="fal fa-clock"></i><span> {{ date('H',strtotime($movie->duration)) }}h {{date('i',strtotime($movie->duration))}}min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book-section">
        <div class="container">
            <div class="book-wrapper offset-lg-4">
                <div class="left-side">
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <i class="fal fa-shopping-cart" ></i>
                            </div>
                            <div class="counter-area">
                                <!-- <span class="counter-item odometer odometer-auto-theme" data-odometer-final="92">
                                    <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span></div>
                                </span> -->
                                <span>{{$moviebookings}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <i class="fal fa-heart"></i>
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer odometer-auto-theme" data-odometer-final="80">
                                    <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                                </span>
                                <span>k+</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="item">
                        <div class="item-header">
                            <h5 class="title">5.0</h5>
                            <div class="rated">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="rated rate-it">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title">0.0</h5>
                        </div>
                    </div> -->
                </div>
                <a href="{{route('ticket.plan',['id'=>$movie->id])}}" class="custom-button">book tickets</a>
            </div>
        </div>
    </section>
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <h3 class="title">photos</h3>
                        <div class="details-photos owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-855px, 0px, 0px); transition: all 1s ease 0s; width: 1710px;">
                                    @if(!empty($movie->image_list))
                                    @foreach(json_decode($movie->image_list) as $imagelist)
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="thumb">
                                            <a href="{{$imagelist}}" class="img-pop">
                                                <img src="{{$imagelist}}" alt="movie">
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="thumb">
                                            <a href="assets/img/movie/movie-list-default.jpg" class="img-pop">
                                                <img src="assets/img/movie/movie-list-default.jpg" alt="movie">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="thumb">
                                            <a href="assets/img/movie/movie-list-default.jpg" class="img-pop">
                                                <img src="assets/img/movie/movie-list-default.jpg" alt="movie">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="thumb">
                                            <a href="assets/img/movie/movie-list-default.jpg" class="img-pop">
                                                <img src="assets/img/movie/movie-list-default.jpg" alt="movie">
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    description
                                </li>
                                <!-- <li>
                                    review <span>10</span>
                                </li> -->
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item active">
                                    <div class="item">
                                        <!-- <h5 class="sub-title">There are many variations of passages</h5> -->
                                        <p>{{$movie->description}}</p>
                                        <div class="widget-tags mt-5">
                                            <p>Tags : </p>
                                            <ul>
                                                @foreach($movie->types as $type)
                                                <li>
                                                    <a href="#">{{$type->name}}</a>
                                                </li>
                                                @endforeach
                                                @foreach($movie->genres as $genre)
                                                <li>
                                                    <a href="#">{{$genre->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">movie cast</h5>
                                            <div class="navigation">
                                                <div class="cast-prev"><i class="flaticon-double-right-arrows-angles"></i></div>
                                                <div class="cast-next"><i class="flaticon-double-right-arrows-angles"></i></div>
                                            </div>
                                        </div>
                                        <div class="casting-slider owl-carousel owl-loaded owl-drag">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(-1468px, 0px, 0px); transition: all 0.25s ease 0s; width: 2517px;">
                                                    @foreach($movie->casts as $cast)
                                                    <div class="owl-item" style="width: 195.75px; margin-right: 14px;">
                                                        <div class="cast-item">
                                                            <div class="cast-thumb">
                                                                <a href="#">
                                                                    <img src="{{asset('assets/img/cast/'.$cast->image)}}" alt="cast" style="height: 100px">
                                                                </a>
                                                            </div>
                                                            <div class="cast-content">
                                                                <h6 class="cast-title"><a href="#">{{$cast->name}}</a></h6>
                                                                <span class="cate">{{$cast->position}}</span>
                                                                <!-- <p>As Position Name</p> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled">
                                                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                                                </button>
                                                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="tab-item">
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/img/cast/cast-2.jpg" alt="cast">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="movie-review-info">
                                                <h6 class="subtitle">
                                                    <a href="#">Thomas E Criswell</a>
                                                </h6>
                                                <span class="reply-date"><i class="fal fa-clock"></i> 1 hour ago </span>
                                                <div class="review">
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                </div>
                                            </div>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                            <div class="review-meta">
                                                <a href="#">
                                                    <i class="fal fa-thumbs-up"></i><span>10</span>
                                                </a>
                                                <a href="#" class="dislike">
                                                    <i class="fal fa-thumbs-down"></i><span>02</span>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-flag"></i> <span>Report Review</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/img/cast/cast-1.jpg" alt="cast">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="movie-review-info">
                                                <h6 class="subtitle">
                                                    <a href="#">Thomas E Criswell</a>
                                                </h6>
                                                <span class="reply-date"><i class="fal fa-clock"></i> 1 hour ago </span>
                                                <div class="review">
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                </div>
                                            </div>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                            <div class="review-meta">
                                                <a href="#">
                                                    <i class="fal fa-thumbs-up"></i><span>10</span>
                                                </a>
                                                <a href="#" class="dislike">
                                                    <i class="fal fa-thumbs-down"></i><span>02</span>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-flag"></i> <span>Report Review</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/img/cast/cast-2.jpg" alt="cast">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="movie-review-info">
                                                <h6 class="subtitle">
                                                    <a href="#">Thomas E Criswell</a>
                                                </h6>
                                                <span class="reply-date"><i class="fal fa-clock"></i> 1 hour ago </span>
                                                <div class="review">
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                </div>
                                            </div>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                            <div class="review-meta">
                                                <a href="#">
                                                    <i class="fal fa-thumbs-up"></i><span>10</span>
                                                </a>
                                                <a href="#" class="dislike">
                                                    <i class="fal fa-thumbs-down"></i><span>02</span>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-flag"></i> <span>Report Review</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/img/cast/cast-3.jpg" alt="cast">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="movie-review-info">
                                                <h6 class="subtitle">
                                                    <a href="#">Thomas E Criswell</a>
                                                </h6>
                                                <span class="reply-date"><i class="fal fa-clock"></i> 1 hour ago </span>
                                                <div class="review">
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                </div>
                                            </div>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                            <div class="review-meta">
                                                <a href="#">
                                                    <i class="fal fa-thumbs-up"></i><span>10</span>
                                                </a>
                                                <a href="#" class="dislike">
                                                    <i class="fal fa-thumbs-down"></i><span>02</span>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-flag"></i> <span>Report Review</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="load-more text-center">
                                        <a href="#" class="custom-button transparent">load more</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                    <div class="widget-1 widget-offer">
                        <h3 class="title">TODAY OFFER</h3>
                        <div class="offer-body">
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="assets/img/sidebar/offer-1.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#">Brand Card Cashback Offer</a>
                                    </h6>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="assets/img/sidebar/offer-2.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#">Online Payment Offer</a>
                                    </h6>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="assets/img/sidebar/offer-3.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#">Bank Payment Cashback</a>
                                    </h6>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#">
                                <img src="assets/img/sidebar/banner/banner-1.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</session>
@endsection
