<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://ucarecdn.com/d40cad3c-b529-4cdd-aa59-4340e6d5e7d3/Favicon.png" type="image/x-icon">
    <meta property="og:site_name" content="superfiesta.ch">
    <link rel="canonical" href="https://www.superfiesta.ch">
    <meta name="description" content="Willkommen bei Super Fiesta, den besten Ort, um lateinamerikanische Produkte zu finden | Bienvenidos a Super Fiesta, el mejor sitio donde encontrarás los productos de tu tierrita.">
    <meta property="og:image" content="article">
    <meta property="og:image" content="https://ucarecdn.com/d40cad3c-b529-4cdd-aa59-4340e6d5e7d3/Favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="{{ asset('css/botones.css') }}" rel="stylesheet">
    <link href="{{ asset('css/thumbnail.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adicionales.css') }}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        @include('layouts.partials._navigation')
        @include('layouts.partials.alerts')
        @yield('content')
        @include('layouts.partials._footer')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
    @yield('scripts')
</body>
</html>
