<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ Config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
</head>
<body>
    <div class="container">
    	@include('partials.navbar')
    </div>

    @yield('header')

    @include('partials.notification')       

    <div class="main">
        @yield('content')
    </div>
    
    @include('partials.footer')
		
	<script src="{{ url('/js/app.js') }}"></script>
</body>
</html>