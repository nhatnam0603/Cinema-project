@extends('layout')
  
@section('content')
<session class="content">
 <section class="banner-section">
        <div class="banner-bg bg-fixed" style="background:url('assets/img/banner/banner-1.jpg')"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">Tickets Booking</span> for
                    <span class="color-theme cd-words-wrapper p-0 m-0" style="width: 239.156px;">
                        <b class="is-hidden">Movie</b>
                        <b class="is-hidden">Event</b>
                        <b class="is-visible">Sport</b>
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
                    <div class="col-lg-6 mb-20">
                        <ul class="tab-menu ticket-tab-menu">
                            <li class="active">
                                <div class="tab-thumb">
                                    <img src="assets/img/ticket/movie.png" alt="ticket">
                                </div>
                                <span>movie</span>
                            </li>
                            <li>
                                <div class="tab-thumb">
                                    <img src="assets/img/ticket/event.png" alt="ticket">
                                </div>
                                <span>events</span>
                            </li>
                            <li>
                                <div class="tab-thumb">
                                    <img src="assets/img/ticket/sport.png" alt="ticket">
                                </div>
                                <span>sports</span>
                            </li>
                        </ul>
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
                                    <button type="submit" class="filter-btn"><i class="far fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search for Events">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
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
                                    <img src="assets/img/ticket/event-2.png" alt="ticket">
                                </div>
                                <span class="type">event</span>
                                <select class="select-bar" style="display: none;">
                                    <option value="Design">Design</option>
                                    <option value="Development">Development</option>
                                    <option value="Software">Software</option>
                                    <option value="Digital">Digital</option>
                                    <option value="Festival">Festival</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Seo">Seo</option>
                                </select>
                                <div class="nice-select select-bar" tabindex="0"><span class="current">Design</span>
                                    <ul class="list">
                                        <li data-value="Design" class="option selected">Design</li>
                                        <li data-value="Development" class="option">Development</li>
                                        <li data-value="Software" class="option">Software</li>
                                        <li data-value="Digital" class="option">Digital</li>
                                        <li data-value="Festival" class="option">Festival</li>
                                        <li data-value="Marketing" class="option">Marketing</li>
                                        <li data-value="Seo" class="option">Seo</li>
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

                    <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Sports">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
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
                                    <img src="assets/img/ticket/sport-2.png" alt="ticket">
                                </div>
                                <span class="type">sport</span>
                                <select class="select-bar" style="display: none;">
                                    <option value="Cricket">Cricket</option>
                                    <option value="Football">Football</option>
                                    <option value="Basketball">Basketball</option>
                                    <option value="Baseball">Baseball</option>
                                    <option value="Golf">Golf</option>
                                    <option value="Running">Running</option>
                                    <option value="Badminton">Badminton</option>
                                </select>
                                <div class="nice-select select-bar" tabindex="0"><span class="current">Cricket</span>
                                    <ul class="list">
                                        <li data-value="Cricket" class="option selected">Cricket</li>
                                        <li data-value="Football" class="option">Football</li>
                                        <li data-value="Basketball" class="option">Basketball</li>
                                        <li data-value="Baseball" class="option">Baseball</li>
                                        <li data-value="Golf" class="option">Golf</li>
                                        <li data-value="Running" class="option">Running</li>
                                        <li data-value="Badminton" class="option">Badminton</li>
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
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/movie/movie-1.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Avatar Special Edition</a>
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
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/movie/movie-2.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Avengers Endgame</a>
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
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/movie/movie-3.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Terminator 2</a>
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
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/movie/movie-4.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">The Salesman</a>
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
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/movie/movie-5.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">La La Land</a>
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
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/movie/movie-6.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">First Man</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="movie-section bg-two">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-lg-12">
                    <div class="article-section padding-bottom">
                        <div class="section-header-1">
                            <h2 class="title">events</h2>
                            <a class="view-more" href="events.html">View More <i class="fal fa-long-arrow-alt-right"></i> </a>
                        </div>
                        <div class="row mb-30-none justify-content-center">
                            <div class="col-sm-6 col-lg-4">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/event/event-1.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Digital Conference 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/event/event-2.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Learn Conference 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/event/event-3.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Business World 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/event/event-4.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Building New Community</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/event/event-5.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">User Interface 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/event/event-6.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Freedom Music Fest 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="movie-section bg-two">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-lg-12">
                    <div class="article-section padding-bottom">
                        <div class="section-header-1">
                            <h2 class="title">sports</h2>
                            <a class="view-more" href="sports.html">View More <i class="fal fa-long-arrow-alt-right"></i> </a>
                        </div>
                        <div class="row mb-30-none justify-content-center">
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/sports/sport-1.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">World Cricket League 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/sports/sport-2.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Football League 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/sports/sport-3.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Badminton League 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/sports/sport-4.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">International Golf 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/sports/sport-5.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">Baseball League 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/sports/sport-6.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="#">World Basketball 2021</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <div>
                                                <i class="fal fa-map-marker-alt"></i>
                                                <span>290 Private Lane</span>
                                            </div>
                                            <div>
                                                <i class="fal fa-shopping-cart"></i>
                                                <span>10k</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="movie-section padding-bottom bg-two">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-lg-12">
                    <div class="article-section">
                        <div class="section-header-1">
                            <h2 class="title">Blog</h2>
                            <a class="view-more" href="blog.html">View More <i class="fal fa-long-arrow-alt-right"></i> </a>
                        </div>
                        <div class="row mb-30-none justify-content-center">
                            <div class="col-sm-6 col-lg-4">
                                <div class="blog-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/blog/blog-1.jpg" alt="blog">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title">There are many variations of passages</h5>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page
                                        </p>
                                        <a href="">Read More <i class="fal fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="blog-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/blog/blog-2.jpg" alt="blog">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title">Contrary to popular belief distracted</h5>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page
                                        </p>
                                        <a href="">Read More <i class="fal fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="blog-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#">
                                            <img src="assets/img/blog/blog-3.jpg" alt="blog">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">11</h6>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title">Sed ut perspiciatis unde omnis iste</h5>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page
                                        </p>
                                        <a href="">Read More <i class="fal fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</session>
@endsection