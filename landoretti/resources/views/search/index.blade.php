@extends('layouts.master')

@section('content')
	@include('includes.navigation')
	@include('includes.spotlight')

	<section class="request">
	    <div class="container">
	        <nav aria-label="You are here:" role="navigation">
				<ul class="breadcrumbs">
					<li><a href="#">Home</a></li>
					<li><span class="show-for-sr">Current: </span> I Search</li>
				</ul>
			</nav>

	        <h1>I search</h1>
	        <h3>Add a request</h3>

			<form method="POST" action="{{ route('search.request') }}" data-abide novalidate>
			{{ csrf_field() }}

				<div data-abide-error class="alert callout" style="display: none;">
					<ul class=error-list>
						<li class="form-error" data-form-error-for="what">Please fill in what you are looking for</li>
						<li class="form-error" data-form-error-for="artist">Please fill in an artist</li>
						<li class="form-error" data-form-error-for="info">Please fill in some information about it</li>
					</ul>
				</div>

				<div class="grid-container">
					<div class="grid-x ">
						<div class="medium-6 cell gutter">
							<label for="what">What are you looking for?</label>
	                    	<input type="text" name="what" id="what" placeholder="Mona Lisa" required>

						</div>

						<div class="medium-6 cell">
							<label for="artist">Artist</label>
	                    	<input type="text" name="artist" id="artist" placeholder="Leonardo Da Vinci" required>
						</div>

						<div class="medium-9 cell gutter">
							<label for="info">Information about the artwork</label>
	                    	<textarea type="text" name="info" id="info" placeholder="Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore" required></textarea>
						</div>

						<div class="medium-3 cell">
	                    	<button type="submit" class="button submit" name="submit" id="submit" value="submit">Admit Request</button>
						</div>

						<div class="medium-12 cell">
							<small id="passwordHelpBlock" class="request-message">Your request must be approved by the administrator. If your question has been approved, it will appear on our site.</small>
						</div>
					</div>
				</div>
			</form>
	    </div>
	</section>

	<section class="overview">

	</section>


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
	});
</script>
@stop








