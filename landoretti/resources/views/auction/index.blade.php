@extends('layouts.master')

@section('content')
    @include('includes.navigation')
    @include('includes.spotlight')

    <section class="my-auctions">
        <div class="container">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('lander') }}">Home</a></li>
                     <li><a href="#">Jasper Poppe</a></li>
                    <li><span class="show-for-sr">Current: </span>My auctions</li>
                </ul>
            </nav>

            <h1>My auctions</h1>
            <div class="btn-new-auction">
                <a href="{{ route('auction.create') }}">Add new auction <span></span></a>
            </div>
            
            <div class="pending">
                <h3>Pending</h3>
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
                    </tbody>
                </table>
            </div>

            <div class="refused">
                <h3>Refused</h3>
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
                            <td data-label="Remaining time">x</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="active">
                <h3>Active</h3>
                <small class="info-message">You currently have no active auctions. Please add a new auction or wait for approval.</small>
            </div>

            <div class="expired">
                <h3>Expired</h3>
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
                            <td data-label="Remaining time">x</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="sold">
                <h3>Sold</h3>
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
                            <td data-label="Remaining time">sold</td>
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
                            <td data-label="Remaining time">sold</td>
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
                            <td data-label="Remaining time">sold</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop