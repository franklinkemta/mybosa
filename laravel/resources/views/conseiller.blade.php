
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bosa|Conseiller</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>
<body>
    <div class="conseillerHeader">
        @include('layouts.header')
        <div class="sub_page_info">
            <p class="main">Aidez de million de jeunes élèves et étudiants à construire leur projet d’avenir.
            </p>
           
            <a href="{{ route('typeCompte') }}" class="action">Créez un compte gratuitement</a>
            <p class="sec">Vous êtes conseiller d’orientation, expert de l'éducation? <br> nous développons un outils pour vous aider dans vos tâches quotidiennes <br>et le plus incroyable c’est que vous serez payé pour faire ce que vous aimez..
            </p>
        </div>
       
    </div>
</div>


<div class="list_advisor">

 
    <div class="list-items">
    <h3>Le meilleur allié du conseiller d’orientation.</h3>
    <p>Classez vos dossiers</p>
      <p>Organisez vos entretien</p>
        <p>Comparez des options et prenez la meilleure décision</p>
        <p>Discutez directement avec des établissements supérieurs</p>
    </div>
</div>
<div class="result_container_S3">
    <div class="left_align">
        <div class="img_div">
        <img src="images/PC_S3.png" alt="" class="result_img">
    </div>
    <div class="content">
        <h3> Améliorez les résultats de vos apprenants. </h3>
            <p>Nous développons un outil vous permettant d’analyser les résultats scolaires de vos élèves afin de déterminer leurs points forts et faibles pour les aider à s’améliorer. Connectez vous et voyez par vous même!</p>
        <a href="{{ route('typeCompte') }}">Créez un compte gratuitement</a>
    </div>
    </div>
  
</div>      
<div class="money_container">
   
    <div>
        <h3>Gagnez de l’argent en faisant ce que vous aimez.  </h3>
        <p>Parce que votre temps compte, MyBosa vous récompense pour chacune de vos minutes à travailler. <b>Comment ça marche ?</b> 
        </p>
        <ol>
            <li><a href="{{ route('typeCompte') }}" class="inscrip">Inscrivez-vous gratuitement</a></li>
            <li> Complétez votre profil</li>
            <li>Nos commerciaux vous contacteront.</li>
        </ol>
    </div>
    <img  class="money_img" src="images/money.png" alt="">
</div>
<div class="inscription_container  last_container">
            <h3>Le meilleur allié du conseiller d’orientation.</h3>
            <a href="{{ route('typeCompte') }}" class="ensavoir">Commencez gratuitement</a>
    </div>
    @include('layouts.footer')  
    @include('auth.connexion') 
</body>
</html>
