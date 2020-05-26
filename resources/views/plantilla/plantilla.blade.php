<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>@yield('titulo','plantilla')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"  crossorigin="anonymous">
   

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous" ></script>
</head>

<body>
    @yield('contenido')
</body>

</html>
