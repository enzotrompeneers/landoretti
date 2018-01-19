@extends('layouts.master')

@section('content')
    @include('includes.navigation')
    @include('includes.spotlight')

    <section class="watchlist">
        <div class="container">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('lander') }}">Home</a></li>
                     <li><a href="#">Jasper Poppe</a></li>
                    <li><span class="show-for-sr">Current: </span>My watchlist</li>
                </ul>
            </nav>

            <h1>My watchlist</h1>

            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell medium-1">
                        @for ($i = 1, $max = 11; $i <= $max; $i++)
                            <div class="vertical-align">
                                <input id="{{ $i }}" type="checkbox" />
                            </div>
                        @endfor
                    </div>

                    <div class="cell medium-11">
                         <div class="btn-clear-watchlist">
                            <a href="#">Clear watchlist <span></span></a>
                        </div>

                        <div class="btn-delete-selected">
                            <a href="#">Delete selected <span></span></a>
                        </div>
                        
                        <div class="filter">
                            <ul>
                                <li><a href="">all(11)</a> |</li>
                                <li><a href="">active(8)</a> |</li>
                                <li><a href="">ended(3)</a></li>
                            </ul>
                        </div>
                    
                        <table class="responsive-card-table unstriped">
                            <thead>
                                <tr>
                                    <th>Auction details</th>
                                    <th>Estimated price</th>
                                    <th>End date</th>
                                    <th>Remaining time</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/vintage-radio.jpg') }}" title="vintage radio" alt="vintage radio">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/green-clock.jpg') }}" title="green clock" alt="green clock">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/blue-portret.jpg') }}" title="blue portret" alt="blue portret">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/woman-walking.jpg') }}" title="woman walking" alt="woman walking">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/greek-monument.jpg') }}" title="greek monument" alt="greek monument">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/body.jpg') }}" title="body" alt="body">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/sea.jpg') }}" title="sea" alt="sea">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/woman-posing.jpg') }}" title="woman posing" alt="woman posing">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/laughing-men.jpg') }}" title="laughing men" alt="laughing men">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/record-player-zoomed.jpg') }}" title="record player" alt="record player">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>

                                <tr>
                                    <td data-label="Auction details">
                                        <div class="image">
                                            <img src="{{ asset('assets/graphics/kids-drawing.jpg') }}" title="kids drawing" alt="kids drawing">
                                        </div>

                                        <div class="description">
                                            <div>
                                                <h3>Dance of Time III</h3>
                                                <a href="#">1979, Salvador Dali</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Estimated price">&euro; 8.900</td>
                                    <td data-label="End date">September 09, 2013 13:00 p.m. (EST)</td>
                                    <td data-label="Remaining time">25d 14u 44m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop