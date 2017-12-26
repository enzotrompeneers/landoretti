@extends('layouts.master')

@section('content')
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

	<div class="intro-block">
		<div class="orbit" role="region" aria-label="Foundation Yeti's" data-orbit>
			<div class="orbit-wrapper">
				<div class="orbit-controls">
					<button class="orbit-previous"><span class="show-for-sr">Vorige Slide</span>&#9664;&#xFE0E;</button>
					<button class="orbit-next"><span class="show-for-sr">Volgende Slide</span>&#9654;&#xFE0E;</button>
				</div>
				<ul class="orbit-container">
					<li class="is-active orbit-slide">
						<figure class="orbit-figure">
						<img class="orbit-image" src="{{ asset('assets/graphics/art.jpg') }}" alt="art">
						
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
				<button class="is-active" data-slide="0"><span class="show-for-sr">Foundation yeti</span><span class="show-for-sr">Huidige slide</span></button>
				<button data-slide="1"><span class="show-for-sr">Foundation yeti</span></button>
				<button data-slide="2"><span class="show-for-sr">Foundation yeti</span></button>
			</nav>
		</div>
		
	</div>
	

	
@stop

@section('scripts')
	<script>
		$(document).ready(function(){
			//$('.state-interaction').hide();
			//$('.state-not-loggin-in').show();
			$('#login').click(function(){
				$('.state-interaction').show();
				$('.state-not-logged-in').hide();
			});
		});
	</script>
@stop
