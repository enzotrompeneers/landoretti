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
