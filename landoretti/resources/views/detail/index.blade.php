@extends('layouts.master')

@section('content')
    @include('includes.navigation')
    @include('includes.spotlight')

    <section class="detail">
        <div class="container">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('lander') }}">Home</a></li>
                     <li><a href="{{ route('auction.index') }}">Auctions</a></li>
                     <li><a href="#">Salvador Dali</a></li>
                    <li><span class="show-for-sr">Current: </span>Dance of Time III</li>
                </ul>
                <p class="pull-right">Lot ID: 84611</p>
            </nav>


            <h1>Dance of Time III</h1>
            <p class="date">25d 14u 44m  <span>(7 bids)</span><span class="hamburger"></span></p>

            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell small-8">
                        <div class="grid-x">
                            <div class="cell small-12">
                                <div class="main">
                                    <img src="{{ asset('assets/graphics/vintage-camera.jpg') }}" title="vintage camera" alt="vintage camera">
                                </div>
                            </div>
                        </div>

                        <div class="grid-x">
                            <div class="detail-pictures">
                                <div class="thumbnails">
                                    <a class="cell small-4">
                                        <img class="overlay" src="{{ asset('assets/graphics/vintage-camera-zoomed.jpg') }}" title="vintage camera" alt="vintage camera">
                                    </a>

                                    <a class="cell small-4">
                                        <img class="overlay" src="{{ asset('assets/graphics/camera-lcd-zoomed.jpg') }}" title="camera lcd" alt="camera lcd">
                                    </a>

                                    <a class="cell small-4">
                                        <img class="overlay" src="{{ asset('assets/graphics/camera-lens-zoomed.jpg') }}" title="camera lens" alt="camera lens">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cell small-4">
                        <div class="sidebar-description">
                            <div class="title">
                                <h6>Dance of Time III</h6>
                                <a href="#">1979, Salvador Dali</a>
                            </div>

                            <div class="expire">
                                <div>
                                    <p class="date">25d 14u 44m left </p>
                                    <p>September 09, 2013, 13:00 p.m. (EST)</p>
                                </div>
                            </div>

                            <div class="description">
                                <p>tur adipisicing elit, sed do eiusmod tempor incididunt ut labaliqore et dolore magna incididunt ut labaliqore et dolore magna..  </p>
                                <a href="#">more</a>
                            </div>
                        </div>

                        <div class="container-estimated">
                            <div class="estimated">
                                <div>
                                    <p>Estimated price:</p>
                                    <p class="price">€ 9.500 - € 10.500</p>
                                    <a href="#">Buy now for € 15.000</a>
                                </div>
                            </div>

                            <div class="visit-auction">
                                <p>bids: 7</p>
                                <div class="bidding">
                                    <form action="{{ route('detail') }}">
                                        <input type="text" name="price" id="price">
                                        <input type="submit" value="Bid now">
                                        <span></span>
                                    </form>
                                </div>
                            </div>

                            <div class="add-to-watchlist">
                                <span></span>
                                <a href="">add to my watchlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="extensive-description">
        <div class="container">
            <div class="grid-container">
                <div class="grid-x container-description">
                        <div class="cell small-9">
                            <div class="description">
                                <h6>Description</h6>
                                <p>
                                    "Dance of Time III" (1979-84) is a stunning bronze and gold patina sculpture<br />
                                    by Spanish Contemporary artist Salvador Dalí (Spain, 1904 - 1989), measures 10.43 inches (26.50 cm) and is stamped and numbered from an edition of 350. This sculpture is in perfect condition and is accompanied by documentation of authenticity. As one of the most well known and iconic images seen in Dali’s work, the melted watch has appeared consistently throughout the artist’s oeuvre. As time universally knows no limits, it is perceived as something perpetual- ‘dancing on’ and stopping for no one as exemplified in this ‘Dance of Time III’ sculpture. Meant to echo the fluidity of time, the undulated form of this melted clock captures the surrealistic imagery so beloved and continuously employed by Dali.
                                </p>
                            </div>

                            <div class="condition">
                                <h6>Condition</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, nec dictum, consectetuer donec tincidunt eget ante libero gravida. Wisi nec nulla, lorem suspendisse lorem id tellus eget, erat tellus, enim at. A purus libero amet vitae accumsan scelerisque, quis orci sed ornare pulvinar, luctus mauris turpis mollis ut vel eget, id massa non cursus felis. Sed et mus non non augue tortor. Pede id massa, ante rhoncus et at ad, fringilla vulputate dapibus nunc, iaculis sollicitudin accumsan non, hac vehicula hymenaeos. Felis aliquet donec vitae. Autem ante, sollicitudin feugiat amet viverra quae risus, dui dis semper ac non, mi curabitur amet. Bibendum nunc fusce aliquam ante tempus, imperdiet magna.
                                </p>
                            </div>
                        </div>

                        <div class="cell small-3">
                            <div>
                                <div class="artist">
                                    <p class="title">Artist</p>
                                    <p>Salvador Dali</p>
                                    <p>Spanish</p>
                                    <p>1904 - 1989</p>
                                </div>

                                <div class="dimensions">
                                    <p class="title">Dimensions</p>
                                    <p>10.43 x 10.43 x 10.44 cm</p>
                                </div>

                                <div class="color">
                                    <p class="title">Color</p>
                                    <p>Bronze, patinated bronze and gold</p>
                                </div>

                                <div class="btn-question">
                                    <a href="#">Ask a question<br>about this auction</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related-items">
        <div class="container">
            <h2>Related items</h2>
            <div class="grid-container">
                <div class="grid-x">
                    
                   <div class="cell small-12 medium-3">                
                        

                        <div class="cell small-12">
                            <img class="overlay" src="{{ asset('assets/graphics/green-clock.jpg') }}" title="green clock" alt="green clock">
                            <a href="#"><img src="{{ asset('assets/graphics/search-white.svg') }}" alt="search"></a>
                        </div>

                        <div class="info">
                            <div>
                                <a href="#">1979, Salvador Dali</a>
                                <h6>Dance of Time III</h6>
                                <p class="price">€ 8.900</p>
                                <div class="visit-auction">
                                    <p>25d 14u 44m</p>
                                    <a href="#">visit auction<span></span></a>
                                </div>
                            </div>
                        </div>                       
                    </div>

                    <div class="cell small-12 medium-3">
                        <div class="cell small-12">
                            <img class="overlay" src="{{ asset('assets/graphics/blue-portret.jpg') }}" title="blue portret" alt="blue portret">
                            <a href="#"><img src="{{ asset('assets/graphics/search-white.svg') }}" alt="search"></a>
                        </div>

                        <div class="info">
                            <div>
                                <a href="#">1979, Salvador Dali</a>
                                <h6>Dance of Time III</h6>
                                <p class="price">€ 8.900</p>
                                <div class="visit-auction">
                                    <p>25d 14u 44m</p>
                                    <a href="#">visit auction<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="cell small-12 medium-3">
                        <div class="cell small-12">
                            <img class="overlay" src="{{ asset('assets/graphics/woman-walking.jpg') }}" title="woman walking" alt="woman walking">
                            <a href="#"><img src="{{ asset('assets/graphics/search-white.svg') }}" alt="search"></a>
                        </div>

                        <div class="info">
                            <div>
                                <a href="#">1979, Salvador Dali</a>
                                <h6>Dance of Time III</h6>
                                <p class="price">€ 8.900</p>
                                <div class="visit-auction">
                                    <p>25d 14u 44m</p>
                                    <a href="#">visit auction<span></span></a>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <div class="cell small-12 medium-3">
                        <div class="cell small-12">
                            <img class="overlay" src="{{ asset('assets/graphics/body.jpg') }}" title="body" alt="body">
                            <a href="#"><img src="{{ asset('assets/graphics/search-white.svg') }}" alt="search"></a>
                        </div>

                        <div class="info">
                            <div>
                                <a href="#">1979, Salvador Dali</a>
                                <h6>Dance of Time III</h6>
                                <p class="price">€ 8.900</p>
                                <div class="visit-auction">
                                    <p>25d 14u 44m</p>
                                    <a href="#">visit auction<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop