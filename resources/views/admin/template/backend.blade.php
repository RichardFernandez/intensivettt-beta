<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="UTF-8">
		<title>@yield('title', 'INTENSIVETTT')</title>
		<link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{ asset('libs/chosen/chosen.css') }}">
		{{-- <link rel="stylesheet" href="/css/app.css"> --}}
		@yield('css')
	</head>
	<body>
	    @include('admin.template.partials.nav')

	    <section>
	        @include('flash::message')
	        @include('admin.template.partials.errors')
	    	@yield('content')
	    </section>
		
        <footer>
        	@include('admin.template.partials.footer')
        </footer>
        
        <script src="{{ asset('libs/jquery/jquery-3.2.1.js')}}"></script>
        <script src="{{asset('libs/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{ asset('libs/chosen/chosen.jquery.js') }}"></script>
		@yield('js')
	</body>
</html>