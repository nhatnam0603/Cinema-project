@extends('layout')

@section('content')
<session class="content">
<section class="details-banner hero-area" style="background:url('{{ ($movie->banner === NULl)?asset('assets/img/banner/banner-movie-details.jpg'):asset('assets/img/banner/'.$movie->banner) }}')">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title">{{$movieScreenTime->movie->name}}</h3>
                    <div class="tags">
                        <a href="#">{{$movieScreenTime->screen->type}}</a>
                        @foreach($movieScreenTime->movie->genres as $genre)
                            <a href="#">{{$genre->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">

                    <a href="{{url()->previous()}}" class="custom-button back-button">

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

                    <span class="h3 font-weight-bold"> {{date('H:i',strtotime("+".(date('h',strtotime($movieScreenTime->movie->duration))*60+date('i',strtotime($movieScreenTime->movie->duration)))." minutes",strtotime($movieScreenTime->time->time)))}} </span>
                </div>
            </div>
        </div>
    </section>
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-widget checkout-contact hidden" id="messageSuccess">
                        <h5 style="color:aquamarine">Ticket download successfuly </h5>
                    </div>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">Billing Info </h5>
                        <form class="checkout-contact-form">
                            <div class="form-group">
                                <input type="text" placeholder="Full Name" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter email" value="{{ auth()->user()->email }}">
                            </div>
                            <!-- <div class="form-group">
                                <input type="text" placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter address ">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Continue" class="custom-button">
                            </div> -->
                        </form>
                    </div>
                    <!-- <div class="checkout-widget checkout-contact">
                        <h5 class="title">Promo Code </h5>
                        <form class="checkout-contact-form">
                            <div class="form-group">
                                <input type="text" placeholder="Enter promo code">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Apply" class="custom-button">
                            </div>
                        </form>
                    </div> -->
                    <div class="checkout-widget checkout-card mb-0">
                        <h5 class="title">Payment Option </h5>
                        <ul class="payment-option">
                            <li class="active">
                                <a href="#">
                                    <i class="fas fa-money-bill"></i>
                                    <span> Cash</span>
                                </a>
                            </li>
                            <li class="disable">
                                <a href="#">
                                    <i class="fas fa-credit-card-front"></i>
                                    <span> Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-cc-paypal"></i>
                                    <span>paypal</span>
                                </a>
                            </li>
                        </ul>
                        <!-- <h6 class="subtitle">Enter Your Card Details </h6>
                        <form class="payment-card-form">
                            <div class="form-group w-100">
                                <label for="card1">Name on the Card</label>
                                <input type="text" id="card1">
                                <div class="right-icon">
                                    <i class="flaticon-lock"></i>
                                </div>
                            </div>
                            <div class="form-group w-100">
                                <label for="card2"> Card Number</label>
                                <input type="text" id="card2">
                            </div>
                            <div class="form-group">
                                <label for="card3">Expiration</label>
                                <input type="text" id="card3" placeholder="MM/YY">
                            </div>
                            <div class="form-group">
                                <label for="card4">CVV</label>
                                <input type="text" id="card4" placeholder="CVV">
                            </div>
                            <div class="form-group check-group">
                                <input id="card5" type="checkbox" checked="">
                                <label for="card5">
                                    <span class="title">Save Card Info For Future Payment</span>
                                    <span class="info">It is a long established fact that a reader will be distracted by the readable content.</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="custom-button" value="confirm payment">
                            </div>
                        </form>
                        <p class="notice">
                            By clicking this payment button you agree with our <a href="#">terms and conditions</a>.
                        </p> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="{{route('comfirm.payment')}}" method="GET" id="formConfirm">
                        <input type="hidden" name="assign_id" value="{{$movieScreenTime->id}}"/>
                        <input type="hidden" name="movieId" value="{{$movieScreenTime->movie->id}}"/>
                        <input type="hidden" name="movieName" value="{{$movieScreenTime->movie->name}}"/>
                        <input type="hidden" name="image" value="{{$movieScreenTime->movie->image}}"/>
                        <input type="hidden" name="date" value="{{$movieScreenTime->date}}"/>
                        <input type="hidden" name="screenId" value="{{$movieScreenTime->screen->id}}"/>
                        <input type="hidden" name="type" value="{{$movieScreenTime->screen->type}}"/>
                        <input type="hidden" name="screenName" value="{{$movieScreenTime->screen->name}}"/>
                        <input type="hidden" name="timeId" value="{{$movieScreenTime->time->id}}"/>
                        <input type="hidden" name="time" value="{{$movieScreenTime->time->time}}"/>
                        <input type="hidden" name="price" value="{{$movieScreenTime->screen->price}}"/>
                    <div class="booking-summery bg-one side-shape">
                        <h4 class="title">booking summery</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">{{$movieScreenTime->movie->name}}</h6>
                                <span class="info">Movie-{{$movieScreenTime->screen->type}}</span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>{{$movieScreenTime->screen->name}}</span></h6>
                                <div class="info"><span>{{date('d M l',strtotime($movieScreenTime->date))}} , {{$movieScreenTime->time->time}}</span> </div>
                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>Tickets Price(VND)</span><span></span></h6>
                                @foreach($bookListArr as $item)
                                <div class="info"><span>{{$item}}</span> <span>{{$movieScreenTime->screen->price}}</span></div>
                                <input type="hidden" name="ticket[]" value="{{$item}}"/>
                                @endforeach
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="info"><span>price</span><span>{{$bookNumber * $movieScreenTime->screen->price}}</span></span>
                                <span class="info"><span>vat</span><span>{{($bookNumber * $movieScreenTime->screen->price) / 10}}</span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span> Pay Amount</span><span>{{($bookNumber * $movieScreenTime->screen->price) / 10 + ($bookNumber * $movieScreenTime->screen->price)}}</span></h6>
                        <input type="submit" onclick="tmp()" id="submitBtn" class="custom-button" value="confirm payment">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</session>
<script>
function tmp()
{
    $("#submitBtn").addClass('hidden');
    $("#messageSuccess").removeClass('hidden');
    window.location.replace("http://localhost/Cinema-project/public/home");
}
</script>
@endsection
