<!DOCTYPE html>
{{--  lang="{{ str_replace('_', '-', app()->getLocale()) }}" --}}
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Freelance</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">

        
  
        <!-- Cdn Js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Shorcurt -->
        <link rel="shortcut icon" href="{{url('img/free.png')}}">

    </head>
    <body>

    @include('inc.menu')

    @yield('content')

    @include('inc.footer')
        
    </body>
    </html>