<?php
session_start();

require_once "DbPDO.php";

$bdd = DbPDO::connect();

if (!$_SESSION['password']) {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>test kaernunos</title>
</head>
<body>
<div class="container">
    <header>KAERNUNOS</header>
    <section>
        <?php
        $getComments = $bdd->query('SELECT * FROM commentaires');

        while ($comms = $getComments->fetch()) {
            ?>
            <div><?= $comms['title'] . "<br>" . $comms['body'] . "<br>";?><a href="banned.php?id=<?= $comms['id'] ?>">Supprimer le commentaire</a><br><br></div>
            <?php
        }
        ?>
    </section>
</div>
</body>
</html>