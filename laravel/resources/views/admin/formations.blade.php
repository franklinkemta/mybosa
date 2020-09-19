@extends('admin.layout', ['title' => 'Formations'])

@section('content')
<div class="container">
    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-header">
                    <b>Tous les formations</b>
                </div>

                <div class="card-body" style="min-height:70vh;">
                    @if(!count($formations) == 0)
                        <table class="table table-bordered" >
                            <thead class="thead-light">
                                <tr> 
                                    <th scope="col">#</th>
                                    <th scope="col">Intitulé</th>
                                    <th scope="col">Niveau</th>
                                    <th scope="col">Etablissement</th>
                                    <th scope="col">Spécialité</th>
                                    <th scope="col">Durée</th>
                                    <th scope="col">Prix(dh)</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">Score</th>
                                    <th scope="col"><i class="fa fa-edit"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($formations as $formation)
                                    <tr id="{{ $formation['id'] }}">
                                        <td scope="row">{{ $formation['id'] }} </td>
                                        <th scope="row">{{ $formation['intitule_filiere'] }}</th>
                                        <td scope="row">{{ ucwords(str_replace('_', ' ', strtolower($formation['diplome_niveau']))) }}</td>
                                        <td scope="row">
                                            <btn class="btn btn-dark btn-sm" 
                                                data-toggle="tooltip" 
                                                data-html="true" 
                                                title="{{ $formation['etablissement_nom'] }}" 
                                                disabled>
                                                {{ $formation['etablissement_sigle'] }}
                                            </btn>
                                        </td>
                                        <td scope="row">{{ $formation['specialite'] ? $formation['specialite'] : '/'  }}</td>
                                        <td scope="row">{{ strtolower(str_replace('_', ' ', $formation['duree'])) }}</td>
                                        <td scope="row">{{ $formation['prix'] }}</td>
                                        <td scope="row">{{ ucfirst(strtolower($formation['etablissement_ville'])) }}</td>
                                        <td scope="row">{{ $formation['score'] }}</td>
                                        <td scope="row">
                                            <a style="display:none;" href="#" class="btn btn-sm btn-outline-dark"> <i class="fa fa-folder-open-o"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else 
                        <b class="text-info"> 
                            Aucune formation à afficher 
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
