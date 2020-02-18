<?php 
function connexion(){
    //password_hash();
    //password_verify ();
    //variables pour la connexion BDD
    $userBdd ='root';
    $pass ='';

    //Connexion à la BDD en PDO
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=cloud', $userBdd, $pass);
        // print 'connexion bdd ok'; //juste pour voir si il se connecte correctement
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    //variable du formulaire
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    //requete SQL
    $sql = "SELECT 'user', 'password' FROM user WHERE user = '".$user."' AND password = '".$pwd."'"; 
    //exécute la requête SQL 
    $requete = $dbh->query($sql);
    //recuperation des données dans un tableau
    $res = $requete->fetch(PDO::FETCH_ASSOC);
    //si les champs sont ok alors rediriger vers la page home sinon retourner sur la page index.
    if($res==true){
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pwd'] = $pwd;
        header("Location: home.php");
        exit();
    } else{
        header("Location: index.php");
    }
    //user et pwd existe alors
    //déconnection de la BDD : A METTRE A LA FIN SINON IL N'EXECUTE PAS LES REQUETES !!!
    $dbh = null;
}
connexion();
// test fonction ajout dossier mais ca marche pas
function ajoutDossier($nameFolder){
    if(isset($_GET['name_folder'])){
        $nameFolder = $_GET['name_folder'];
        $GLOBALS['namefolder'] = $nameFolder;
        echo "nom du dossier : " .$nameFolder;
        $newFolder="upload/".$nameFolder;
        mkdir($newFolder,0777,TRUE);
    };
};
// logout
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location: index.php');
?>