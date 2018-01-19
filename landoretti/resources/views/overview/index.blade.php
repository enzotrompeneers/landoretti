@extends('layouts.master')

@section('content')
    @include('includes.navigation')
    @include('includes.spotlight')


    <div class="overview-options">
        <div class="top">
            <div class="container">
                <div>
                    <div class="list">
                        <ul>
                            <li>Sort by: </li>
                            <li><a href="#">ending soonest</a> |</li>
                            <li><a href="#">ending latest</a> |</li>
                            <li><a href="#">new auctions</a> |</li>
                            <li><a href="#">popular auctions</a></li>
                        </ul>
                    </div>

                    <div class="options pull-right">
                        <h5>Advanced Options</h5>
                        <a href="#"></a>
                    </div>
                </div>

                <div class="filter-menu">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell small-3">
                                <nav>
                                    <h4>Price</h4>
                                    <ul class="nav navbar-nav">
                                        <li><a href="">Up to 5,000</a></li>
                                        <li><a href="">5,000–10,000</a></li>
                                        <li><a href="">10,000–25,000</a></li>
                                        <li><a href="">25,000–50,000</a></li>
                                        <li><a href="">50,000–100,000</a></li>
                                        <li><a href="">Above</a></li>
                                    </ul>
                                </nav>

                                <nav>
                                    <h4>Ending</h4>
                                    <ul class="nav navbar-nav">
                                        <li><a href="">Ending this Week</a></li>
                                        <li><a href="">Newly Listed</a></li>
                                        <li><a href="">Purchase Now</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="cell small-3">
                                <nav>
                                    <h4>Era</h4>
                                    <ul class="nav navbar-nav">
                                        <li><a href="">Pre-War</a></li>
                                        <li><a href="">1940s–1950s</a></li>
                                        <li><a href="">1960s–1980s</a></li>
                                        <li><a href="">1990s–Present</a></li>
                                    </ul>
                                </nav>

                                <nav>
                                    <h4>Media</h4>
                                    <ul class="nav navbar-nav">
                                        <li><a href="">Design</a></li>
                                        <li><a href="">Paintings and Works on Paper</a></li>
                                        <li><a href="">Photographs</a></li>
                                        <li><a href="">Prints and Multiples</a></li>
                                        <li><a href="">Sculpture</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="cell small-3">
                                <nav>
                                    <h4>STYLE</h4>
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">Abstract</a></li>
                                        <li><a href="#">African American</a></li>
                                        <li><a href="#">Asian Contemporary</a></li>
                                        <li><a href="#">Conceptual</a></li>
                                        <li><a href="#">Contemporary</a></li>
                                        <li><a href="#">Emerging Artists</a></li>
                                        <li><a href="#">Figurative</a></li>
                                        <li><a href="#">Middle Eastern Contemporary</a></li>
                                        <li><a href="#">Minimalism</a></li>
                                        <li><a href="#">Modern</a></li>
                                        <li><a href="#">Pop</a></li>
                                        <li><a href="#">Urban</a></li>
                                        <li><a href="#">Vintage Photographs</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="overview">
        <div class="container">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('lander') }}">Home</a></li>
                    <li><span class="show-for-sr">Current: </span>Auctions</li>
                </ul>

                <div class="pagination">
                    <ul class="pagination text-center" role="navigation" aria-label="Pagination">
                        <li class="pagination-previous"><a href="#" aria-label="Previous page">&lt;</a></li>
                        <li><a href="#" aria-label="Page 1">1</a></li>
                        <li><a href="#" aria-label="Page 2">2</a></li>
                        <li class="current"><span class="show-for-sr">You're on page</span> 3</li>
                        <li><a href="#" aria-label="Page 4">4</a></li>
                        <li class="pagination-next"><a href="#" aria-label="Next page">&gt;</a></li>
                    </ul>
                </div>

            </nav>

            <div class="head">
                <div class="grid-container">
                    <div class="grid-x">
                        <div class="cell small-6 big-image">
                            <img src="{{ asset('assets/graphics/person.jpg') }}" title="person" alt="person">
                            <div class="text-overlay"> 
                                <h1><span>&#8220;</span>Lorem Ipsum dolor<span>&#8221;</span></h1>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    rem ipsum dolor sit amet, consectetur adipisicing elit,
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    rem ipsum dolor sit amet, consectetur adipisicing elit,
                                </p>
                            </div>
                        </div>

                        <div class="cell small-6">
                            <div class="grid-x">
                                <div class="cell small-6">
                                    <div class="image">
                                        <div class="overlay">
                                            <div class="svg-icon"></div>
                                            <div class="transparent"></div>
                                        </div>
                                        <img src="{{ asset('assets/graphics/green-clock.jpg') }}" title="green clock" alt="green clock">
                                    </div>

                                    <div class="info">
                                        <div>
                                            <a href="#">1979, Salvador Dali</a>
                                            <h6>Dance of Time III</h6>
                                            <p class="price">€ 8.900</p>
                                            <div class="visit-auction">
                                                <p>25d 14u 44m</p>
                                                <a href="#">visit auction &gt;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cell small-6">
                                    <div class="image">
                                        <div class="overlay">
                                            <div class="svg-icon"></div>
                                            <div class="transparent"></div>
                                        </div>
                                        <img src="{{ asset('assets/graphics/blue-portret.jpg') }}" title="blue portret" alt="blue portret">
                                    </div>

                                    <div class="info">
                                        <div>
                                            <a href="#">1979, Salvador Dali</a>
                                            <h6>Dance of Time III</h6>
                                            <p class="price">€ 8.900</p>
                                            <div class="visit-auction">
                                                <p>25d 14u 44m</p>
                                                <a href="#">visit auction &gt;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cell small-6">
                                    <div class="image">
                                        <div class="overlay">
                                            <div class="svg-icon"></div>
                                            <div class="transparent"></div>
                                        </div>
                                        <img src="{{ asset('assets/graphics/woman-walking.jpg') }}" title="woman walking" alt="woman walking">
                                    </div>

                                    <div class="info">
                                        <div>
                                            <a href="#">1979, Salvador Dali</a>
                                            <h6>Dance of Time III</h6>
                                            <p class="price">€ 8.900</p>
                                            <div class="visit-auction">
                                                <p>25d 14u 44m</p>
                                                <a href="#">visit auction &gt;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cell small-6">
                                    <div class="image">
                                        <div class="overlay">
                                            <div class="svg-icon"></div>
                                            <div class="transparent"></div>
                                        </div>
                                        <img src="{{ asset('assets/graphics/body.jpg') }}" title="body" alt="body">
                                    </div>

                                    <div class="info">
                                        <div>
                                            <a href="#">1979, Salvador Dali</a>
                                            <h6>Dance of Time III</h6>
                                            <p class="price">€ 8.900</p>
                                            <div class="visit-auction">
                                                <p>25d 14u 44m</p>
                                                <a href="#">visit auction &gt;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="container">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell small-12 medium-3">                
                                <div class="cell small-12">
                                    <img class="overlay" src="{{ asset('assets/graphics/laughing-men.jpg') }}" title="laughing men" alt="laughing men">
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
                                    <img class="overlay" src="{{ asset('assets/graphics/greek-monument.jpg') }}" title="greek monument" alt="greek monument">
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
                                    <img class="overlay" src="{{ asset('assets/graphics/woman-posing.jpg') }}" title="woman posing" alt="woman posing">
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
                                    <img class="overlay" src="{{ asset('assets/graphics/vintage-radio.jpg') }}" title="vintage radio" alt="vintage radio">
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
            </div>

            <div class="pagination-down">
                <ul class="pagination text-center" role="navigation" aria-label="Pagination">
                    <li class="pagination-previous"><a href="#" aria-label="Previous page">&lt;</a></li>
                    <li><a href="#" aria-label="Page 1">1</a></li>
                    <li><a href="#" aria-label="Page 2">2</a></li>
                    <li class="current"><span class="show-for-sr">You're on page</span> 3</li>
                    <li><a href="#" aria-label="Page 4">4</a></li>
                    <li class="pagination-next"><a href="#" aria-label="Next page">&gt;</a></li>
                </ul>
            </div>
        </div>
    </section>
@stop


