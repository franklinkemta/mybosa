@extends('admin.layout', ['title' => 'Diplômes'])

@section('content')
<div class="container">
    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-12 mt-2">
            <div class="card ">
                <div class="card-header">
                    <b>Tous les diplômes</b>
                </div>

                <div class="card-body" style="min-height:70vh;">
                    @if(!count($diplomes) == 0)
                        <table class="table table-bordered" >
                            <thead class="thead-light">
                                <tr>  
                                    <th scope="col">#</th>
                                    <th scope="col">Intitulé</th>
                                    <th scope="col">Domaine</th>
                                    <th scope="col">Niveau</th>
                                    <th scope="col"><i class="fa fa-edit"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diplomes as $diplome)
                                    <tr id="{{ $diplome['id'] }}">
                                        <td scope="row">{{ $diplome['id'] }} </td>
                                        <th scope="row">
                                            {{ $diplome['intitule'] }}
                                        </th>
                                        <td scope="row">{{ ucwords(str_replace('_', ' ', strtolower($diplome['domaine']))) }} </td>
                                        <td scope="row">{{ ucwords(str_replace('_', ' ', strtolower($diplome['niveau']))) }}</td>
                                        
                                        <td scope="row">
                                            <a style="display:none;" href="#" class="btn btn-sm btn-outline-dark" > <i class="fa fa-eye"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else 
                        <b class="text-info"> 
                            Aucun diplôme à afficher 
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
