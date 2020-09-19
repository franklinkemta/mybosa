@extends('layouts.app', ['title' => 'Register'])

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white _bg-success" style="background-color: #4FAC2E"> <strong> {{ __('Creer votre compte sur MyBosa') }} </strong></div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-secondary text-md-right"><i class="fa fa-arrow-right"></i> </label>
                            <div class="col-md-6">
                                <select class="form-control" name="typeCompte" id="typeCompte" required value="{{ old('typeCompte') }}">
                                    <option disabled value selected>Je crée un compte pour </option>
                                    @include('partials.selectTypeCompteOptions', ['selected' => old('typeCompte') ])
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" placeholder="Entrer votre Nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" placeholder="Entrer votre Prénom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="pays_residence" class="col-md-4 col-form-label text-md-right">{{ __('Pays de résidence') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="pays_residence" id="pays_residence" required value="{{ old('pays_residence') }}">
                                    <option disabled value selected>Sélectionner le pays</option>
                                    @include('partials.selectPaysOptions', ['selected' => old('pays_residence') ])
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="tel" placeholder="Numéro de téléphone (+### ##########)" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Entrer votre Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" pattern=".{6,}" title="6 Caractères aumoins" placeholder="Entrer votre mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" pattern=".{6,}" title="6 Caractères aumoins" placeholder="Entrer votre mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                    
                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button id="submit" type="submit" class="btn _btn-success text-white" style="background-color: #4FAC2E">
                                    <b> {{ __('Inscription') }}</b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
