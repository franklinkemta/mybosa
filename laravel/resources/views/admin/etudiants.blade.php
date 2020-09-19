@extends('admin.layout', ['title' => 'Etudiants'])

@section('content')
<div class="container">
    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-header">
                    <b>Tous les étudiants</b>
                </div>

                <div class="card-body" style="min-height:70vh;">
                    @if(!count($etudiants) == 0)
                        <table class="table table-bordered" >
                            <thead class="thead-light">
                                <tr>  
                                    <th scope="col"># Matricule</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Nationalité</th>
                                    <th scope="col">Pays de résidence</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col"><i class="fa fa-edit"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($etudiants as $etudiant)
                                    <tr id="{{ $etudiant['id'] }}">
                                        <td scope="row">{{ $etudiant['id'] }} </td>
                                        <th scope="row">
                                            {{ $etudiant['prenom'] }} {{ $etudiant['nom'] }}
                                        </th>
                                        <td scope="row">{{ ucwords(strtolower($etudiant['nationalite'])) }} </td>
                                        <td scope="row">{{ $etudiant['pays_residence'] }}</td>
                                        <td scope="row">{{ $etudiant['telephone'] }}</td>
                                        
                                        <td scope="row">
                                            <a style="display:none;" href="#" class="btn btn-sm btn-outline-dark" > <i class="fa fa-eye"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else 
                        <b class="text-info"> 
                            Aucun étudiant à afficher 
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
