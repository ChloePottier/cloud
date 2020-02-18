<?php 
include('doctype.php')?>
<title>Cloud Connection - accueil</title>
</head>
<body>
<?php 
session_start();
// include('menu.php');?>
<h1>Cloud Connection</h1>
<?php


//si la session existe alors afficher la page sinon retour vers la page de connection
// if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
        // echo "<div class='text-center padding-top-40'>Bienvenue ".$_SESSION['user']." sur votre cloud personnalisé !</div>";
        ?>
<!-- Listing des fichiers présent sur le cloud -->
<!-- ajouter des dossiers avec mkdir() https://www.php.net/manual/fr/function.mkdir.php on peut aussi suprrim des dossiers -->
<a href="ajout_dossier.php">Ajouter un dossier</a><a href="upload.php">Ajouter un fichier</a><br />

 
    <?php

// }
       

// } else{
//     header("Location: index.php");
// }
