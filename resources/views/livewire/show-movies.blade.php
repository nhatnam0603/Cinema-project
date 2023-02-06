{{-- Care about people's approval and you will be their prisoner. --}}
<div class="tab-area">
    <div class="tab-item active">
        <div class="movie-area mb-10">
            @foreach($movielist as $movie)
            <div class="movie-list">
                <div class="movie-thumb c-thumb">
                    <a href="{{route('movie.detail',['id'=>$movie->id])}}" class="w-100 h-100">
                        <img src="{{ asset('assets/img/movie/'.$movie->image)}}" alt="movie">
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
            @endforeach
        </div>
    </div>
</div>

