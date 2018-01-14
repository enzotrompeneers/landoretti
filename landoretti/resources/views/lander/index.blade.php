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

<section class="footer">
    <div class="line"></div>

    <div class="container">
        <div class="grid-container">
        	<div class="grid-y medium-grid-frame">
  				<div class="cell shrink header medium-cell-block-container">
		        	<div class="grid-x">
		        		<div class="cell medium-3">
							<nav>
								<ul class="footer-menu vertical menu accordion-menu">
									<li>
										<a href="#"><h4>Help</h4></a>
										<ul class="vertical nested menu">
											<li><a href="#">Login</a></li>
											<li><a href="#">Register</a></li>
										</ul>
									</li>
								</ul>
			                </nav>

			                <nav>
			                	<ul class="footer-menu vertical menu accordion-menu">
									<li>
										<a href="#"><h4>Help</h4></a>
										<ul class="vertical nested menu">
											<li><a href="#">Terms of Service</a></li>
			                                <li><a href="#">Privacy Policy</a></li>
			                                <li><a href="index.php?page=faq">FAQ</a></li>
			                                <li><a href="#">Contact Us</a></li>
			                                <li><a href="#">About Us</a></li>
										</ul>
									</li>
								</ul>
			                </nav>

			                <nav>
			                	<ul class="footer-menu vertical menu accordion-menu">
									<li>
										<a href="#"><h4>Languages</h4></a>
										<ul class="vertical nested menu">
											<li><a href="">Nederlands</a></li>
			                                <li><a href="">Français</a></li>
			                                <li><a href="">English</a></li>
										</ul>
									</li>
								</ul>
			                </nav>
			            </div>

			            <div class="cell medium-3">
			            	<nav>
								<ul class="footer-menu vertical menu accordion-menu">
									<li>
										<a href="#"><h4>Style</h4></a>
										<ul class="vertical nested menu">
											<li><a href="#">Abstract</a></li>
			                                <li><a href="#">African American</a></li>
			                                <li><a href="#">Asian Contemporary</a></li>
			                                <li><a href="#">Conceptual</a></li>
			                                <li><a href="#">Contemporary</a></li>
			                                <li><a href="#">Emerging Artists</a></li>
			                                <li><a href="#">Figurative</a></li>
			                                <li><a href="#">Middle Eastern Contemporary</a></li>
			                                <li><a href="#">Minimalism</a></li>
			                                <li><a href="#">Modern</a></li>
			                                <li><a href="#">Pop</a></li>
			                                <li><a href="#">Urban</a></li>
			                                <li><a href="#">Vintage Photographs</a></li>
										</ul>
									</li>
								</ul>
			                </nav>

			                <nav>
								<ul class="footer-menu vertical menu accordion-menu">
									<li>
										<a href="#"><h4>Style</h4></a>
										<ul class="vertical nested menu">
											<li><a href="">Design</a></li>
			                                <li><a href="">Paintings and Works on Paper</a></li>
			                                <li><a href="">Photographs</a></li>
			                                <li><a href="">Prints and Multiples</a></li>
			                                <li><a href="">Sculpture</a></li>
										</ul>
									</li>
								</ul>
			                </nav>
			            </div>
			            <div class="cell medium-3">
			            	<nav>
								<ul class="footer-menu vertical menu accordion-menu">
									<li>
										<a href="#"><h4>Price</h4></a>
										<ul class="vertical nested menu">
											<li><a href="">Up to 5,000</a></li>
			                                <li><a href="">5,000–10,000</a></li>
			                                <li><a href="">10,000–25,000</a></li>
			                                <li><a href="">25,000–50,000</a></li>
			                                <li><a href="">50,000–100,000</a></li>
			                                <li><a href="">Above</a></li>
										</ul>
									</li>
								</ul>
			                </nav>

			                <nav>
								<ul class="footer-menu vertical menu accordion-menu">
									<li>
										<a href="#"><h4>ERA</h4></a>
										<ul class="vertical nested menu">
											<li><a href="">Pre-War</a></li>
			                                <li><a href="">1940s–1950s</a></li>
			                                <li><a href="">1960s–1980s</a></li>
			                                <li><a href="">1990s–Present</a></li>
										</ul>
									</li>
								</ul>
			                </nav>

			                <nav>
								<ul class="footer-menu vertical menu accordion-menu">
									<li>
										<a href="#"><h4>Endings</h4></a>
										<ul class="vertical nested menu">
											<li><a href="">Ending this Week</a></li>
			                                <li><a href="">Newly Listed</a></li>
			                                <li><a href="">Purchase Now</a></li>
			                                <li><a href="">1990s–Present</a></li>
										</ul>
									</li>
								</ul>
			                </nav>

			                <nav>
								<ul class="footer-menu vertical menu accordion-menu show-for-small-only">
									<li>
										<a href="#"><h4>Menu</h4></a>
										<ul class="vertical nested menu ">
											<li><a href="">Home</a></li>
											<li><a href="">Art</a></li>
											<li><a href="">Isearch</a></li>
											<li><a href="">Myaunctions</a></li>
											<li><a href="">Mybids</a></li>
											<li><a href="">Contact</a></li>
										</ul>
									</li>
								</ul>
			                </nav>
			            </div>

			            <div class="cell medium-3">
		                    <h4>FIND WHAT YOU NEED.</h4>
							<div class="search">
								<form action="#" role="search" method="get">
									<div class="input-group">
										<input class="searchbar" type="text" name="search" placeholder="Search">
										<input class="search-icon" type="image" src="{{ asset('assets/graphics/search-icon.svg') }}" alt="search" type="submit"/>
									</div>
								</form>
							</div>

			                <div class="contact">
			                    <h4>CONTACT</h4>
			                    <ul class="vertical menu">
			                        <li>Landoretti ART</li>
			                        <li>Straatnaam xxx</li>
			                        <li>xxxx, Oostende</li>
			                        <li>
			                        	<img class="icon" src="{{ asset('assets/graphics/phone-icon.png') }}" alt="phone">
			                        	+xx (0)x xxx xx xx
			                        </li>
			                        <li>
			                        	<img class="icon" src="{{ asset('assets/graphics/mail-icon.png') }}" alt="mail">
			                        	<a href="#">info@landorettiart.com</a>
			                        </li>
			                    </ul>
			                    <ul class="social-media">
			                        <li><a class="facebook" href="#facebook"></a></li>
			                        <li><a class="twitter" href="#twitter"></a></li>
			                        <li><a class="youtube" href="#youtube"></a></li>
			                        <li><a class="google" href="#google"></a></li>
			                    </ul>
			                </div>
			            </div>
		        	</div>
		        </div>
		    </div>
        </div>
    </div>
    <div class="container copy">
        <p>&copy; 2013 Studio6, Inc. All rights reserved.</p>
    </div>
