@extends('layout')

@section('content')
<session class="content">
    <section class="banner-section">
        <div class="banner-bg bg-fixed" style="background:url('assets/img/banner/banner-movie.jpg')"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title bold">buy <span class="color-theme">movie</span> tickets</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
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
                        <form class="ticket-search-form" method="get" action="{{route('movie.list')}}">
                            <div class="form-group large">
                                <input type="text" name="search" placeholder="Search for Movies">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/img/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">Genre</span>
                                <select class="select-bar" name="genreid">
                                    <option value="">Choose genre</option>
                                    @foreach($genres as $genre)
                                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/img/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">Date</span>
                                <select class="select-bar"  name="date">
                                    <option value="">Choose Date</option>
                                @for ($i = 0; $i < 7; $i++)
                                    <option value="{{date('d/m/Y',strtotime('+ '.$i.' day'))}}">{{date('d/m/Y',strtotime('+ '.$i.' day'))}}</option>
                                @endfor

                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/img/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">Type</span>
                                <select class="select-bar" name="type">
                                <option value="">Choose Type</option>
                                    @foreach( $screenTypes as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
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
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-3">
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">Type</h6>
                            <div class="check-area">
                                @foreach($screenTypes as $k => $type)
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode{{$k}}"><label for="mode{{$k}}">{{$type->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">genre</h6>
                            <div class="check-area">
                                @foreach($genres as $key => $genre)
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre{{$key}}"><label for="genre{{$key}}">{{$genre->name}}</label>
                                </div>
                                @endforeach
                            </div>
                            {{-- <div class="add-check-area">
                                <a href="#">view more</a> <i class="fal fa-chevron-circle-down"></i>
                            </div> --}}
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#">
                                <img src="assets/img/sidebar/banner/banner-2.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50 mb-lg-0">
                    <div class="filter-tab tab">
                        <div class="filter-area">
                            <div class="filter-main">
                                <div class="left">
                                    {{-- <div class="item">
                                        <span class="show">Show :</span>
                                        <select class="select-bar">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                            <option value="60">60</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div class="item">
                                        <span class="show">Sort By :</span>
                                        <select class="select-bar">
                                            <option value="latest">latest showing</option>
                                            <option value="exclusive">exclusive</option>
                                            <option value="upcoming">upcoming</option>
                                            <option value="trending">trending</option>
                                            <option value="popular">popular</option>
                                        </select>
                                    </div> --}}
                                </div>
                                <ul class="grid-button tab-menu">
                                    <li>
                                        <i class="fal fa-th-large"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fal fa-th-list"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item">
                                <div class="row mb-10 justify-content-center">
                                    @foreach($movielist as $movie)
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="{{route('movie.detail',['id'=>$movie->id])}}">
                                                    {{-- <img src="{{json_decode($movie->image_list)[0] ?? 'assets/img/movie/movie-list-default.jpg'}}" alt="movie"> --}}
                                                    <img src="{{ asset('assets/img/movie/'.$movie->image) }}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="{{route('movie.detail',['id'=>$movie->id])}}">{{$movie->name}}</a>
                                                </h5>
                                                {{-- <ul class="movie-rating-percent">
                                                    <li>
                                                        <i class="fal fa-shopping-cart"></i>
                                                        <span class="content">88.8k</span>
                                                    </li>
                                                    <li>
                                                        <i class="fal fa-star"></i>
                                                        <span class="content">5.0</span>
                                                    </li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-item active">
                                <div class="movie-area mb-10">
                                    @foreach($movielist as $movie)
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="{{route('movie.detail',['id'=>$movie->id])}}" class="w-100 h-100">
                                                <img src="{{ asset('assets/img/movie/'.$movie->image) }}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="{{route('movie.detail',['id'=>$movie->id])}}">{{$movie->name}}</a>
                                            </h5>
                                            <p class="duration"> {{ date('H',strtotime($movie->duration)) }}h {{date('i',strtotime($movie->duration))}}min</p>
                                            <div class="tags">
                                                @foreach($movie->types as $movieType)
                                                <a href="#">{{$movieType->name}}</a>
                                                @endforeach
                                            </div>
                                            <div class="movie-tags">
                                                @foreach($movie->genres as $movieGenre)
                                                <a href="#">{{$movieGenre->name}}</a>
                                                @endforeach
                                            </div>
                                            <div class="release">
                                                <span>Release Date : </span> <a href="#"> {{ date( 'd/m/Y',strtotime($movie->began_at)) }} </a>
                                            </div>
                                            <!-- <ul class="movie-rating-percent">
                                                <li>
                                                    <i class="fal fa-shopping-cart"></i>
                                                    <span class="content">88.8k</span>
                                                </li>
                                                <li>
                                                    <i class="fal fa-star"></i>
                                                    <span class="content">5.0</span>
                                                </li>
                                            </ul> -->
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <!-- <div class="react-item">
                                                        <a href="#">
                                                            <div class="thumb">
                                                                <i class="fal fa-heart"></i>
                                                            </div>
                                                            <span>10k</span>
                                                        </a>
                                                    </div> -->
                                                    <div class="react-item mr-auto">
                                                        <a href="{{route('ticket.plan',['id'=>$movie->id])}}">
                                                            <div class="thumb">
                                                                <i class="fal fa-ticket"></i>
                                                            </div>
                                                            <span>Book Ticket</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                        <a href="https://www.youtube.com/watch?v=uyNh0RPiLyI" class="popup-video video-popup">
                                                            <div class="thumb">
                                                                <i class="fal fa-play-circle"></i>
                                                            </div>
                                                            <span>Watch Trailer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- <div class="pagination-area text-center">
                            <a href="#"><i class="fal fa-long-arrow-alt-left"></i><span>Prev</span></a>
                            <a href="#">1</a>
                            <a href="#" class="active">2</a>
                            <a href="#">3</a>
                            <a href="#"><span>Next</span><i class="fal fa-long-arrow-alt-right"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</session>
@endsection
