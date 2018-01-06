@extends('layouts.master')

@section('content')

<div id="container-navbar-carousel">
	<div class="container-carousel">
		<div id="carousel-slider" class="owl-carousel owl-theme">
			<div class="slider wall-art" title="wall art"></div>
			<div class="slider camera" title="camera"></div>
			<div class="slider record-player" title="record player"></div>
		</div>
		<!--
		<div class="owl-nav">
			<button class="owl-next">
				<span class="show-for-sr">Next slide</span>
				<div class="arrow-right"></div>
			</button>
			<button class="owl-prev">
				<span class="show-for-sr">Previous slide</span>
				<div class="arrow-left"></div>
			</button>
		</div>
		-->
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

				<div class="search">
					<form action="#search" role="search" method="get">
						<div class="input-group">
							<input class="searchbar" type="text" name="search" placeholder="Search" id="search">
							<input class="search-icon" type="image" src="{{ asset('assets/graphics/search-icon.svg') }}" alt="search" type="submit"/>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="header-bottom">
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
				<div class="languages">
					<ul>
						<li><a href="">Nl</a></li>
						<li><a href="">Fr</a></li>
						<li><a href="">En</a></li>
					</ul>
				</div>
			</div>
		</div>
  	</div>

  	<div class="info-container">Intro on the bottom
  	</div>





<!--
	<div class="header-carousel">
		<div class="carousel">
			<div class="intro-block">
				<div class="orbit" role="region" aria-label="Landoretti art" data-orbit>
					<div class="orbit-wrapper">
						<div class="orbit-controls">
							<button class="orbit-previous"><span class="show-for-sr">Previous slide</span><div class="arrow-left"></div></button>
							<button class="orbit-next"><span class="show-for-sr">Next slide</span><div class="arrow-right"></div></button>
						</div>
						<ul class="orbit-container">
							<li class="is-active orbit-slide">
								<figure class="orbit-figure">
									<img class="orbit-image" src="{{ asset('assets/graphics/wall-art.jpg') }}" alt="wall art">
								</figure>
							</li>
							<li class="orbit-slide">
								<figure class="orbit-figure">
									<img class="orbit-image" src="{{ asset('assets/graphics/camera.jpg') }}" alt="camera">
								</figure>
							</li>
							<li class="orbit-slide">
								<figure class="orbit-figure">
									<img class="orbit-image" src="{{ asset('assets/graphics/record-player.jpg') }}" alt="record player">
								</figure>
							</li>
						</ul>
					</div>

					<nav class="orbit-bullets">
						<button class="bullet is-active" data-slide="0"><span class="show-for-sr">art on the wall</span><span class="show-for-sr">Current slide</span></button>
						<button class="bullet" data-slide="1"><span class="show-for-sr">old camera</span></button>
						<button class="bullet" data-slide="2"><span class="show-for-sr">record player</span></button>
					</nav>

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
				</div>
			</div>
		</div>

		<div class="mynav">
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

					<div class="search">
						<form action="#search" role="search" method="get">
							<div class="input-group">
								<input class="searchbar" type="text" name="search" placeholder="Search" id="search">
								<input class="search-icon" type="image" src="{{ asset('assets/graphics/search-icon.svg') }}" alt="search" type="submit"/>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="header-bottom">
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
					<div class="languages">
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
	<p>dit is nog een test</p>
	<p>test</p>
	<div class="myintro">Intro on the bottom test</div>
	<p>test</p>
	-->









	<!--
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

				<div class="search">
					<form action="#search" role="search" method="get">
						<div class="input-group">
							<input class="searchbar" type="text" name="search" placeholder="Search" id="search">
							<input class="search-icon" type="image" src="{{ asset('assets/graphics/search-icon.svg') }}" alt="search" type="submit"/>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="header-bottom">
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
				<div class="languages">
					<ul>
						<li><a href="">Nl</a></li>
						<li><a href="">Fr</a></li>
						<li><a href="">En</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="intro-block">
		<div class="orbit" role="region" aria-label="Landoretti art" data-orbit>
			<div class="orbit-wrapper">
				<div class="orbit-controls">
					<button class="orbit-previous"><span class="show-for-sr">Previous slide</span><div class="arrow-left"></div></button>
					<button class="orbit-next"><span class="show-for-sr">Next slide</span><div class="arrow-right"></div></button>
				</div>
				<ul class="orbit-container">
					<li class="is-active orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="{{ asset('assets/graphics/wall-art.jpg') }}" alt="wall art">
						</figure>
					</li>
					<li class="orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="{{ asset('assets/graphics/camera.jpg') }}" alt="camera">
						</figure>
					</li>
					<li class="orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="{{ asset('assets/graphics/record-player.jpg') }}" alt="record player">
						</figure>
					</li>
				</ul>
			</div>

			<nav class="orbit-bullets">
				<button class="bullet is-active" data-slide="0"><span class="show-for-sr">art on the wall</span><span class="show-for-sr">Current slide</span></button>
				<button class="bullet" data-slide="1"><span class="show-for-sr">old camera</span></button>
				<button class="bullet" data-slide="2"><span class="show-for-sr">record player</span></button>
			</nav>

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
		</div>
	</div>


	-->
	

	
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

			var owl = $('.owl-carousel');
			owl.owlCarousel();
			// Go to the next item
			$('.owl-next').click(function() {
			    owl.trigger('next.owl.carousel');
			    console.log('next');

			})
			// Go to the previous item
			$('.owl-prev').click(function() {
			    // With optional speed parameter
			    // Parameters has to be in square bracket '[]'
			    owl.trigger('prev.owl.carousel', [300]);
			})


			$( ".owl-next").html('<button class="orbit-next"><span class="show-for-sr">Next slide</span><div class="arrow-right"></div></button>');
 			$( ".owl-prev").html('<button class="orbit-previous"><span class="show-for-sr">Previous slide</span><div class="arrow-left"></div></button>');
		});
	</script>
@stop








