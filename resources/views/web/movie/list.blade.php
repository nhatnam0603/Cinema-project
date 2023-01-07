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
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-3">
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">Country</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang1"><label for="lang1">Australia</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang2"><label for="lang2">France</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang3"><label for="lang3">Russia</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang4"><label for="lang4">Thailand</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang5"><label for="lang5">Germany</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang6"><label for="lang6">Italy</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang7"><label for="lang7">USA</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang8"><label for="lang8">UK</label>
                                </div>
                            </div>
                            <div class="add-check-area">
                                <a href="#">view more</a> <i class="fal fa-chevron-circle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">experience</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode1"><label for="mode1">2d</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode2"><label for="mode2">3d</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">genre</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre1"><label for="genre1">action</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre2"><label for="genre2">horror</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre3"><label for="genre3">animation</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre4"><label for="genre4">sci-fi</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre5"><label for="genre5">thriller</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre6"><label for="genre6">comedy</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre7"><label for="genre7">romantic</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre8"><label for="genre8">drama</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre9"><label for="genre9">romance</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre10"><label for="genre10">adventure</label>
                                </div>
                            </div>
                            <div class="add-check-area">
                                <a href="#">view more</a> <i class="fal fa-chevron-circle-down"></i>
                            </div>
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
                                    <div class="item">
                                        <span class="show">Show :</span>
                                        <select class="select-bar" style="display: none;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                            <option value="60">60</option>
                                            <option value="100">100</option>
                                        </select>
                                        <div class="nice-select select-bar" tabindex="0"><span class="current">10</span>
                                            <ul class="list">
                                                <li data-value="10" class="option selected">10</li>
                                                <li data-value="20" class="option">20</li>
                                                <li data-value="30" class="option">30</li>
                                                <li data-value="40" class="option">40</li>
                                                <li data-value="50" class="option">50</li>
                                                <li data-value="60" class="option">60</li>
                                                <li data-value="100" class="option">100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="show">Sort By :</span>
                                        <select class="select-bar" style="display: none;">
                                            <option value="latest">latest showing</option>
                                            <option value="exclusive">exclusive</option>
                                            <option value="upcoming">upcoming</option>
                                            <option value="trending">trending</option>
                                            <option value="popular">popular</option>
                                        </select>
                                        <div class="nice-select select-bar" tabindex="0"><span class="current">latest showing</span>
                                            <ul class="list">
                                                <li data-value="latest" class="option selected">latest showing</li>
                                                <li data-value="exclusive" class="option">exclusive</li>
                                                <li data-value="upcoming" class="option">upcoming</li>
                                                <li data-value="trending" class="option">trending</li>
                                                <li data-value="popular" class="option">popular</li>
                                            </ul>
                                        </div>
                                    </div>
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
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="#">
                                                    <img src="assets/img/movie/movie-1.jpg" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="#">The Walking Dead</a>
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
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="#">
                                                    <img src="assets/img/movie/movie-2.jpg" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="#">Godzilla Vs King Kong</a>
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
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="#">
                                                    <img src="assets/img/movie/movie-3.jpg" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="#">Mythic Quest Ravens</a>
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
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="#">
                                                    <img src="assets/img/movie/movie-4.jpg" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="#">Wanda Vision</a>
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
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="#">
                                                    <img src="assets/img/movie/movie-5.jpg" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="#">Irregular</a>
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
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="#">
                                                    <img src="assets/img/movie/movie-6.jpg" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="#">Raya and Last Dragon</a>
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
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="#">
                                                    <img src="assets/img/movie/movie-3.jpg" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="#">Mythic Quest Ravens</a>
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
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="#">
                                                    <img src="assets/img/movie/movie-4.jpg" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content">
                                                <h5 class="title m-0">
                                                    <a href="#">Wanda Vision</a>
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
                            <div class="tab-item active">
                                <div class="movie-area mb-10">
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="movie-details.html" class="w-100 h-100">
                                                <img src="assets/img/movie/movie-list-1.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="movie-details.html">The Walking Dead</a>
                                            </h5>
                                            <p class="duration">2h 20 min</p>
                                            <div class="movie-tags">
                                                <a href="#">action</a>
                                                <a href="#">adventure</a>
                                                <a href="#">drama</a>
                                            </div>
                                            <div class="release">
                                                <span>Release Date : </span> <a href="#"> April 13, 2021</a>
                                            </div>
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
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#">
                                                            <div class="thumb">
                                                                <i class="fal fa-heart"></i>
                                                            </div>
                                                            <span>10k</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item mr-auto">
                                                        <a href="#">
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
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="movie-details.html" class="w-100 h-100">
                                                <img src="assets/img/movie/movie-list-2.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="movie-details.html">The Walking Dead</a>
                                            </h5>
                                            <p class="duration">2h 20 min</p>
                                            <div class="movie-tags">
                                                <a href="#">action</a>
                                                <a href="#">adventure</a>
                                                <a href="#">drama</a>
                                            </div>
                                            <div class="release">
                                                <span>Release Date : </span> <a href="#"> April 13, 2021</a>
                                            </div>
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
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#">
                                                            <div class="thumb">
                                                                <i class="fal fa-heart"></i>
                                                            </div>
                                                            <span>10k</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item mr-auto">
                                                        <a href="#">
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
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="movie-details.html" class="w-100 h-100">
                                                <img src="assets/img/movie/movie-list-3.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="movie-details.html">The Walking Dead</a>
                                            </h5>
                                            <p class="duration">2h 20 min</p>
                                            <div class="movie-tags">
                                                <a href="#">action</a>
                                                <a href="#">adventure</a>
                                                <a href="#">drama</a>
                                            </div>
                                            <div class="release">
                                                <span>Release Date : </span> <a href="#"> April 13, 2021</a>
                                            </div>
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
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#">
                                                            <div class="thumb">
                                                                <i class="fal fa-heart"></i>
                                                            </div>
                                                            <span>10k</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item mr-auto">
                                                        <a href="#">
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
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="movie-details.html" class="w-100 h-100">
                                                <img src="assets/img/movie/movie-list-4.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="movie-details.html">The Walking Dead</a>
                                            </h5>
                                            <p class="duration">2h 20 min</p>
                                            <div class="movie-tags">
                                                <a href="#">action</a>
                                                <a href="#">adventure</a>
                                                <a href="#">drama</a>
                                            </div>
                                            <div class="release">
                                                <span>Release Date : </span> <a href="#"> April 13, 2021</a>
                                            </div>
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
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#">
                                                            <div class="thumb">
                                                                <i class="fal fa-heart"></i>
                                                            </div>
                                                            <span>10k</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item mr-auto">
                                                        <a href="#">
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
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="movie-details.html" class="w-100 h-100">
                                                <img src="assets/img/movie/movie-list-5.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="movie-details.html">The Walking Dead</a>
                                            </h5>
                                            <p class="duration">2h 20 min</p>
                                            <div class="movie-tags">
                                                <a href="#">action</a>
                                                <a href="#">adventure</a>
                                                <a href="#">drama</a>
                                            </div>
                                            <div class="release">
                                                <span>Release Date : </span> <a href="#"> April 13, 2021</a>
                                            </div>
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
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#">
                                                            <div class="thumb">
                                                                <i class="fal fa-heart"></i>
                                                            </div>
                                                            <span>10k</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item mr-auto">
                                                        <a href="#">
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
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area text-center">
                            <a href="#"><i class="fal fa-long-arrow-alt-left"></i><span>Prev</span></a>
                            <a href="#">1</a>
                            <a href="#" class="active">2</a>
                            <a href="#">3</a>
                            <a href="#"><span>Next</span><i class="fal fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</session>
@endsection