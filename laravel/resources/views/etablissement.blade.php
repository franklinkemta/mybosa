<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>My Bosa | Etablissement</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="etablissementHeader">
        @include('layouts.header')
        <div class="sub_page_info">
            <p class="main">Google ads c’est cher et ça craint! Avec Mybosa payez uniquement pour le résultat.</p>
            <a class="action" href="{{ route('register') }}">Commencez gratuitement</a>
            <p class="sec">La solution facile et simple à implémenter pour acquérir de nouveaux étudiants.</p>
        </div> 
    </div>


    <div class="ets_container">
        <div class="content">
              <h3>Plateforme de mis en rélation directe entre étudiants et établissements</h3> 
            <p>Nous développons une solution qui permet de mettre en relation direct des établissements supérieures et des étudiants en majorité jeunes bacheliers, créez votre compte  et commencez à recevoir des demandes d’étudiants intéressés par vos formations.</p>
           <a href="{{ route('register') }}">Créez un compte gratuitement</a>
        </div>
        <div>
            <img src="images/PE_S2.png" alt="">
        </div>
    </div>
    <div class=" ets_container_3">
        <div>
            <img src="images/PE_S3.png" alt="">
        </div>
        <div class="content">  
            <h3>Nous nous occupons de tout pour vous</h3> 
            <p>
            Pas besoin d’allouer une nouvelle ressource, nous qualifions les dossiers de candidatures avant l’envoi. Un responsable pédagogique pour l’étude du dossier et la validation de candidature est ce dont vous avez besoin. <b>Connectez-vous</b> simplement et recevez des demandes  d’étudiants désireux de s'inscrire chez vous à travers le monde!
            </p>    
            
        </div>

        
    </div>
    

    <div class="croissance_container">
        <div class="content">  
            <h3>Faites de l’économie en gagnant de la croissance.</h3>
            <p>Fini les gros budgets marketing et commercial.<br>MyBosa communique pour vous à moindre coût et vous ne payez que les résultats obtenus</p>
             <a href="{{ route('register') }}">Créez un compte gratuitement</a>
        </div>
         <div>
            <img src="images/img_croissance.png" alt="">
        </div>
        
    </div>
       
    <div class="diff">
        <h3>Nos forces</h3>
        <div class="list">
            <ul>
                <li>La puissance de l'IA à votre service.</li>
                <li>Lancé en juin 2019 nous avons démarré avec 3 partenaires (écoles) et inscrit une dizaine d’étudiants pour la rentrée 2019-2020 au Maroc.</li>
                <li>Porté par notre vision nous référençons tous les établissements partenaires de la même façon.</li>
                <li>Nous ne sommes pas des intermédiaires, notre objectif: vous connecter directement aux étudiants</li>
                
            </ul>

            <ul>
                <li>77% de nos activités sont digitalisés et 23% ne le sont pas ceci à travers nos agents (conseillers d’orientation qui distribuent vos prospectus notamment.</li>
                <li>Créez votre compte en 1 min puis complétez votre profil et nous vous contacterons pour vérification des informations et enfin recevez des milliers de candidatures.</li>
                <li>Entièrement personnalisées pour chaque établissement.</li>
                <li>Algorithmes, data science, growth-hacking... nos forces.</li>  
            </ul>
        </div>
    </div>

    <div class="inscription_container  last_container">
            <h3>Vous n’êtes qu’à quelques clics de vos futurs étudiants.</h3>
            <a href="{{ route('register') }}" class="ensavoir">Commencez gratuitement</a>
    </div>
    @include('layouts.footer')  
</body>
</html>

