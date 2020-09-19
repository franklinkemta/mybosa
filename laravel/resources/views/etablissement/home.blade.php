@extends('etablissement.layout', ['title' => 'Accueil'])
<?php 
    // $etablissement = Auth::user()->etablissement;
?>

@section('content')
<div class="container">

    <div class="row px-5 text-center">

        <div class="col-4 mt-4">
            <div class="card text-center">
                <div class="card-header bg-success text-white">
                    <b># Candidatures</b>
                </div>
                <div class="card-body">
                    <h1 class="card-title"><strong>{{ $statistiques['candidatures'] }}</strong></h1>
                </div>
                <div class="card-footer text-muted">
                   <a href="{{ route('candidaturesEtablissement') }}" class="card-link btn btn-sm btn-outline-secondary">Voir toutes les Candidatures</a>
                </div>
            </div>
        </div>

        <div class="col-4 mt-4">
            <div class="card text-center">
                <div class="card-header bg-info text-white">
                    <b># Etudiants</b>
                </div>
                <div class="card-body">
                    <h1 class="card-title"><strong>{{ $statistiques['etudiants'] }}</strong></h1>
                </div>
                <div class="card-footer text-muted">
                   <a href="{{ route('etudiantsEtablissement') }}" class="card-link btn btn-sm btn-outline-secondary">Voir tous les Etudiants</a>
                </div>
            </div>
        </div>


        <div class="col-4 mt-4">
            <div class="card text-center">
                <div class="card-header bg-secondary text-white">
                    <b># Formations offertes</b>
                </div>
                <div class="card-body">
                    <h1 class="card-title"><strong>{{ $statistiques['formations'] }}</strong></h1>
                </div>
                <div class="card-footer text-muted">
                   <a href="{{ route('formationsEtablissement') }}" class="card-link btn btn-sm btn-outline-secondary">Voir tous les Formations offertes</a>
                </div>
            </div>
        </div>
        
    </div>

</div>
@endsection
