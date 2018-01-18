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