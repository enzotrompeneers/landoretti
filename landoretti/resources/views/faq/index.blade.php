@extends('layouts.master')

@section('content')
    @include('includes.navigation')
    @include('includes.spotlight')

    <section class="faq">
        <div class="container">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('lander') }}">Home</a></li>
                    <li><span class="show-for-sr">Current: </span>Frequently Asked Questions</li>
                </ul>
            </nav>

            <h1>Find what you're looking for?</h1>

            <div class="container-anchor">
                <div class="anchor-links">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell small-12 medium-3">
                                <ul>
                                    <li><a href="#">How to bid?</a></li>
                                    <li><a href="#">How to sell?</a></li>
                                </ul>
                            </div>

                            <div class="cell small-12 medium-3">
                                <ul>
                                    <li><a href="#">How to buy?</a></li>
                                    <li><a href="#">How to register?</a></li>
                                </ul>
                            </div>

                            <div class="cell small-12 medium-3">
                                <ul>
                                    <li><a href="#">How to ask a question?</a></li>
                                    <li><a href="#">What is a watchlist?</a></li>
                                </ul>
                            </div>

                            <div class="cell small-12 medium-3">
                                <ul>
                                    <li><a href="#">How to use a watchlist?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-search">
                <a href="#">I Search <span></span></a>
            </div>

        </div>
    </section>

    <section class="container-faq">
        <div class="container">
            <div class="articles">
                <article>
                    <div class="header-left">
                        <ul>
                            <li>Q</li>
                            <li>A</li>
                        </ul>
                    </div>

                    <div class="answer">
                        <h2>How to bid?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span>nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span>commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </article>

                <article>
                    <div class="header-left">
                        <ul>
                            <li>Q</li>
                            <li>A</li>
                        </ul>
                    </div>

                    <div class="answer">
                        <h2>How to sell?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span>nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span>commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </article>

                <article>
                    <div class="header-left">
                        <ul>
                            <li>Q</li>
                            <li>A</li>
                        </ul>
                    </div>

                    <div class="answer">
                        <h2>How to buy?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span>nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span>commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </article>

                <article>
                    <div class="header-left">
                        <ul>
                            <li>Q</li>
                            <li>A</li>
                        </ul>
                    </div>

                    <div class="answer">
                        <h2>How to register?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span>nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span>commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </article>

                <article>
                    <div class="header-left">
                        <ul>
                            <li>Q</li>
                            <li>A</li>
                        </ul>
                    </div>

                    <div class="answer">
                        <h2>How to ask a question?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span>nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span>‘I search’</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </article>

                <article>
                    <div class="header-left">
                        <ul>
                            <li>Q</li>
                            <li>A</li>
                        </ul>
                    </div>

                    <div class="answer">
                        <h2>What is a watchlist?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span>nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span>commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </article>

                <article>
                    <div class="header-left">
                        <ul>
                            <li>Q</li>
                            <li>A</li>
                        </ul>
                    </div>

                    <div class="answer">
                        <h2>How to use a watchlist?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span>nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span>commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
@stop