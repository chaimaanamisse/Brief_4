<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">

</head>
<body>
    <section class="mon-conteneur">

        <?php

        include "assets/php/header.php";

        ?>

    <main class="box-contenu-acceuil">
        <div class="contenu-acceuil">
        
            <div class="conteneur-haut">
        <div class="image-acceuil">
            <img src="college.png" alt="" class="college">
        </div>
        <div class="description-acceuil">
            <h1 class="titre-description">What is <strong>WECODE</strong>?</h1>
            <p class="p-description">Le Lorem Ipsum Est Simplement Du Faux Texte Employé
                Dans La Composition Et La Mise En Page Avant Impression.
                Le Lorem Ipsum Est Le Faux Texte Standard De L'imprimerie 
                Depuis Les Années 1500, Quand Un Imprimeur Anonyme 
                Assembla Ensemble Des Morceaux De Texte Pour Réaliser Un 
                Livre Spécimen De Polices De Texte.</p>

    				<?php				                          
                        if (isset($_SESSION['id'])) {            // On peut remplacer { par :  
                     ?>                                            

                        <div class="btn-acceuil">
                            <a href="logout.php">
                                <button>Logout</button>
                            </a>
                        </div>

                    <?php
                        }			
                        else{                                   // On peut remplacer par else :  
                     ?>


                  <div class="btn-acceuil">
                        <a href="login.php">
                            <button>Login</button>
                        </a>
                    </div>

                    <?php
                        }                                         // On peut remplacer } par endif
                    ?>



        </div>
    </div>
        <div class="gallery">
            <h1 class="titre-gallery">Our pictures</h1>
            <div class="images">
                <img src="students.png" alt="">
                <img src="studentz.png" alt="">
                <img src="students.png" alt="">


            </div>
        </div>
    </div>
    </main>
   
       

   </section>

    <footer>
        <p>© Copyright 2021 Wecode, All Rights Reserved.</p>
        <div class="footer_btn">
            <button>Support</button>
        </div>
    </footer>
    
</body>
</html>