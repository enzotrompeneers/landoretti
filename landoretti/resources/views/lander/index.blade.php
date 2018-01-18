@extends('layouts.master')

@section('content')

<section id="container-navbar-carousel">
	<div class="container-carousel">
		<div id="carousel-slider" class="owl-carousel owl-theme">
			<div class="slider wall-art" title="wall art"></div>
			<div class="slider camera" title="camera"></div>
			<div class="slider record-player" title="record player"></div>
		</div>
	</div>

	<div class="container">
		<div class="intro-container">
			<div class="art-icon"></div>
			<div class="intro-text">
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a.
				</p>
			</div>
		</div>
	</div>
	
	@include('includes.navigation')
	
</section>
<hr>

<section class="info-block">
	<div class="container text-center">
		<h2>How does it work?</h2>
		<div class="grid-container text-center">
			<div class="grid-x"> 
				<div class="cell small-12 medium-4 large-4">
					<img src="{{ asset('assets/graphics/pencil.png') }}" title="sign up" alt="pencil">
					<h3>Sign up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
				</div>

				<div class="cell small-12 medium-4 large-4">
					<img src="{{ asset('assets/graphics/check-mark.png') }}" title="make deals" alt="check mark">
					<h3>Make deals</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
				</div>

				<div class="cell small-12 medium-4 large-4">
					<img src="{{ asset('assets/graphics/smile-emoji.png') }}" title="everyone happy" alt="smile emoji">
					<h3>Everyone happy!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="popular-block">
	<h2>Most popular this week</h2>
	<img src="{{ asset('assets/graphics/arrow-down.svg') }}" alt="arrow down">
	<div class="container">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12 medium-4 large-4">
					<div class="cell small-12 medium-12 large-12">
						<img class="overlay" src="{{ asset('assets/graphics/stamps.jpg') }}" title="stamps" alt="stamps">
						<a href="#"><img src="{{ asset('assets/graphics/search-white.svg') }}" alt="search"></a>
					</div>
					<div class="cell small-12 medium-12 large-12">
						<img class="overlay" src="{{ asset('assets/graphics/pink-lady.jpg') }}" title="pink lady" alt="pink lady">
						<a href="#"><img src="{{ asset('assets/graphics/search-white.svg') }}" alt="search"></a>
					</div>
				</div>

				<div class="cell small-12 medium-8 large-8">
					<img class="overlay" src="{{ asset('assets/graphics/clock.jpg') }}" title="clock" alt="clock">
					<a href="#"><img src="{{ asset('assets/graphics/search-white.svg') }}" alt="search"></a>
				</div>
			</div>
		</div>
</section>

@stop








