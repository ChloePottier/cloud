<?php
session_start();
include('doctype.php');?>
<title>Cloud Connection - ajouter un fichier</title>
</head>
<div class="container-fluid">
    <div class="container">
    <?php
    //si la session existe alors afficher la page sinon retour vers la page de connection
    // if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
        include('menu.php');
    ?>
    <p>Vous pouvez désormais uploader sur le cloud vos fichiers <br /> 
        Taille maximale autorisée : 5 Mo.
    </p>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="5000000" /> -->
        <input  type="file" name="userfile"/>
        <button type="submit"> Uploader le fichier</button>
    </form>
    <!-- AFFICHER LISTING FICHIERS -->
        <?php
    //debogage
    // print_r($_FILES);
    // echo $_FILES['userfile']['type'];
    // print_r(pathinfo(''.$_FILES['userfile']['name'].''));

    if(isset($_FILES['userfile'])){
        $uploaddir = 'upload/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        if ($_FILES['userfile']['error']>=1) {
            echo " Paramètres invalides ";
        }
        if ($_FILES['userfile']['size'] > 5000000) { //taille maximale = 5Mo
            echo " Taille maximale dépassée ";
        }
        [ 'extension' => $extension] = pathinfo(''.$_FILES['userfile']['name'].'');
        if( $extension == 'php' OR $extension == 'js' OR $extension == 'exe'){
            echo " Ce type de fichier strictement interdit ";
        }
        else{
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'upload/'.basename($_FILES['userfile']['name']));
            echo "Félicitations, le fichier ".$_FILES['userfile']['name']." a été uploadé correctement ! ";
        }
    }
    // else{
    //     echo " Une erreur est survenue, envoie du fichier impossible";
    // }
    ?>
    <a href="home.php">Retour</a>
    <?php

    // } else{
    //     header("Location: index.php");
    // }
    ?>
    </div>
</div>

