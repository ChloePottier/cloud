<?php 
include('doctype.php')?>
<title>Cloud Connection - accueil</title>
</head>
<body>
<?php 
session_start();
include('menu.php');?>
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