<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>{{ config('app.name').' - Dossier de candidature #1' }}</title>
  </head>

  <body>


    <div class="container-fluid" style="padding:0">

        <nav class="navbar navbar-dark bg-dark " >
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ URL::previous() }}">
                <i class="fa fa-th-large"></i>
            </a>
            <ul class="navbar-nav px-3">
                <li class="nav-item">
                    <a class="nav-link btn btn-lg" onclick="window.print()">
                        <i class="fa fa-print"></i>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="row justify-content-center text-center">
            @include('admin.dossierCandidatParts.entete')
        </div>

        <div class="row justify-content-center text-left pt-5">
            @include('admin.dossierCandidatParts.profile')
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Specific page js Imported Js -->
    <script src="{{ asset('js/admin.js') }}"></script>
  </body>
</html>