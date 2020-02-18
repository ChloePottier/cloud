<?php 
include('doctype.php');
session_start();?>
<title>Cloud Connection - accueil</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
        <?php include('menu.php');?>
    <h1>Cloud Connection - ajouter un dossier</h1>
    <form action="" method="GET" >
        <input type="text" name="name_folder" placeholder="Nom du dossier">
        <button type="submit">Enregistrer</button>
    </form>
    <?php
    if(isset($_GET['name_folder'])){
        $nameFolder = $_GET['name_folder'];
        echo "nom du dossier : " .$nameFolder;
        $newFolder="upload/".$nameFolder;
        mkdir($newFolder,0777,TRUE);
    }
    // ajoutDossier($nameFolder);
    ?>
        </div>
    </div>