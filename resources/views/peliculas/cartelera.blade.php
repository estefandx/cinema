@extends('layouts.master')

@section('contenido')



    <div class="reviews-section">
        <h3 class="head">Movie Reviews</h3>
        <div class="col-md-9 reviews-grids">



            @foreach($peliculas as $pelicula)
            <div class="review">
                <div class="movie-pic">
                    <a href="single.html"><img src="{{asset('peliculas/'.$pelicula->url_imagen)}}" alt="" /></a>
                </div>
                <div class="review-info">
                    <a class="span" href="single.html">{{$pelicula->nombre}}</a>
                    <p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
                    <p class="ratingview">Critic's Rating:</p>
                    <div class="rating">
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                    </div>
                    <p class="ratingview">
                        &nbsp;3.5/5
                    </p>
                    <div class="clearfix"></div>
                    <p class="ratingview c-rating">Avg Readers' Rating:</p>
                    <div class="rating">
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                    </div>
                    <p class="ratingview">
                        &nbsp; 3.3/5</p>
                    <div class="clearfix"></div>
                    <div class="yrw">
                        <div class="dropdown-button">
                            <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
                                <option value="0">Your rating</option>
                                <option value="1">1.Poor</option>
                                <option value="2">1.5(Below average)</option>
                                <option value="3">2.Average</option>
                                <option value="4">2.5(Above average)</option>
                                <option value="5">3.Watchable</option>
                                <option value="6">3.5(Good)</option>
                                <option value="7">4.5(Very good)</option>
                                <option value="8">5.Outstanding</option>
                            </select>
                        </div>
                        <div class="rtm text-center">
                            <a href="#">REVIEW THIS MOVIE</a>
                        </div>
                        <div class="wt text-center">
                            <a href="#">RESERVAR BOLETAS</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p class="info">SINOPSIS:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$pelicula->sinopsis}}</p>
                    <p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
                    <p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$pelicula->Genero->descripcion}}</p>
                    <p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; {{$pelicula->duracion}}</p>
                </div>
                <div class="clearfix"></div>
            </div>
             @endforeach
            {!! $peliculas->render() !!}
        </div>
        <div class="col-md-3 side-bar">
            <div class="featured">
                <h3>Featured Today in Movie Reviews</h3>
                <ul>
                    <li>
                        <a href="single.html"><img src="images/f1.jpg" alt="" /></a>
                        <p>lorem movie review</p>
                    </li>
                    <li>
                        <a href="single.html"><img src="images/f2.jpg" alt="" /></a>
                        <p>lorem movie review</p>
                    </li>
                    <li>
                        <a href="single.html"><img src="images/f3.jpg" alt="" /></a>
                        <p>lorem movie review</p>
                    </li>
                    <li>
                        <a href="single.html"><img src="images/f4.jpg" alt="" /></a>
                        <p>lorem movie review</p>
                    </li>
                    <li>
                        <a href="single.html"><img src="images/f5.jpg" alt="" /></a>
                        <p>lorem movie review</p>
                    </li>
                    <li>
                        <a href="single.html"><img src="images/f6.jpg" alt="" /></a>
                        <p>lorem movie review</p>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>

            <div class="entertainment">
                <h3>Featured Today in Entertainment</h3>
                <ul>
                    <li class="ent">
                        <a href="single.html"><img src="images/f6.jpg" alt="" /></a>
                    </li>
                    <li>
                        <a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

                    </li>
                    <div class="clearfix"></div>
                </ul>
                <ul>
                    <li class="ent">
                        <a href="single.html"><img src="images/f5.jpg" alt="" /></a>
                    </li>
                    <li>
                        <a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

                    </li>
                    <div class="clearfix"></div>
                </ul>
                <ul>
                    <li class="ent">
                        <a href="single.html"><img src="images/f3.jpg" alt="" /></a>
                    </li>
                    <li>
                        <a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

                    </li>
                    <div class="clearfix"></div>
                </ul>
                <ul>
                    <li class="ent">
                        <a href="single.html"><img src="images/f4.jpg" alt="" /></a>
                    </li>
                    <li>
                        <a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

                    </li>
                    <div class="clearfix"></div>
                </ul>
                <ul>
                    <li class="ent">
                        <a href="single.html"><img src="images/f2.jpg" alt="" /></a>
                    </li>
                    <li>
                        <a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

                    </li>
                    <div class="clearfix"></div>
                </ul>
                <ul>
                    <li class="ent">
                        <a href="single.html"><img src="images/f1.jpg" alt="" /></a>
                    </li>
                    <li>
                        <a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>

                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="might">
                <h4>You might also like</h4>
                <div class="might-grid">
                    <div class="grid-might">
                        <a href="single.html"><img src="images/mi.jpg" class="img-responsive" alt=""> </a>
                    </div>
                    <div class="might-top">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="single.html">Lorem Ipsum <i> </i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="might-grid">
                    <div class="grid-might">
                        <a href="single.html"><img src="images/mi1.jpg" class="img-responsive" alt=""> </a>
                    </div>
                    <div class="might-top">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="single.html">Lorem Ipsum <i> </i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="might-grid">
                    <div class="grid-might">
                        <a href="single.html"><img src="images/mi2.jpg" class="img-responsive" alt=""> </a>
                    </div>
                    <div class="might-top">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="single.html">Lorem Ipsum <i> </i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="might-grid">
                    <div class="grid-might">
                        <a href="single.html"><img src="images/mi3.jpg" class="img-responsive" alt=""> </a>
                    </div>
                    <div class="might-top">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="single.html">Lorem Ipsum <i> </i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!---->
            <div class="grid-top">
                <h4>Archives</h4>
                <ul>
                    <li><a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                    <li><a href="single.html">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
                    <li><a href="single.html">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a> </li>
                    <li><a href="single.html">It has survived not only five centuries, but also the leap into electronic typesetting</a> </li>
                    <li><a href="single.html">Remaining essentially unchanged. It was popularised in the 1960s with the release of </a> </li>
                    <li><a href="single.html">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a> </li>
                    <li><a href="single.html">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a> </li>
                </ul>
            </div>
            <!---->

        </div>

        <div class="clearfix"></div>
    </div>
@endsection