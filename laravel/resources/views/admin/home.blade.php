@extends('admin.layout', ['title' => 'MyBosa Administration'])
<?php 
    // $admin = Auth::user()->admin;
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
                   <a href="{{ route('candidaturesAdmin') }}" class="card-link btn btn-sm btn-outline-secondary">Voir toutes les Candidatures</a>
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
                   <a href="{{ route('etudiantsAdmin') }}" class="card-link btn btn-sm btn-outline-secondary">Voir tous les Etudiants</a>
                </div>
            </div>
        </div>

        <div class="col-4 mt-4">
            <div class="card text-center">
                <div class="card-header bg-dark text-white">
                    <b># Etablissements</b>
                </div>
                <div class="card-body">
                    <h1 class="card-title"><strong>{{ $statistiques['etablissements'] }}</strong></h1>
                </div>
                <div class="card-footer text-muted">
                   <a href="{{ route('etablissementsAdmin') }}" class="card-link btn btn-sm btn-outline-secondary">Voir tous les Etablissements</a>
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
                   <a href="{{ route('formationsAdmin') }}" class="card-link btn btn-sm btn-outline-secondary">Voir tous les Formations offertes</a>
                </div>
            </div>
        </div>

        <div class="col-4 mt-4">
            <div class="card text-center">
                <div class="card-header bg-secondary text-white">
                    <b># Diplômes</b>
                </div>
                <div class="card-body">
                    <h1 class="card-title"><strong>{{ $statistiques['diplomes'] }}</strong></h1>
                </div>
                <div class="card-footer text-muted">
                   <a href="{{ route('diplomesAdmin') }}" class="card-link btn btn-sm btn-outline-secondary">Voir tous les Diplômes</a>
                </div>
            </div>
        </div>
        
    </div>

</div>
@endsection
