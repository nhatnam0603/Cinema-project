@extends('layout')

@section('content')
<session class="content">
    <section class="window-warning inActive">
        <div class="lay"></div>
        <div class="warning-item">
            <h6 class="subtitle">Show Time : 07:40</h6>
            <h4 class="title">Book Your Seats</h4>
            <div class="thumb">
                <img src="assets/img/movie/tt.png" alt="movie">
            </div>
            <a href="movie-seat-plan.html" class="custom-button seatPlanButton">Show Seat Plans<i class="fal fa-long-arrow-alt-right"></i></a>
        </div>
    </section>
    <section class="details-banner hero-area" style="background:url('assets/img/banner/banner-movie-details.jpg')">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title">Irregular</h3>
                    <div class="tags">
                        <a href="#">English</a>
                        <a href="#">France</a>
                        <a href="#">Germany</a>
                        <a href="#">Italy</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book-section bg-one">
        <div class="container">
            <form class="ticket-search-form two">
                <div class="form-group">
                    <div class="thumb">
                        <img src="assets/img/ticket/city.png" alt="ticket">
                    </div>
                    <span class="type">city</span>
                    <select class="select-bar" style="display: none;">
                        <option value="london">New York</option>
                        <option value="dhaka">California</option>
                        <option value="rosario">Texas</option>
                        <option value="madrid">Florida</option>
                        <option value="koltaka">Nevada</option>
                        <option value="rome">Oregon</option>
                        <option value="khoksa">Ohio</option>
                    </select>
                    <div class="nice-select select-bar" tabindex="0"><span class="current">New York</span>
                        <ul class="list">
                            <li data-value="london" class="option selected">New York</li>
                            <li data-value="dhaka" class="option">California</li>
                            <li data-value="rosario" class="option">Texas</li>
                            <li data-value="madrid" class="option">Florida</li>
                            <li data-value="koltaka" class="option">Nevada</li>
                            <li data-value="rome" class="option">Oregon</li>
                            <li data-value="khoksa" class="option">Ohio</li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="assets/img/ticket/date.png" alt="ticket">
                    </div>
                    <span class="type">date</span>
                    <select class="select-bar" style="display: none;">
                        <option value="11/04/2021">11/04/2021</option>
                        <option value="10/04/2021">10/04/2021</option>
                        <option value="09/04/2021">09/04/2021</option>
                        <option value="08/04/2021">08/04/2021</option>
                        <option value="07/04/2021">07/04/2021</option>
                        <option value="06/04/2021">06/04/2021</option>
                        <option value="05/04/2021">05/04/2021</option>
                    </select>
                    <div class="nice-select select-bar" tabindex="0"><span class="current">11/04/2021</span>
                        <ul class="list">
                            <li data-value="11/04/2021" class="option selected">11/04/2021</li>
                            <li data-value="10/04/2021" class="option">10/04/2021</li>
                            <li data-value="09/04/2021" class="option">09/04/2021</li>
                            <li data-value="08/04/2021" class="option">08/04/2021</li>
                            <li data-value="07/04/2021" class="option">07/04/2021</li>
                            <li data-value="06/04/2021" class="option">06/04/2021</li>
                            <li data-value="05/04/2021" class="option">05/04/2021</li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="assets/img/ticket/cinema.png" alt="ticket">
                    </div>
                    <span class="type">movie</span>
                    <select class="select-bar" style="display: none;">
                        <option value="Avatar">Avatar</option>
                        <option value="Inception">Inception</option>
                        <option value="Parasite">Parasite</option>
                        <option value="Joker">Joker</option>
                        <option value="Searching">Searching</option>
                        <option value="Coco">Coco</option>
                        <option value="Lion">Lion</option>
                    </select>
                    <div class="nice-select select-bar" tabindex="0"><span class="current">Avatar</span>
                        <ul class="list">
                            <li data-value="Avatar" class="option selected">Avatar</li>
                            <li data-value="Inception" class="option">Inception</li>
                            <li data-value="Parasite" class="option">Parasite</li>
                            <li data-value="Joker" class="option">Joker</li>
                            <li data-value="Searching" class="option">Searching</li>
                            <li data-value="Coco" class="option">Coco</li>
                            <li data-value="Lion" class="option">Lion</li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="assets/img/ticket/experience.png" alt="ticket">
                    </div>
                    <span class="type">Experience</span>
                    <select class="select-bar" style="display: none;">
                        <option value="2D">2D</option>
                        <option value="3D">3D</option>
                        <option value="4D">4D</option>
                    </select>
                    <div class="nice-select select-bar" tabindex="0"><span class="current">2D</span>
                        <ul class="list">
                            <li data-value="2D" class="option selected">2D</li>
                            <li data-value="3D" class="option">3D</li>
                            <li data-value="4D" class="option">4D</li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <button type="submit" class="filter-btn"><i class="far fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <ul class="seat-plan-wrapper">
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#" class="name">Cine World</a>
                            </div>
                            <div class="location-icon">
                                <i class="fas fa-map-marker-alt"></i> London
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    07:40
                                </div>
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item active">
                                    11:40
                                </div>
                                <div class="item">
                                    13:40
                                </div>
                                <div class="item">
                                    15:50
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#" class="name">Cine Mark</a>
                            </div>
                            <div class="location-icon">
                                <i class="fas fa-map-marker-alt"></i> Germany
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    07:40
                                </div>
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item active">
                                    11:40
                                </div>
                                <div class="item">
                                    13:40
                                </div>
                                <div class="item">
                                    15:50
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                        <li class="active">
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#" class="name">Wanda Cinemas</a>
                            </div>
                            <div class="location-icon">
                                <i class="fas fa-map-marker-alt"></i> France
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    07:40
                                </div>
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item active">
                                    11:40
                                </div>
                                <div class="item">
                                    13:40
                                </div>
                                <div class="item">
                                    15:50
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#" class="name">box park</a>
                            </div>
                            <div class="location-icon">
                                <i class="fas fa-map-marker-alt"></i> New York
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    07:40
                                </div>
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item active">
                                    11:40
                                </div>
                                <div class="item">
                                    13:40
                                </div>
                                <div class="item">
                                    15:50
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#" class="name">Cineplex Entertainment</a>
                            </div>
                            <div class="location-icon">
                                <i class="fas fa-map-marker-alt"></i> Texas
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    07:40
                                </div>
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item active">
                                    11:40
                                </div>
                                <div class="item">
                                    13:40
                                </div>
                                <div class="item">
                                    15:50
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#" class="name">Siverbird</a>
                            </div>
                            <div class="location-icon">
                                <i class="fas fa-map-marker-alt"></i> Nevada
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    07:40
                                </div>
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item active">
                                    11:40
                                </div>
                                <div class="item">
                                    13:40
                                </div>
                                <div class="item">
                                    15:50
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</session>
@endsection