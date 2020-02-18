<?php 
//session_start();
include('doctype.php')?>
<title>Cloud Connection - accueil</title>
</head>
<body>
        <div class="container-fluid">
                <div class="container">
                <?php include('menu.php');?>
                <h1>Cloud Connection</h1>
                <?php
                //si la session existe alors afficher la page sinon retour vers la page de connection
                // if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
                        // echo "<div class='text-center padding-top-40'>Bienvenue ".$_SESSION['user']." sur votre cloud personnalisé !</div>";
                        ?>
                <!-- Listing des fichiers présent sur le cloud -->

                
                <?php
                        require('functions.php');
                        afficherDossier();
                                        
                       ?>
                </div>
        </div>