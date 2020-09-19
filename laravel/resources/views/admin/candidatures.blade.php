@extends('admin.layout', ['title' => 'Candidatures'])

@section('content')
<div class="container">
    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-header">
                    <b>Toutes les candidatures</b>
                </div>

                <div class="card-body" style="min-height:70vh;">
                    @if(!count($candidatures) == 0)
                        <table class="table table-bordered" >
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Etudiant</th>
                                    <th scope="col">Formations</th>
                                    <th scope="col">Niveau</th>
                                    <th scope="col">Etablissement</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">Etat</th>
                                    <th scope="col">Remarque</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"><i class="fa fa-edit"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($candidatures as $candidature)
                                    <tr id="{{ $candidature['id'] }}">
                                        <th scope="row">
                                            {{ $candidature['id'] }}
                                        </th>
                                        <td scope="row">
                                            {{ $candidature['prenom'] }} {{ $candidature['nom'] }}
                                        </td>
                                        <td scope="row">
                                            {{ $candidature['intitule_filiere'] }}
                                        </td>
                                        <td scope="row">{{ ucwords(str_replace('_', ' ', strtolower($candidature['diplome_niveau']))) }} </td>
                                        <td scope="row">
                                            <btn class="btn btn-dark btn-sm" 
                                                data-toggle="tooltip" 
                                                data-html="true" 
                                                title="{{ $candidature['etablissement_nom'] }}" 
                                                disabled>
                                                {{ $candidature['etablissement_sigle'] }}
                                            </btn>
                                        </td>
                                        <td scope="row">{{ ucfirst(strtolower($candidature['etablissement_ville'])) }}</td>
                                        <td scope="row">{{ ucfirst(strtolower($candidature['etat'])) }}</td>
                                        <td scope="row">{{ $candidature['remarque'] }}</td>
                                        <td scope="row">
                                            {{ $candidature['created_at'] }}
                                        </td>
                                        <td scope="row">
                                            <a href="{{ route('dossierCandidatureAdmin', $candidature['id']) }}" class="btn btn-sm btn-outline-dark"> <i class="fa fa-folder-open-o"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else 
                        <b class="text-info"> 
                            Aucune candidature à afficher 
                        </b>
                        <p class="my-3"></p>
                    @endif
                </div>
                <div class="card-footer">
                    
                    <h6>MyBosa : Partenaires d'accompagnement pour les études à l'étranger</h6>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
