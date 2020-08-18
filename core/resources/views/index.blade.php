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
    <title>My Bosa</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>

   
</head>
<body>

    <header>
        @include('layouts.header')
        <div class="sub_page_info">
            <p class="main">Trouvez ce qu’il y’a de mieux en matière d’éducation! </p>
            <a href="{{ route('typeCompte') }}" class="action"> Créer un compte gratuitement</a>
            <p class="sec">Etudiez partout à tout moment....</p>
        </div>
    </header>
 
   
    <div class="categories">
        <h3 class="first">Plateforme d'orientation</h3>
        <div class="flex_cat">
            <div class="category" >
                <img src="images/study.png" alt="Image Etudiant">
                <h3>Étudiants</h3>
                <p class="etudiants">Vous êtes à la recherche d’une école? Besoin d’orientation? une bourse d’étude? comparez vos possibilités.</p> 
                <a href="formation.php" class="ensavoir"> En savoir plus</a>
            </div>
            <div class="category">
                <img src="images/ets.png" alt="Image établissement">
                <h3>Établissement</h3>
                <p> Remplissez vos salles de classe en quelques clics. Réduisez vos coûts marketing avec une solution qui marche!</p>
                <a href="etablissement.php" class="ensavoir"> En savoir plus</a>
            </div>
            <div class="category">
                <img src="images/orientation.png" alt="Image Conseiller">
                <h3>Conseiller d’orientation </h3>
                <p>Gagnez de l’argent en faisant ce que vous aimez, en aidant nos étudiants,profitez de MyBosa dans l'exécution tâches.</p> 
                <a href="conseiller.php" class="ensavoir"> En savoir plus</a>
            </div>
        </div>
    </div>  
    <div class="etapeInscription">
        <h3>Trouvez l’école de vos rêves en trois étapes. </h3>
        <div class="line_top"> 
        </div>
        <div class="container">
        <div class="premiereEtape">
                <img src="images/etp1.png" alt="">
                <div class="legende">
                 <div><div class="cercle"><span>1</span></div><p><a href="{{ route('typeCompte') }}"> Ouvrez un compte</a> en quelques clics et complétez votre profil</p></div>   
                </div>
            </div>
          <img src="images/suivnt.png" alt="" class="suivant_etape">
            <div class="deuxiemeEtape">
                <img src="images/etp2.png" alt="" >
                <div class="legende">
                   <div> <div class="cercle"><span>2</span></div><p>Choisissez un établissement puis envoyez votre  candidature.</p></div>
                </div>
            </div>   
            <img src="images/suivnt.png" alt="" class="suivant_etape">
            <div class="troisiemeEtape">
                <img src="images/etp3.png" alt="">
                <div class="legende">
                   <div><div class="cercle"><span>3</span></div> <p> Recevez votre acceptation et inscrivez-vous.</p></div>
                </div>
            </div>      
            <div class="slide-etape">     
            <img src="images/precedent.svg" alt="" class="precedent">
                <div class="circle">
                    <span class="circle-etap1"></span>
                    <span class="circle-etap2"></span>
                    <span class="circle-etap3"></span>
                </div>
               
                <img src="images/suivant.svg" alt="" class="suivant">
            </div>

            </div>
            <a href="{{ route('typeCompte') }}" class="ensavoir">Créez un compte gratuitement</a>

        </div>
        <div class="container_2 image_fond">
            <div class="etablissemnt">
                <div class="descp">
                    <h3>La solution idéale pour les établissements supérieurs privés.</h3>
                    <p>Recevez des centaines de candidatures qualifiées en toute simplicité. Nous nous occupons de tout, du début à la fin. Détendez-vous, laissez faire les choses.</p>
                    <a href="{{ route('typeCompte') }}" class="ensavoir">Commencez gratuitement</a>  
                </div>
                <img src="images/computer.png" alt="" class="phone">
            </div>
        
        </div>

<div class="video_container">    
    <iframe width="560" height="315" class="video" src="https://www.youtube.com/embed/5dh4U2aH2y4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="video_text">
        <h3>Notre expérience & Pays couverts.</h3>
        <p>MyBosa c’est déjà une trentaine d’étudiants accompagnés et une dizaine d’étudiants subsahariens inscrits dans les écoles supérieures marocaine pour l’année académique 2019 - 2020.</p>
        <a href="{{ route('typeCompte') }}" class="ensavoir">Créez un Compte</a>  
    </div>
</div>
        
<div class="joindreCommunaute">
    <h3>Faites nous confiance et rejoignez la grande communauté MyBosa </h3>
        <div class="paragraphs">
            <div>
                <h4>Simplicité</h4>
                <p> Application easy-users sans publicité sur la plateforme. Notre objectif est de donner le maximum de choix à nos utilisateurs.<br> Nous référençons tous les établissements existants dans les territoires où nous sommes présents.</p>
            </div>
            <div>
                <h4>Sécurité et confiance</h4>
                <p> La protection de vos données est au cœur de nos priorités, c’est pourquoi nous prenons toutes les mesures pour protéger les documents de ceux qui postulent à travers notre plateforme et respectons les normes en matière de politique confidentialité et RGPD.<br><br>Nous vérifions la conformité des documents des étudiants postulant à travers notre plateforme.</p>
            </div>
            <div>
                <h4>Technologie</h4>
                <p>Notre plateforme utilise l'intelligence artificielle et l'apprentissage automatique pour mieux classer de grandes quantités de données <br>Elle génère des résultats plus rapides, plus précis et plus conformes.</p>
            </div>
            <div>
                <h4>Politique des prix</h4>
                <p>Porté par notre vision de résoudre le problème de l’accès à l'éducation en Afrique, nous ne facturons aucun frais pour l’orientation et la procédure de candidature pour les étudiants est gratuit jusqu’à 7 demandes à l’international. <br> Orienté résultat les établissements ne paient qu’après le paiement des frais de scolarité.</p>
            </div>
             
        </div>
</div>
<div class="inscription_container">
        <h3>Le pont vers un avenir plus certain! </h3>
        <a href="{{ url('/formation') }}" class="ensavoir">Commencez gratuitement</a>
</div>

        
<?php
        if(isset($_GET['sucess'])){?>
        
        <script>
            alert('Compte créer avec succès');
        </script>
        <?php
            
        }
        if(isset($_GET['pbmpass_connex'])){?>
        
            <script>
                alert('Veuillez entrer un  Mot de passe');
            </script>
            <?php
                
            }
            if(isset($_GET['pbemail_connex'])){?>
        
                <script>
                    alert(' Veuillez entrer un email ');
                </script>
                <?php
                    
                }
?>

@include('layouts.footer')  

@include('auth.connexion')

    
</body>
</html>
