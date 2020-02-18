<?php 
$dir = 'upload/';
// test fonction ajout dossier mais ca marche pas
function afficherDossier(){
    if ($handle = opendir($GLOBALS['dir'])) {
        echo "<img src='img/folder.png'/> ".$GLOBALS['dir']."<br/>";
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                // echo "$entry\n <br>";
                if(filetype($GLOBALS['dir'] . $entry) =='dir' && $entry != "." && $entry != ".."){ //si le type de fichier == dir (si c'est un dossier) && $entry != "." && $entry != ".."alors reddir le dossier
                        echo "<img src='img/folder.png' class='pl-13'/> ".$entry." <br>"; //nom dossier
                }
                if(filetype($GLOBALS['dir'] . $entry) !='dir' && $entry != "." && $entry != ".."){ //si le type de fichier != dir && $entry != "." && $entry != ".."alors reddir le dossier
                        echo "<img src='img/file.png' class='pl-13'/> ".$entry." <br>"; //nom fichier
                }
            }
        }
        closedir($handle);
    }
};

// logout
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

?>