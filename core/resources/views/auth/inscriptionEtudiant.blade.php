<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>My Bosa | inscription</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body class="incription_body">
<nav class="type_compte_nav">
    <a href="{{ url('/') }}"><img src="images/logoMobile.png" alt="Logo image" class="logoMobile" title="Logo"></a>
     <a href="{{ url('/') }}"><img src="images/logo_.png" alt="Logo image" class="logo" title="Logo"></a>
     <p class="connexionPc"><span  class="connexion connect_mb">Connexion</span>
     <div class="elipse"><p class="connexionXs connect_mb"> Connexion</p></div>
    
</nav>

<div class="form_container">
    <form action="{{ route('register') }}" class="etudiant"  method="POST">
        @csrf
        <input type="hidden" name="typeCompte" value="ETUDIANT">
        <div class="step_1_form">
        <h3>INSCRIPTION ETUDIANT</h3>
        <h3>Informations personnelles</h3>
        <br>
        @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('prenom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('pays_residence')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('telephone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
                <input class="form-control" type="text" id="nom" name="nom" placeholder="Votre Nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus><br>
                
                <input class="form-control" type="text" id="prenom" name="prenom" placeholder="Votre Prénom" value="{{ old('prenom') }}" required autocomplete="prenom" > <br>
               
                <select class="form-control" id="pays_residence" name="pays_residence" required value="{{ old('pays_residence') }}">
                    @include('partials.selectPaysOptions')
                </select><br>
                
                <input class="form-control" type="text" id="telephone"  name="telephone" placeholder="Numéro de téléphone (+### ##########)" value="{{ old('telephone') }}" required autocomplete="telephone">
                
            <button id="form_suivant">Suivant</button>
        </div>
        <div class="step_2_form">
        <h3>Infos de connexion</h3>
            
                <input type="email" name="email" placeholder="Entrer votre Email" value="{{ old('email') }}" required autocomplete="email"><br>
                
                <input type="password" name="password" placeholder="Entrer votre mot de passe" name="password" required autocomplete="new-password"><br>
                
                <input id="password-confirm" type="password"  name="password_confirmation" placeholder="Confirmer votre mot de passe"  required autocomplete="new-password" required><br>
            <button type="submit" value="submit" id="submit" name="submit">S'inscrire</button>
        </div>
    
    </form>

</div>

    @include('layouts.footer')  
    @include('auth.connexion')

</body>
</html>