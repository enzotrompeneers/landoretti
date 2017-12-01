@extends('layouts.master')

@section('content')
	<div class="line-top"></div>
	<div class="header">
		<div class="header-logo-container">
			<div class="header-logo">
				<a href="{{ route('lander.index') }}"><img src="{{ asset('assets/graphics/landoretti-art.png') }}" alt="landoretti art"></a>
			</div>
			
		</div>
		
		<div class="header-personal-options">
			<ul>
				<li><i class="fa fa-bars" aria-hidden="true"></i><a href="">Watchlist</a></li>
				<li><a href="">Profile</a></li>
				<li><a href="">Logout</a></li>
			</ul>
		</div>
	</div>
@stop