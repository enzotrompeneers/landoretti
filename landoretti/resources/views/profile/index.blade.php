@extends('layouts.master')

@section('content')
    @include('includes.navigation')
    @include('includes.spotlight')

    <section class="profile">
        <div class="container">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('lander') }}">Home</a></li>
                    <li><span class="show-for-sr">Current: </span>Jasper Poppe</li>
                </ul>
            </nav>


            <h1>Profile</h1>

            <div class="profile-info">
                <h5>Jasper Poppe</h5>
                <div class="grid-container">
                    <div class="grid-x">
                        <div class="cell small-3 border-right">
                            <div class="personal-information">
                                <p><img class="icon" src="{{ asset('assets/graphics/mail-icon.png') }}" alt="mail"><span>name@domain.com</span></p>

                                <p> <img class="icon" src="{{ asset('assets/graphics/phone-icon.png') }}" alt="phone">+xx (0)x xxx xx xx</p>

                            </div>

                            <div class="address">
                                <p>Straatnaam xxx</p>
                                <p>xxxx, Oostende</p>
                            </div>
                        </div>

                        <div class="cell small-3">
                            <div class="vat">
                                <h6>VAT-number</h6>
                                <p>xx xxx xx xx</p>
                            </div>

                            <div class="account">
                                <h6>ACCOUNT number</h6>
                                <p>xx xxx xx xx</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="grid-container">
                <div class="grid-x">
                </div>
            </div>
    </section>

    <section class="active-auctions">
        <div class="container">
            <h2>Active auctions</h2>
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
                            <img class="overlay" src="{{ asset('assets/graphics/spine.jpg') }}" title="spine" alt="spine">
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
                </div>
            </div>
        </div>
    </section>
@stop