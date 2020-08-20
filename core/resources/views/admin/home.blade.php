@extends('admin.layout', ['title' => 'MyBosa Espace réservé'])


@section('content')
<div class="container">

    <div class="row mt-2 text-center">
        <div class="col-sm-6">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title"><strong>#0</strong> Candidatures  </h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title"><strong>#1</strong> Total candidatures </h5>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-md-12 mt-2 ">
            <div class="card ">
                <div class="card-header ">
                    <b>{{ __('Nouvelles candidatures') }}</b> 
                    
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-light">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Pays</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>27-01-12 15:00 PM</td>
                                    <td>CAMEROUN</td>
                                    <td>ulricht@gmail.com</td>
                                    <td>
                                        <a href="{{ route('dossierCandidatureAdmin', 1) }}" class="btn btn-sm btn-outline-dark"> <i class="fa fa-folder-open-o"></i> </a>
                                        <a href="#" class="btn btn-sm btn-outline-dark"> <i class="fa fa-archive"></i> </a>
                                    </td>
                                </tr>
                                
                            
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="card-footer">
                <a href="#" class="btn btn-light btn-sm my-2"> <i class="fa fa-archive"></i> Afficher toute les archivées</a>
                   
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
