<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title', 'INTENSIVETTT, Entrenamientos en linea')</title>
		<link rel="stylesheet" href="/css/normalize.css">
		<link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap-flexmin.css') }}">
		<link rel="stylesheet" href="/css/intensivettt.css">
		@yield('css')
	</head>
	<body>

	    @include('layouts.front-partials.nav')

	    <div class="container-fluid"> 
		@yield('content')
       </div>

        @include('layouts.front-partials.subfooter')

		<footer>
        	@include('admin.template.partials.footer')
        </footer>
        
        <script src="{{ asset('libs/jquery/jquery-3.2.1.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('libs/chosen/chosen.jquery.js') }}"></script>
		@yield('js')
	</body>
</html>