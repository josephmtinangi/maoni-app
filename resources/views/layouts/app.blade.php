<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maoni App</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
</head>
<body>
    <div class="container">
    	@include('partials.navbar')
    </div>

    @yield('content')

</body>
</html>