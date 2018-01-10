@extends('layouts.master')

@section('content')

<div id="container-navbar-carousel">
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

	<div id="hamburger-menu" class="hide-for-large">
		<input id="burger" type="checkbox" />
		<label for="burger">
		    <span></span>
		    <span></span>
		    <span></span>
		</label>
		<nav>    
			 <ul class="vertical menu" data-responsive-menu="drilldown medium-dropdown">
				<li><a href="">Search</a></li>
				<li>
					<a href="#">Language</a>
					<ul class="horizontal menu">
						<hr class="show-for-small-only">
						<li><a class="log-input" href="">Nl</a></li>
						<li><a class="log-input" href="">Fr</a></li>
						<li><a class="log-input" href="">En</a></li>
					</ul>
				</li>
				@if (Auth::user())
					<li class="show-for-small-only"><a href=""></a>Watchlist</a></li>
					<li class="show-for-small-only"><a href="">Profile</a></li>
					<li class="show-for-small-only"><a href="">Logout</a></li>
				@else
					<li class="show-for-small-only"><a href="">Register</a></li>
					<li class="show-for-small-only">
						<a href="">Login</a>
						<ul class="horizontal menu">
							<hr>
							<form class="login-form" action="{{ route('login') }}" method="post">
								{{ csrf_field() }}
								<li><label for="user">Username</label><input class="log-input" type="text" name="user" placeholder="User" id="user"></li>
								<li><label for="password">Password</label><input class="log-input" type="password" name="password" placeholder="Password" id="password"></li>
								<li class="log-input"><input class="submit-arrow" type="image" src="{{ asset('assets/graphics/arrow-button.jpg') }}" alt="login" type="submit"/></li>
								
							</form>
						</ul>
					</li>

						
				@endif
				<li class="show-for-small-only"><a href="">Home</a></li>
				<li class="show-for-small-only"><a href="">Art</a></li>
				<li class="show-for-small-only"><a href="">Isearch</a></li>
				<li class="show-for-small-only"><a href="">Myaunctions</a></li>
				<li class="show-for-small-only"><a href="">Mybids</a></li>
				<li class="show-for-small-only"><a href="">Contact</a></li>
			</ul>
		</nav>
	</div>


	<div class="navbar">
		<div class="line-top"></div>
		<div class="header-top">
			<div class="container">
				<div class="container-logo">
					<div class="logo-image">
						<a href="{{ route('lander.index') }}"><img src="{{ asset('assets/graphics/landoretti-art.png') }}" alt="landoretti art"></a>
					</div>
				</div>

				<ul class="show-for-medium">
					@if (Auth::user())
						<div class="state-logged-in">
							<li><img class="menu-icon"src="{{ asset('assets/graphics/menu-icon.svg') }}" alt="user"><a href=""></a>Watchlist</a></li>
							<li><img class="user-icon"src="{{ asset('assets/graphics/user-icon.svg') }}" alt="user"><a href="">Profile</a></li>
							<li><a href="">Logout</a></li>
						</div>
					@else
						<div class="state-not-logged-in">
							<li><a href="">Register</a></li>
							<li><a id="login">Login</a></li>
						</div>

						<div class="state-interaction">
							<form action="{{ route('login') }}" method="post">
								{{ csrf_field() }}
								<li><a class="register"href="">Register</a></li>
								<li><input type="text" name="user" placeholder="User"></li>
								<li><input type="password" name="password" placeholder="Password"></li>
								<li><input class="login" type="image" src="{{ asset('assets/graphics/arrow-button.jpg') }}" alt="login" type="submit"/></li>
							</form>
						</div>
					@endif
				</ul>

				<div class="search show-for-large">
					<form action="#search" role="search" method="get">
						<div class="input-group">
							<input class="searchbar" type="text" name="search" placeholder="Search" id="search">
							<input class="search-icon" type="image" src="{{ asset('assets/graphics/search-icon.svg') }}" alt="search" type="submit"/>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="header-bottom show-for-medium">
			<div class="container">
				<div class="navigation">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Art</a></li>
						<li><a href="">Isearch</a></li>
						<li><a href="">Myaunctions</a></li>
						<li><a href="">Mybids</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
				<div class="languages show-for-large">
					<ul>
						<li><a href="">Nl</a></li>
						<li><a href="">Fr</a></li>
						<li><a href="">En</a></li>
					</ul>
				</div>
			</div>
		</div>
  	</div>
</div>
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


  	

  	

  	
@stop

@section('scripts')
	<script>
		$(document).ready(function(){
			$('#login').click(function(){
				$('.state-interaction').show();
				$('.state-not-logged-in').hide();
			});

			$("#carousel-slider").owlCarousel({
				navigation : true,
				slideSpeed : 500,
				paginationSpeed : 800,
				rewindSpeed : 1000,
				singleItem: true,
				autoPlay : true,
				stopOnHover : true,
				pagination: true,
			});

			$( ".owl-next").html('<button class="orbit-next"><span class="show-for-sr">Next slide</span><div class="arrow-right"></div></button>');
 			$( ".owl-prev").html('<button class="orbit-previous"><span class="show-for-sr">Previous slide</span><div class="arrow-left"></div></button>');
		});
	</script>
@stop








