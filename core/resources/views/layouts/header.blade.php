<div class="navigation">
    <nav>
        <div class="elipse"><img src="images/menu.png" alt="Menu" class="hamMenu"><p class="menutext">Menu</p></div>
        <div class="menuMobile">
            <span class="closeMenu">X</span>
            <ul class="menuList">
                <li>etudiants<img src="images/suivanBlanc.svg" alt="" class="plusInfo"></li>
                <li><a href="{{ url('/etablissement') }}">etablissements</a></li>
                <li><a href="conseiller.php">Conseiller d'orientation</a></li>
            </ul>
            <div class="detailEtudiant">
                <div class="titre"><span class="moins"><</span><h3>Etudiants</h3></div>
                <ul>
                    <li><a href="{{ url('/formation') }}">Formation</a></li>
                    <li> <a href="{{ url('/orientation') }}">Orientation</a><br></li>
                </ul>
            </div>
        
            <div class="elipseXs"><p class="inscriptionXs"><a href="{{ route('typeCompte') }}" >Inscription</a></p></div>
        </div>
        <a href="{{ url('/') }}"><img src="images/logo_.png" alt="Logo image" class="logo" title="Logo"></a>
        <a href="{{ url('/') }}" class="logoMobileLink"><img src="images/logoMobile.png" alt="Logo image" class="logoMobile" title="Logo"></a>
        
        
        
        <div class="elipse"><p class="connexionXs"> Connexion</p></div>
        <ul class="menuPc">
            <li class="sub_menu_items ">  
                <a href="{{ url('/formation') }}">etudiants</a> 
            </li>
            <li class="ets-menu"><a href="{{ url('/etablissement') }}">etablissements</a></li>
            <li class="co-menu"><a href="{{ url('/conseiller') }}">conseiller d'orientation</a></li>
        </ul>  
        
        <p class="connexionPc"><span  class="connexion connect_mb">Connexion</span>
        <span class="inscription"><a href="{{ route('typeCompte') }}" class="inscriptionPc" >Ouvrir un compte</a></span></p>
        
    </nav>
    <div class="sub_menu">
        <ul>
          <li> <a href="formation.php">Formation</a>
             <p>Le meilleur moteur de recherche pour trouver un établissement supérieur.</p>
          </li>
          <li> <a href="orientation.php">Orientation</a>
            <p>Aidez de million de jeunes élèves et étudiants à construire leur projet d’avenir.</p>
          </li>
        </ul>
        </div>     
    
   

</div>