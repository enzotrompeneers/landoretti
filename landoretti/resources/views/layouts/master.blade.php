<!DOCTYPE html>
<html>
<head>
    @include('includes.header')
</head>

<body>
    @yield('content')
	@include('includes.footer')
	@yield('scripts')
</body>
</html>