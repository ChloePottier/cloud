<?php 
include('doctype.php')?>
<title>Assuretout  - accueil</title>
</head>
<body>
<?php 
// démarrer la session
session_start();
// include('menu.php');
echo"<h1>Cloud Connexion</h1>";
//si la session existe alors afficher la page sinon retour vers la page de connection
if(isset($_SESSION['login']) && isset($_SESSION['pwd'])){
    echo "<div class='text-center padding-top-40'>Bienvenue ".$_SESSION['login']." sur votre cloud personnalisé !</div>
";?>

<?php

} else{
    header("Location: index.php");
}



// ?>
