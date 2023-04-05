<?php
session_start();

require_once "DbPDO.php";
$bdd = DbPDO::connect();

if (!$_SESSION['password']) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['content'])) {
        $title = htmlspecialchars($_POST('title'));
        $content = nl2br(htmlspecialchars($_POST['content']));

        $insertComment = $bdd->prepare('INSERT INTO commentaires (title, body) VALUES (? , ?)');
        $insertComment->execute([$title, $content]);

        echo "Le commentaire a bien été publié";
    } else {
        echo "Veuillez compléter tous les champs";
    }
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
        <form action="" method="post">
            <input type="text" name="title">
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <input type="submit" name="submit">
        </form>
    </section>
</div>
</body>
</html>

