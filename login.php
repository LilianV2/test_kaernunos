<?php
session_start();
    if (isset($_POST['valider'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $defaultUsername = "Lilian";
            $defaultPassword = "pass";

            $getUsername = htmlspecialchars($_POST['username']);
            $getPassword = htmlspecialchars($_POST['password']);

            if ($getUsername == $defaultUsername && $getPassword == $defaultPassword) {
                $_SESSION['password'] = $getPassword;
                header('location:index.php');
            } else {
                echo "err mdp";
            }
        } else {
            echo "err all";
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
        <form action="" method="POST">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" name="valider">
        </form>
    </section>
</div>
</body>
</html>


