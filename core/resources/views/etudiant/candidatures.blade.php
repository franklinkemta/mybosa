@extends('etudiant.layout', ['title' => 'Mes candidatures'])

@section('content')
<div class="container">
    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-md-10 mt-2">
            <div class="card ">
                <div class="card-header">
                    <b>Mes candidatures</b>
                </div>

                <div class="card-body">
                    @if(!count($candidatures) == 0)
                        <table class="table" style="min-height:100px;">
                            <thead class="thead-light">
                                <tr>  
                                    <th scope="col">Formation</th>
                                    <th scope="col">Niveau</th>
                                    <th scope="col">Etablissement</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">Suivi</th>
                                    <th scope="col">Remarque</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach($candidatures as $candidature)
                                    <tr id="{{ $candidature['id'] }}">
                                        <th scope="row">
                                            {{ $candidature['intitule_filiere'] }}
                                        </th>
                                        <td>{{ ucwords(str_replace('_', ' ', strtolower($candidature['diplome_niveau']))) }} </td>
                                        <td>
                                            <btn class="btn btn-dark btn-sm" 
                                                data-toggle="tooltip" 
                                                data-html="true" 
                                                title="{{ $candidature['etablissement_nom'] }}" 
                                                disabled>
                                                {{ $candidature['etablissement_sigle'] }}
                                            </btn>
                                        </td>
                                        <td>{{ ucfirst(strtolower($candidature['etablissement_ville'])) }}</td>
                                        <td>{{ ucfirst(strtolower($candidature['etat'])) }}</td>
                                        <td>{{ $candidature['remarque'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else 
                        <span>Aucune candidature à afficher</span>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