</section>




<section class="footer-nav">
	<div class="header-bottom">

		<div class="container">

			<div class="navigation">
				<ul class="vertical menu show-for-small-only">
					<li><a href="">Home</a></li>
					<li><a href="">Art</a></li>
					<li><a href="">Isearch</a></li>
					<li><a href="">Myaunctions</a></li>
					<li><a href="">Mybids</a></li>
					<li><a href="">Contact</a></li>
				</ul>
				<ul class="show-for-medium">
					<li><a href="">Home</a></li>
					<li><a href="">Art</a></li>
					<li><a href="">Isearch</a></li>
					<li><a href="">Myaunctions</a></li>
					<li><a href="">Mybids</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>
			<div class="languages">
				<ul class="">
					<li><a href="">Nl</a></li>
					<li><a href="">Fr</a></li>
					<li><a href="">En</a></li>
				</ul>
			</div>

			<div class="container-logo">
				<div class="logo-image">
					<a href="{{ route('lander.index') }}"><img src="{{ asset('assets/graphics/landoretti-art-bottom.png') }}" alt="landoretti art"></a>
				</div>
			</div>

			
		</div>
	</div>
	<div class="line-bottom"></div>
</div>

@stop

@section('scripts')
	<script>
		$(document).ready(function(){
			// Login States
			$('#login').click(function(){
				$('.state-interaction').show();
				$('.state-not-logged-in').hide();
			});
			// End Login States

			// Carousel
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
 			// END Carousel

 			// Accordion Menu for small screen
			// Instantiate new accordion menu only if small screen
			if (Foundation.MediaQuery.is('small only')) {
				var elem = new Foundation.AccordionMenu($('.footer-menu'));
			}

			// React to screen size change
			$(window).on('changed.zf.mediaquery', function(event, newSize, oldSize){

			// only when we move from small to bigger
			if(newSize == "medium" && oldSize == "small") {
				$('.footer-menu').foundation('_destroy');
			}
			// only when we move back to small instantiate accordion menu
			if(newSize == "small" && oldSize == "medium") {
				var elem = new Foundation.AccordionMenu($('.footer-menu'));
			}
			// END Accordion Menu for smalls screen


			});
		});
	</script>
@stop








