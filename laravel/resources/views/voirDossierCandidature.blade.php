<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Familly CSS -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/voirDossierCandidature.css') }}">
    <title>{{ config('app.name').' - Dossier de candidature #' }} {{ $candidature->id }} </title>
  </head>

  <body>


    <div class="container" style="height: 100% !important;">

        <div class="row justify-content-center " style="height: 100% !important;">
            <div class="col-10">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
                        <a class="navbar-brand col-lg-10 mr-0" href="{{ URL::previous() }}">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <ul class="navbar-nav col">
                            
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg text-white" href="" target="_blank"
                                    data-toggle="tooltip" 
                                    data-html="true" 
                                    title="Télécharger la photo">
                                    <i class="fa fa-user-circle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg text-white" href="" target="_blank""
                                    data-toggle="tooltip" 
                                    data-html="true" 
                                    title="Télécharger la pièce d'identité">
                                    <i class="fa fa-id-card"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg text-white" href="" target="_blank"
                                    data-toggle="tooltip" 
                                    data-html="true" 
                                    title="Télécharger les documents associés">
                                    <i class="fa fa-download"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-lg text-white" onclick="window.print()"
                                    data-toggle="tooltip" 
                                    data-html="true" 
                                    _title="Imprimer le dossier">
                                    <i class="fa fa-print"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    @include('partials.dossierCandidatureSections.section0')
                    <form action="#">
                        @include('partials.dossierCandidatureSections.section1')
                    </form>
                    
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Specific page js Imported Js -->
    <script src="{{ asset('js/voirDossierCandidature.js') }}"></script>
  </body>
</html>