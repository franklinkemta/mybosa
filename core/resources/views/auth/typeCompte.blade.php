<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>My Bosa | Type de Compte</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body class="body_type_compte">

<nav class="type_compte_nav">
    <a href="{{ url('/') }}"><img src="images/logoMobile.png" alt="Logo image" class="logoMobile" title="Logo"></a>
     <a href="{{ url('/') }}"><img src="images/logo_.png" alt="Logo image" class="logo" title="Logo"></a>
     <p class="connexionPc"><span  class="connexion connect_mb">Connexion</span>
     <div class="elipse"><p class="connexionXs connect_mb"> Connexion</p></div>
    
</nav>

        <div class="type_compte">
        <h1>Créez votre compte en quelques secondes</h1>
            <p>Choississez votre profile</p>
            <form action="{{ route('inscription') }}" method="GET">
                <label class="container_radio">Etudiant
                        <input type="radio" checked="checked" name="typeCompte" value="etudiant" required>
                        <span class="checkmark"></span>
                </label>

                <label class="container_radio">Conseiller
                    <input type="radio" name="typeCompte" value="conseiller" required>
                    <span class="checkmark"></span>
                </label>

                <label class="container_radio">Etablissement
                    <input type="radio" name="typeCompte" value="etablissement" required >
                    <span class="checkmark"></span>
                </label>
                <button type="submit" name="continuer" class="continuer">Continuer</button>    
            </form>
        </div>
   
    @include('layouts.footer')  
    @include('auth.connexion')
</body>
</html>