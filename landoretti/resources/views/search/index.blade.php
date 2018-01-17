@extends('layouts.master')

@section('content')
	@include('includes.navigation')
	@include('includes.spotlight')
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








