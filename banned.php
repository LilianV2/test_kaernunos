<?php
session_start();
require_once "DbPDO.php";

$bdd = DbPDO::connect();

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getId = $_GET['id'];
    $getComm = $bdd->prepare('SELECT * FROM commentaires WHERE id = ?');
    $getComm->execute([$getId]);
    if ($getComm->rowCount() > 0) {
        $banCom = $bdd->prepare('DELETE FROM commentaires WHERE id = ?');
        $banCom->execute([$getId]);

        header('location:comment.php');
    }else {
        echo "comms pas trouvé";
    }
} else {
    echo "id n'a pas été récupéré";
}
