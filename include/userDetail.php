<?php

include 'header.php';




$name = $_SESSION["name"];
$email = $_SESSION["email"];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil utilisateur</title>
</head>
<body>

<style>
    :root {
        --black: #071013;
        --yellow: #F9DC5C;
        --cream: #F4FFFD;
    }

    body {
        margin: 0;
        padding: 0;
        background: var(--black);
        font-family: Arial, sans-serif;
        color: var(--cream);
    }

    .container {
        width: 500px;
        margin: 80px auto;
        background: #0d1416;
        padding: 40px;
        border-radius: 14px;
        border-left: 4px solid var(--yellow);
        box-shadow: 0 0 20px rgba(0,0,0,0.4);
    }

    h1 {
        text-align: center;
        color: var(--yellow);
        margin-bottom: 35px;
        font-size: 34px;
    }

    .info {
        display: flex;
        flex-direction: column;
        gap: 18px;
        font-size: 18px;
    }

    .label {
        color: var(--yellow);
        font-weight: bold;
        margin-bottom: 5px;
    }

    .value {
        background: var(--cream);
        color: #000;
        padding: 12px 15px;
        border-radius: 8px;
        font-size: 16px;
    }

    .btn-back {
        display: block;
        margin: 30px auto 0;
        text-align: center;
        padding: 12px 20px;
        width: 200px;
        background: var(--yellow);
        color: var(--black);
        text-decoration: none;
        font-size: 17px;
        border-radius: 8px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-back:hover {
        background: #ffe27d;
    }
</style>

<div class="container">
    <h1>Profil utilisateur</h1>

    <div class="info">
        <div>
            <div class="label">Nom :</div>
            <div class="value"><?php echo $name; ?></div>
        </div>

        <div>
            <div class="label">Email :</div>
            <div class="value"><?php echo $email; ?></div>
        </div>
    </div>

    <a href="/index.php" class="btn-back">Retour</a>
</div>

</body>
</html>