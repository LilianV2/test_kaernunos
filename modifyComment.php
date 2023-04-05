<?php
session_start();

require_once "DbPDO.php";
$bdd = DbPDO::connect();

if (!$_SESSION['password']) {
    header('location:login.php');
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $getId = $_GET['id'];

    $getComment = $bdd->prepare('SELECT * FROM commentaires WHERE id = ?');
    $getComment->execute($getId);

    if ($getComment->rowCount() > 0) {
        $getAllInfos = $getComment->fetch();
        $title = $getAllInfos['title'];
        $content = $getAllInfos['content'];
    } else {
        echo "aucun article trouvé";
    }
} else {
    echo "aucun id trouvé";
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
            <input type="text" name="title" value="<?= $title;?>">
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <input type="submit" name="submit">
        </form>
    </section>
</div>
</body>
</html>

