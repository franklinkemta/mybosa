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
    <?php
    if(isset($_GET['pbnom'])){?>
        
        <script>
            alert("Veuillez entrez un Nom Valide");
        </script>
        <?php

    }
    if(isset($_GET['pbprenom'])){?>
        
        <script>
            alert("Veuillez entrez un Prénom Valide");
        </script>
        <?php

    }
    if(isset($_GET['pbphone'])){?>
        
        <script>
            alert("Veuillez entrez un numéro Valide");
        </script>
        <?php

    }
    if(isset($_GET['pbpays'])){?>
        
        <script>
            alert("Veuillez entrez un Pays Valide");
        </script>
        <?php

    }
    if(isset($_GET['pbmail'])){?>
        
        <script>
            alert("Veuillez entrez un Email Valide");
        </script>
        <?php

    }
    if(isset($_GET['pbmpass'])){?>
        
        <script>
            alert("Veuillez entrez un Mot de passe valide");
        </script>
        <?php

    }
    if(isset($_GET['pbconf_mpass'])){?>
        
        <script>
            alert("Il faut confirmer le mot de passe");
        </script>
        <?php

    }
    if(isset($_GET['diff_mpass'])){?>
        
        <script>
            alert("Les deux mots de passe sont différents !");
        </script>
        <?php

    }
    if(isset($_GET['diff_mpass'])){?>
        
        <script>
            alert("Les deux mots de passe sont différents !");
        </script>
        <?php

    }
    if(isset($_GET['lenght_mpass'])){?>
        
        <script>
          alert("Le mot de passe doit avoir au moins 8 caractères");
        </script>
        <?php
    
    }
    // ETablissement
    if(isset($_GET['pbnom_ets'])){?>
        
        <script>
            alert("Le nom de l'établissment n'est pas valide!");
        </script>
        <?php

    }
    if(isset($_GET['pbsite_web'])){?>
        
        <script>
            alert("Veuillez entrer un site web valide!");
        </script>
        <?php

    }
    if(isset($_GET['pbpays'])){?>
        
        <script>
            alert("Veuillez entrer un Pays valide!");
        </script>
        <?php

    }
    if(isset($_GET['pbville'])){?>
        
        <script>
            alert("Veuillez entrer une Ville valide!");
        </script>
        <?php

    }
    if(isset($_GET['pbmail_ets'])){?>
        
        <script>
            alert("L'email de l'établissement n'est pas  valide!");
        </script>
        <?php

    }
    if(isset($_GET['pbmpass'])){?>
        
        <script>
            alert("Entrez un mot de passe valide!");
        </script>
        <?php

    }
    if(isset($_GET['pbconf_mpass'])){?>
        
        <script>
            alert("Les deux mots de passe doivent être identique");
        </script>
        <?php

    }
    if(isset($_GET['pbnom_respo'])){?>
        
        <script>
            alert("Le Nom du responsable ne doit pas être vide !");
        </script>
        <?php

    }
    if(isset($_GET['pbprenom_respo'])){?>
        
        <script>
            alert("Le Prénom du responsable ne doit pas être vide !");
        </script>
        <?php

    }
    if(isset($_GET['pbposte_respo'])){?>
        
        <script>
            alert("Le Poste du responsable ne doit pas être vide !");
        </script>
        <?php

    }
    if(isset($_GET['pbmail_respo'])){?>
        
        <script>
            alert("Le Mail du responsable ne doit pas être vide !");
        </script>
        <?php

    }
    ?>
    
    <div class="form_container">


        <form action="saveData.php" class="etudiant"  method="post">
        
            <div class="step_1_form">
            <h3>INSCRIPTION CONSEILLER</h3>
            <h3>Informations personnelles</h3>
            <br>
                    <input type="text" name="nom" placeholder="Entrer votre Nom" required><br>
                    <input type="text" name="prenom" placeholder="Entrer votre Prénom" required> <br>
                    <input type="text" name="pays" placeholder="Entrer le nom votre Pays" required><br>
                    <input type="text" id="phone" name="phone" placeholder="Entrer votre numéro de téléphone" required>

                <button id="form_suivant">Suivant</button>
            </div>
            <div class="step_2_form">
            <h3>Infos de connexion</h3>
                
                    <input type="email" name="mail" placeholder="Entrer votre Email" required><br>
                    <input type="password" name="mpass" placeholder="Entrer votre mot de passe" required><br>
                    <input type="password" name="conf_mpass" placeholder="Confirmer votre mot de passe" required><br>
                <button type="submit" value="submit" id="submit" name="submit">S'inscrire</button>
            </div>
        
        </form>
            
           
</div>

    @include('layouts.footer')  
    @include('auth.connexion')

</body>
</html>