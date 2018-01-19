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
                                        <img src="{{ asset('assets/graphics/vintage-camera-zoomed.jpg') }}" title="vintage camera" alt="vintage camera">
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
@stop