@extends('admin.layout', ['title' => 'Etablissements'])

@section('content')
<div class="container">
    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-header">
                    <b>Tous les établissements</b>
                </div>

                <div class="card-body" style="min-height:70vh;">
                    @if(!count($etablissements) == 0)
                        <table class="table table-bordered" >
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sigle</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Pays</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Site web</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Contact Email</th>
                                    <th scope="col"><i class="fa fa-edit"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($etablissements as $etablissement)
                                    <tr id="{{ $etablissement['id'] }}">
                                        <td scope="row">{{ $etablissement['id'] }} </td>
                                        <th scope="row">{{ $etablissement['sigle'] }}</th>
                                        <td scope="row">{{ $etablissement['nom'] }}</td>
                                        <td scope="row">{{ $etablissement['pays'] }}</td>
                                        <td scope="row">{{ ucwords(strtolower($etablissement['ville'])) }}</td>
                                        <td scope="row">{{ $etablissement['telephone'] }}</td>
                                        <td scope="row">{{ $etablissement['siteweb'] }}</td>
                                        <td scope="row">{{ $etablissement['adresse'] }}</td>
                                        <td scope="row">{{ $etablissement['email_contact'] }}</td>
                                        <td scope="row">
                                            <a style="display:none;" href="#" class="btn btn-sm btn-outline-dark"> <i class="fa fa-folder-open-o"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else 
                        <b class="text-info"> 
                            Aucun établissement à afficher 
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
