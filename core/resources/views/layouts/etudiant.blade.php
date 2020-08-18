<?php
header("Access-Control-Allow-Origin: *");?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--<link rel="stylesheet" type="text/css" href="css/reset.css">-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <title>{{ config('app.name', 'MyBosa') }}</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>

</head>
<body>

    <header>
        <div class="navigation">
            <nav>
                <div class="elipse"><img src="images/menu.png" alt="Menu" class="hamMenu"><p class="menutext">Menu</p></div>
                <div class="menuMobile">
                    <span class="closeMenu">X</span>
                    <ul class="menuList">
                        <li><a href="#">Ma candidature</a></li>
                        <li><a href="#">Mon compte</a></li>
                    </ul>
                
                    <div class="elipseXs"><p class="inscriptionXs"><a href="{{ route('typeCompte') }}" >Inscription</a></p></div>
                </div>
                <a href="{{ url('/') }}"><img src="images/logo_.png" alt="Logo image" class="logo" title="Logo"></a>
                <a href="{{ url('/') }}" class="logoMobileLink"><img src="images/logoMobile.png" alt="Logo image" class="logoMobile" title="Logo"></a>
                
                
                <ul class="menuPc">
                    <li class="ets-menu"><a href="#">Ma candidature</a></li>
                    <li class="co-menu"><a href="#">Mon compte</a></li>
                </ul>  
                
                <p class="connexionPc"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span  class="connexion connect_mb">Déconnexion</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </p>
                
            </nav>
        </div>



        <div class="sub_page_info">
            <p class="main">BIENVENUE</p>
            <p class="sec">Vous n'avez pas encore choisi votre formation?</p>
            <a href="{{ route('formulaireCandidatureEtudiant') }}" class="action"> FORMULAIRE DE CANDIDATURE</a>
        </div>
    </header>

    <div class="form_container">
        @yield('content')
    </div>


<footer>
    <div class="redirection">
        <div class="copyrights">
            <div class="rights">
                <p><a href="#">Mentions légales </a> <a href="">CGU</a></p> 
                <p> &copy 2020 MyBosa tous droits réservés</p>
            </div>
            
        </div>
    </div>
</footer>

    
</body>
</html>
