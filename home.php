<?php 
session_start();
include('doctype.php')?>
<title>Cloud Connection - accueil</title>
</head>
<body>
        <div class="container-fluid">
                <div class="container">
                
                <?php
                //si la session existe alors afficher la page sinon retour vers la page de connection
                // if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
                         include('menu.php');?>
                        <h1>Cloud Connection</h1>
                        <!-- <?php echo "<div class='text-center padding-top-40'>Bienvenue ".$_SESSION['user']." sur votre cloud personnalisé !</div>";
                        ?> -->
                <!-- Listing des fichiers présent sur le cloud -->

                
                <?php
                        require('functions.php');
                        // lookFolder();
                        $DEFAULT = 'upload/';
                        $IMGFOLDER = 'img/file.png'; /*L'icon pour le dossier*/
                        $IMGFILE = 'img/fichier.gif'; /*Icon pour le fichier*/
                        $IMGCREATEFILE = 'img/filenew.png'; /*Fichier pour crée un fichier*/
                        $IMGUPLOAD = 'img/upload.gif'; /*Fichier pour upload des fichier*/
                        $IMGCREATEFOLDER = 'img/folder-new.png';
                        $IMGSEARCH = 'img/search.png';
                        $IMGRENAME = 'img/edit.png';

                if (
                        !isset($_GET['rename']) && !isset($_GET['pathren']) && !isset($_GET['en']) && !isset($_GET['upload']) && !isset($_POST['pathupload']) && !isset($_GET['touch']) && !isset($_GET['download']) &&/*Verifie si rien n'est appellé*/
                        !isset($_GET['delete']) && !isset($_GET['path']) && !isset($_GET['dir']) && !isset($_FILES['fichier']) && !isset($_GET['mkdir']) && !isset($_GET['pathmkdir'])
                        ) {
                        header('location:?dir=' . $DEFAULT);
                        }

                 if (isset($_GET['dir']) && !empty($_GET['dir']) && file_exists($_GET['dir']) && is_dir($_GET['dir']))/*Verifie la variable et bien un repertoire*/ {
                                $rep = $_GET['dir'];
                                $rep = str_replace("//", "/", $rep);
                                $handle = @opendir($rep);/* Ouvre le repertoire */
                        while ($f = readdir($handle)) { //Boucle qui enumere tout les fichier d'un repertoire
                                $lien = str_replace(" ", '%20', $f); /*Pour les espace fichier*/
                                $replien = str_replace(" ", '%20', $rep);/*idem pour les dossier*/
                                if (@is_dir($rep . '/' . $f)) { /*verifie si c'est un repertoire*/
                                  echo '<a href="?dir=' . $replien . '/' . $lien . '"><img alt="Dossier" src="' . $IMGFOLDER . '" />' . $f . '</a><br />';
                                } elseif (@is_file($rep . '/' . $f)) {/*Verifie si c'est bien un fichier*/
                            
                                  echo '<img src="' . $IMGFILE . '" alt="Fichier"/>' . $f . '<a href="?delete=' . $replien . '/' . $lien . '" onclick="return confirm(\'Supprimer ' . $f . ' ?\');"><img alt="Supprimmer" title="/!\Supprimer/!\ " src="img/delete.gif" /></a><a href="?download=' . $replien . '/' . $lien . '" ><img alt="Telecharger" title="Telecharger " src="img/download.png" /></a><br />';
                                }
                                /*Crée le formulaire pour crée un fichier par default display:none affiche en cliquant en  haut*/
                              }
                 }
                // } else{
                //         // header("Location: index.php");
                //         echo "veuillez vous connecter pour accéder à votre cloud";
                // }         
                       ?>
                </div>
        </div>