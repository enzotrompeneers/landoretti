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
	                    	<button type="submit" class="button" name="submit" id="submit" value="submit">Admit Request</button>
						</div>

						<div class="medium-12 cell">
							<small class="request-message">Your request must be approved by the administrator. If your question has been approved, it will appear on our site.</small>
						</div>
					</div>
				</div>
			</form>
	    </div>
	</section>

	<section class="overview">
	    <div class="container">
	    	<div class="pagination">
				<ul class="pagination text-center" role="navigation" aria-label="Pagination">
					<li class="pagination-previous"><a href="#" aria-label="Previous page">&lt;</a></li>
					<li><a href="#" aria-label="Page 1">1</a></li>
					<li><a href="#" aria-label="Page 2">2</a></li>
					<li class="current"><span class="show-for-sr">You're on page</span> 3</li>
					<li><a href="#" aria-label="Page 4">4</a></li>
					<li class="pagination-next"><a href="#" aria-label="Next page">&gt;</a></li>
				</ul>
			</div>

	        <h3>Overview</h3>
	        <div class="articles">
	        	<div class="grid-container">
					<div class="grid-x">
			            <article class="cell small-12">
			                <div class="info cell cell small-9">
			                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
			                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			                    <p><span>Posted:</span> 5 July 2013</p>
			                </div>
			                <div class="btn-own cell small-3">
			                    <a href="#">I own this artwork<span></span></a>
			                </div>
			            </article>

			            <article class="cell small-12">
			                <div class="info col-sm-9">
			                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
			                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			                    <p><span>Posted:</span> 5 July 2013</p>
			                </div>
			                <div class="btn-own cell small-3">
			                    <a href="#">I own this artwork<span></span></a>
			                </div>
			            </article>

			            <article class="cell small-12">
			                <div class="info cell small-9">
			                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
			                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			                    <p><span>Posted:</span> 5 July 2013</p>
			                </div>
			                <div class="btn-own cell small-3">
			                    <a href="#">I own this artwork<span></span></a>
			                </div>
			            </article>

			            <article class="cell small-12">
			                <div class="info cell small-9">
			                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
			                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			                    <p><span>Posted:</span> 5 July 2013</p>
			                </div>
			                <div class="btn-own cell small-3">
			                    <a href="#">I own this artwork<span></span></a>
			                </div>
			            </article>

			            <article class="cell small-12">
			                <div class="info cell small-9">
			                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
			                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			                    <p><span>Posted:</span> 5 July 2013</p>
			                </div>
			                <div class="btn-own cell small-3">
			                    <a href="#">I own this artwork<span></span></a>
			                </div>
			            </article>

			            <article class="cell small-12">
			                <div class="info cell small-9">
			                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
			                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			                    <p><span>Posted:</span> 5 July 2013</p>
			                </div>
			                <div class="btn-own cell small-3">
			                    <a href="#">I own this artwork<span></span></a>
			                </div>
			            </article>

			            <article class="cell small-12">
			                <div class="info cell small-9">
			                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
			                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			                    <p><span>Posted:</span> 5 July 2013</p>
			                </div>
			                <div class="btn-own cell small-3">
			                    <a href="#">I own this artwork<span></span></a>
			                </div>
			            </article>

			            <article class="cell small-12">
			                <div class="info cell small-9">
			                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
			                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			                    <p><span>Posted:</span> 5 July 2013</p>
			                </div>
			                <div class="btn-own cell small-3">
			                    <a href="#">I own this artwork<span></span></a>
			                </div>
			            </article>
			        </div>
			    </div>
	        </div>

			<div class="pagination">
				<ul class="pagination text-center" role="navigation" aria-label="Pagination">
					<li class="pagination-previous"><a href="#" aria-label="Previous page">&lt;</a></li>
					<li><a href="#" aria-label="Page 1">1</a></li>
					<li><a href="#" aria-label="Page 2">2</a></li>
					<li class="current"><span class="show-for-sr">You're on page</span> 3</li>
					<li><a href="#" aria-label="Page 4">4</a></li>
					<li class="pagination-next"><a href="#" aria-label="Next page">&gt;</a></li>
				</ul>
			</div>
			<hr>
	    </div>
	</section>
@stop