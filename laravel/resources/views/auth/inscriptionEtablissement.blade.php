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

    <form action="saveData.php" class="etablissement" method="post">
        
        <div class="step_1_ets">
        <h3>INSCRIPTION ETABLISSEMENT</h3>
        <h3>Répresentant de l'établissement</h3>
        <br>
            <input type="text" name="nom" placeholder="Entrer votre Nom" required><br>
            <input type="text" name="prenom" placeholder="Entrer votre prénom" required><br>
            <input type="type" name="poste" placeholder="Entrer votre Poste" required><br>
            <input type="email" name="mail" placeholder="Entrer votre Email" required><br>
            <input type="password" name="mpass" placeholder="Entrer votre mot de passe" required><br>
            <input type="password" name="conf_mpass" placeholder="Confirmer votre mot de passe" required><br>
            <button type="submit" value="submit" id="form_suivant" class="cont_ets">Continuer</button>
        </div>
        <div class="step__ets">
        <h3>Infos de l'établissement</h3>
            <input type="text" name="nom_ets" placeholder="Nom de l'établissement" required><br>
            <input type="text" name="site_web" placeholder="L'url de votre site" required><br>
            <input type="type" name="ville" placeholder="La ville de l'établissment" required><br>
            <input type="type" name="pays" placeholder="Le pays de l'établissment" required><br>
            <input type="email" name="mail_ets" placeholder="Email de l'établissement" required><br>
            <!-- Liste des établissement -->
            <button type="submit" value="submit" id="submit" name="submit">S'enregistrer</button>
        </div>
    </form>

</div>

    
    @include('layouts.footer')  
    @include('auth.connexion')

</body>
</html>