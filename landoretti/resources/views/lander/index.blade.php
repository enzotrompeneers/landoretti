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
						<li><img class="menu-icon"src="{{ asset('assets/graphics/menu-icon.svg') }}" alt="user">Watchlist</a></li>
						<li><img class="user-icon"src="{{ asset('assets/graphics/user-icon.svg') }}" alt="user"><a href="">Profile</a></li>
						<li><a href="">Logout</a></li>
					</div>
				@else
					<div class="state-not-logged-in">
						<li><a href="">Register</a></li>
						<li><a href="">Login</a></li>
						<!-- # placeholder search kleur nog veranderen!!

						<div class="state-interaction">
							<form action="#login" method="post">
								<input type="text" name="user" placeholder="User">
								<input type="password" name="password" placeholder="Password">
								<input type="submit" value="Submit">
							</form>
						</div>
					-->
					</div>
				@endif
			</ul>

			<div class="search">
				<form action="#search" role="search" method="get">
					<div class="input-group">
						<input class="searchbar" type="text" name="search" placeholder="Search" id="search">
						<img class="search-icon"src="{{ asset('assets/graphics/search-icon.svg') }}" alt="search" type="submit">
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
