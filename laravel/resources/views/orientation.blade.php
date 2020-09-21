<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY Bosa | Orientation</title>
    <!--<link rel="stylesheet" href="css/normalize.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <div class="orientationHeader">
        @include('layouts.header')
        <div class="sub_page_info">
            <div>
            <p class="main">L’équation de la réussite professionnelle  <br>Passion ÷ compétences > 1</p>
            <a href="{{ route('register') }}" class="action">Créez un compte gratuitement</a>
            <p class="sec">Des milliers de conseillers d’orientation à votre disposition.</p>
            </div>
        </div>
    </div>

       <div class="list_orientation">

        <img src="images/orientation_1.png" alt="images_orientation">
    
        <div id="orientation">
        

            <div class="list-items">
                <p>Je ne sais pas quoi faire! Notre phrase préférée.</p>
                <p>Ne perdez plus d’années pour trouver ce qui vous convient.</p>
                <p>Projet professionnel.</p>
                <p>Avis sur les nouveaux métiers.</p>

            </div>

        </div>
    </div>
    
    <div class="finance">
        
       
        <div class="content">
            <h3>Étudiez à moindre coût</h3>
            <p>Nos experts de l’éducation sauront vous aider; pallier aux problèmes de financement des études en vous proposant des solutions pour étudier à moindre coût.</p>
            <a href="{{ route('register') }}">Créez un compte gratuitement</a>
        </div>
         <img src="images/PO_S3.png" alt="">
      
        
    </div>
    <div class="expert_orientation"> 
       
            <img src="images/PO_S4.png" alt="">
       
         <div class="content">
            <h3>Discutez avec des experts de l’éducation.</h3>
            <p>Quelque soit le chemin que vous empruntez avec du temps vous arriverez à destination, mais avec un advisor vous arriverez plus rapidement et avec le moins de souffrance possible.</p>
        </div>
    </div>
   
    <div class="inscription_container">
            <h3>Des experts de l’éducation à votre portée.</h3>
        <a href="{{ route('register') }}" class="ensavoir">Commencez gratuitement</a>
    </div>

    @include('layouts.footer')  
</body> 
</html>