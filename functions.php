<?php 
$dir = 'upload/';//dossier ou l'on pourra uploader
//Afficher les dossiers
function lookFolder(){
    if ($handle = opendir($GLOBALS['dir'])) {
        echo "<img src='img/folder.png'/> ".$GLOBALS['dir']."<br/>";
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                // echo "$entry\n <br>";
                if(filetype($GLOBALS['dir'] . $entry) =='dir' && $entry != "." && $entry != ".."){ //si le type de fichier == dir (si c'est un dossier) && $entry != "." && $entry != ".."alors reddir le dossier
                        echo "<a href='".$GLOBALS['dir']."/".$entry."?dir='><img src='img/folder.png' class='pl-13'/> ".$entry."</a> <br>"; //nom dossier
                        
                }
                if(filetype($GLOBALS['dir'] . $entry) !='dir' && $entry != "." && $entry != ".."){ //si le type de fichier != dir && $entry != "." && $entry != ".."alors reddir le dossier
                        echo "<img src='img/file.png' class='pl-13'/> ".$entry." <br>"; //nom fichier
                }
            }
        }
        closedir($handle);
    }
};







function newFolder(){
    if(isset($_GET['name_folder'])){
        $GLOBALS['nameFolder']  = $_GET['name_folder'];
        $newFolder="upload/".$GLOBALS['nameFolder'] ;
        mkdir($newFolder,0777,TRUE);
        echo "Le dossier " .$GLOBALS['nameFolder'] ." a été créé";

    }
}

?>