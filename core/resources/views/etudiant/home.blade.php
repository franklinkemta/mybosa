@extends('etudiant.layout', ['title' => 'Accueil'])


@section('content')
<div class="container">
    <div class="row justify-content-center text-center" style="height: 100% !important">
        
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Connecté en tant que') }} 
                        
                        <b> {{ Auth::user()->email }}</b>
                    
                </div>

                <div class="card-body">
                    <p>{{ __('Bienvenue sur votre dashboard !') }} <br></p>
                    <h6> <b>Avez vous déjà choisi votre formation ? </b> <i class="fa fa-graduation-cap"></i> </h6> 
                </div>

                <div class="card-footer">
                    
                    <a href="{{ route('formulaireCandidatureEtudiant') }}" class="btn btn-success btn-lg my-2"> <i class="fa fa-search"></i> Choisir ma formation</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
