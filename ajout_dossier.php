<?php 
include('doctype.php');
// session_start();
?>
<title>Cloud Connection - ajouter un dossier</title>
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
        require('functions.php');
        echo $GLOBALS['nameFolder'];

        newFolder();
        
        ?>
        </div>
    </div>