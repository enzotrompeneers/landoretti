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
		    <li><a href="#">Search</a></li>
		    <li><a href="#">Language</a>
		    	<ul class="horizontal menu">
					<li><a href="">Nl</a></li>
					<li><a href="">Fr</a></li>
					<li><a href="">En</a></li>
		        </ul>
		    </li>
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

				<ul>
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

  	<div class="container">
  		<div class="info-container show-for-large">
  			<div class="grid-container text-center">
  				<h1>How does it work?</h1>
				<div class="grid-x grid-margin-x grid-margin-y grid-padding-x grid-padding-y"> 
					<div class="cell medium-6 large-4">
						<b>Groot scherm</b><br>
						kolomgrootte: 4 <br>
						Foundation grid: 12 <br>
						4 / 12 = 3 <br>
						3 kolommen per rij
					</div>

					<div class="cell medium-6 large-4">
						<b>Middelmatig scherm</b><br>
						kolomgrootte: 6 <br>
						Foundation grid: 12 <br>
						6 / 12 = 2 <br>
						2 kolommen per rij
					</div>

					<div class="cell medium-6 large-4">
						<b>Klein scherm</b><br>
						kolomgrootte: 12 <br>
						Foundation grid: 12 <br>
						12 / 12 = 1 <br>
						1 kolom per rij
					</div>

					
				</div>
			</div>
  			
	  	</div>
  	</div>

  	

  	

  	
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








