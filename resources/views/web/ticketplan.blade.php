@extends('layout')

@section('content')
<session class="content">
    <section class="window-warning inActive">
        <div class="lay"></div>
        <div class="warning-item">
            <h6 class="subtitle">Show Time : </h6>
            <h4 class="title">Book Your Seats</h4>
            <div class="thumb">
                <img src="assets/img/movie/tt.png" alt="movie">
            </div>
            <a href="" class="custom-button seatPlanButton">Show Seat Plans<i class="fal fa-long-arrow-alt-right"></i></a>
        </div>
    </section>
    <section class="details-banner hero-area" style="background:url({{ asset('assets/img/movie/'.$movie->image) }})">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title">{{$movie->name}}</h3>
                    <div class="tags">
                        @foreach($movie->types as $type)
                            <a href="#">{{$type->name}}</a>
                        @endforeach
                        @foreach($movie->genres as $genre)
                            <a href="#">{{$genre->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="search-ticket-section padding-top pt-lg-0" style="margin-top:-50px">
        <div class="container">
            <div class="search-tab">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">search screens </h6>
                            <h3 class="title">find your screens now</h3>
                        </div>
                    </div>

                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <form class="ticket-search-form" method="get" action="{{route('ticket.plan')}}">
                            <input type="hidden" value="{{$movie->id}}" name="id">
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
                                    <button type="submit" class="filter-btn"><i class="far fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <ul class="seat-plan-wrapper">
                        @if(isset($screensTimeList))
                        @foreach($screensTimeList as $screenTime)
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#" class="name">{{$screenTime->screenName}}</a>
                            </div>
                            <div class="location-icon">
                                <i class="fas fa-map-marker-alt"></i> {{$screenTime->screenType}}
                            </div>
                            <div class="movie-schedule">
                                @foreach($screenTime->time as $time)
                                <div class="item" data-value="{{$time->id}}">
                                    {{$time->time}}
                                </div>
                                @endforeach
                            </div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</session>
@endsection
