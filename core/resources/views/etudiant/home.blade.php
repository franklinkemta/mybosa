@extends('etudiant.layout', ['title' => 'Accueil'])
<?php 
    $selection_formations =  Auth::user()->etudiant->selection_formations;
    $choix_formation = $selection_formations && !empty($selection_formations);
?>

@section('content')
<div class="container">
    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-md-8 mt-2">
            <div class="card">
            <div style="height: 200px; background-size:cover; background-position: center; background-image: url('https://www.scc.losrios.edu/scc/main/img/3-Academics/2-Programs-Majors/Study-Abroad/study-abroad-940x529.jpg')"></div>
                <div class="card-header">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h6> 
                        {{ __('Hello') }} <b>  <i class="fa fa-graduation-cap"></i> {{ Auth::user()->etudiant->prenom }} </b>
                        @if ($choix_formation)
                            Voici votre sélection de formation !
                        @else
                            Avez vous déjà choisi votre formation ?
                        @endif
                    </h6>
                </div>
                
                <div class="card-body">
                    @if ($choix_formation)
                    <table class="table" style="min-height:100px;">
                        <thead class="thead-light">
                            <tr>  
                                <th scope="col">Formation</th>
                                <th scope="col">Niveau</th>
                                <th scope="col">Etablissement</th>
                                <th scope="col">Ville</th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach($selection_formations as $formation)
                                <tr id="{{ $formation['id'] }}">
                                    <th scope="row">
                                        {{ $formation['intitule_filiere'] }}
                                    </th>
                                    <td>{{ $formation['diplome_niveau'] }} </td>
                                    <td>
                                        <btn class="btn btn-dark btn-sm" 
                                            data-toggle="tooltip" 
                                            data-html="true" 
                                            title="{{ $formation['etablissement_nom'] }}" 
                                            disabled>
                                            {{ $formation['etablissement_sigle'] }}
                                        </btn>
                                    </td>
                                    <td>{{ $formation['etablissement_ville'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <a href="{{ route('formulaireCandidatureEtudiant') }}" class="btn btn-light mb-3"> <i class="fa fa-edit"></i> Modifier ma sélection de formation </a>
                        <h6> <b> Prochaine étape > </b> 
                            @if (Auth::user()->etudiant->profil_complet)
                                Soumettre ma candidature 
                            @else
                                Completer mon dossier candidat
                            @endif
                        </h6>
                    @else
                        <p>Laissez vous guider parmi les meilleures choix de formations selon vos critères et soumettre votre candidature d'admission</p>
                        <a href="{{ route('formulaireCandidatureEtudiant') }}" class="btn btn-info my-2"> <i class="fa fa-edit"></i> Faire ma sélection de formation </a>
                    @endif
                </div>

                <div class="card-footer">
                    @if (!Auth::user()->etudiant->profil_complet)
                        <a href="{{ route('dossierCandidatEtudiant') }}" class="btn btn-outline-info my-2"> <i class="fa fa-folder-o"></i> <b>Editer mon dossier de candidat</b> </a>
                    @else
                        <a href="{{ route('inscriptionSelectionFormationsEtudiant') }}" class="btn _btn-success text-white my-2" style="background-color: #4FAC2E"> <i class="fa fa-share-square"></i> SOUMETTRE MA CANDIDATURE </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
