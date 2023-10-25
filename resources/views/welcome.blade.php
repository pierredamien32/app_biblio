<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('dist/cssfont/all.css')}}">
    <link rel="stylesheet" href="{{asset('dist/cssfont/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/cssfont/solid.css')}}">
    <link rel="stylesheet" href="{{asset('dist/cssfont/solid.min.css')}}">

    {{-- <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-reboot.min.css') }}"> --}}
    <title>Gestion de bibliothèque</title>
</head>

<body>

   <div class="container mx-auto" >
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <a class="navbar-brand" href="#">Gestion de bibliothèque</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('livre.index') }}">Livre</a>
                <a class="nav-link" href="{{ route('emprunt.index') }}">Emprunt</a>
                {{-- <a class="nav-link" href="{{ route('sejour.index') }}">Sejour</a> --}}
            </div>
        </div>
    </nav>
</div>

    @yield('content')

    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
