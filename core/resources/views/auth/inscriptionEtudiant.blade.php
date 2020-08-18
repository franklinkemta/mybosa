<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>

    <title>My Bosa | inscription</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    
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
        @error('pays')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('pays')
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
                <input type="text" name="nom" placeholder="Entrer votre Nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus><br>
                
                <input type="text" name="prenom" placeholder="Entrer votre Prénom" value="{{ old('prenom') }}" required autocomplete="prenom" > <br>
               
                <input type="text" name="pays" placeholder="Entrer le nom votre Pays" value="{{ old('pays') }}" required autocomplete="pays"><br>
                
                <input type="text" id="phone" name="phone" placeholder="Entrer votre numéro de téléphone" value="{{ old('phone') }}" required autocomplete="phone">
                
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