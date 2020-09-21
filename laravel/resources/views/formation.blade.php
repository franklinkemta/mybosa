<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>My Bosa | Formation</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="formationHeader">
        @include('layouts.header')
        <div class="sub_page_info">
            <p class="main">Connectez aux formations qui vous garantissent un avenir plus confiant.</p>
            <a href="{{ route('register') }}" class="action">Créez un compte gratuitement</a>
            <p class="sec"> Le meilleur moteur de recherche pour trouver un établissement supérieur, parcourez en une recherche les meilleurs écoles et trouver celle qui match le mieux avec vous!  </p>
        </div>
    </div>
    <div class="explore">
        <div class="content">
            
             <h3>Faites le meilleur choix</h3>
            
            <ol>
                <li>J’explore : Choisissez les établissements qui vous intéressent</li>
                <li>Je postule : Remplissez un seul dossier pour tous vos choix.</li>
                <li>Je m’inscris : Vous êtes admis, cool. Inscrivez vous!</li>
            </ol>
        </div>
        
        <div class="content_right" style>
            <img class="content_right_img" src="images/tablette.png" alt="img_tablette">
        </div>
    </div>
    <div class="choix">
         <div class="choix_img2">
            <img class="choix_img_left2" src="images/main.png" alt="img_tablette">
        </div>
        
        <div class="text_main2">
            <h3>Faites le meilleur choix</h3>
            <p>La valeur du diplôme décroît alors que celle du coût d’un diplôme ne fait qu’augmenter. C’est pourquoi bien choisir sa filière, le modèle de formation (faculté ou grande école ... / public ou privé), format de cours, l’établissement, la ville et bien d’autres sont des critères d’une très grande importance. </p>    
            <a href="{{ route('register') }}" >Créez un compte gratuitement</a>
        </div>
    </div>

    </div>

    <div class="services">
        <div class="paragraphs">
            <div>
                <h3>Fini le stress de l’attente</h3>
                <p>Fini le stress de l’attente des résultats, envoyez des dizaines de candidature en remplissant un seul formulaire et suivez vos dossiers en temps réel grâce à mybosa.</p>
            </div>  
            <div>
                <h3>Multipliez vos possibilités</h3>
                <p>Multipliez vos possibilités en étudiants à l’étranger, le coût de vie dans plusieurs pays est de plus en plus identique pour de meilleur avantages sociaux, postuler pour des études à l’étranger.</p>    
            </div>
    
            <div>
                <h3>Etudiez à moindre coût </h3>
                <p>Vous recherchez une bourse et vous n’arrivez l’obtenir; c’est pas grave! Sachez qu’il vous est possible d’étudier presque comme un boursier: pas de frais de scolarité, hébergement à un prix accessible... l’information c’est le pouvoir.</p>
            </div>
        </div>
    </div>

    <div class="inscription_container  last_container">
        <h3>Le pont vers un avenir plus certain! </h3>
        <a href="{{ route('register') }}" class="ensavoir">Commencez gratuitement</a>
    </div>

    @include('layouts.footer')
    
</body>
</html>