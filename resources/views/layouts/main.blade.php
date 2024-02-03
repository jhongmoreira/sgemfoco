<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="cdn/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="cdn/fa/css/fontawesome.min.css">
        <link rel="stylesheet" href="cdn/fa/css/brands.min.css">
        <link rel="stylesheet" href="cdn/fa/css/solid.min.css">
    </head>
    <body>
        @yield('content')
    </body>
</html>
