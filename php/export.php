<?php 
include("login.php");

    $pdoStat = $bdd->prepare("SELECT `Id`, `Title`, `Image`, `Introduction`, `LastMod`, `KeyWords` FROM `article` WHERE `Image`= './img/photos/b4.jpg' ");
    $executeIsOk =$pdoStat->execute();

    while ( $donnees = $pdoStat->fetch())
    {
        $articles = $donnees;
    }
    //$reponse->closeCursor();

    $pdoStatTwo = $bdd->prepare("SELECT `Id`, `Title`, `Image`, `Introduction`, `LastMod`, `KeyWords` FROM `article` WHERE `Image`= './img/photos/b5.jpg'");
    $executeB =$pdoStatTwo->execute();

    while ( $donnees_b = $pdoStatTwo->fetch())
    {
        $img_b = $donnees_b;
    }
    //$reponse->closeCursor();

    $pdoStatTree = $bdd->prepare("SELECT `Id`, `Title`, `Image`, `Introduction`, `LastMod`, `KeyWords` FROM `article` WHERE `Image` = './img/photos/b6.jpg' ");
    $executeC =$pdoStatTree->execute();

    while ( $donnees_c = $pdoStatTree->fetch())
    {
        $img_c = $donnees_c;

    }
    //$reponse->closeCursor();

?>
