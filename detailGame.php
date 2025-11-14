<?php
require_once 'include/config.php';
$id = $_GET['id'];
$game = $pdo->query("SELECT * FROM `game` WHERE id = $id")->fetchAll();
$game = $game[0];


?>
<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Détail jeu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .block {
            border: 1px solid #ddd;
            padding: 16px;
            border-radius: 8px;
            max-width: 800px
        }

        .row {
            margin: 6px 0
        }

        .label {
            display: inline-block;
            width: 140px;
            color: #666
        }

        .title {
            font-weight: bold;
            font-size: 22px;
            margin: 0 0 10px
        }

        .muted {
            color: #666
        }

        .btn-back {
            display: inline-block;
            margin-top: 12px
        }
    </style>
</head>
<body>

<div class="block">
    <h1 class="title"><?= $game['name'] ?></h1>
    <div class="row"><span class="label"></span> <img src="<?= $game['image']?>" height="250" > </div>
    <div class="row"><span class="label">Plateforme :</span> <?= $game['Platform_id'] ?></div>
    <div class="row"><span class="label">Description :</span> <?= $game['description'] ?></div>
</div>
<?php
foreach($game as $g){
    ?>
    <div class="row"><a href="http://localhost/key-gaming/achatJeu.php?id=<?= $g['id'] ?>">Acheter le jeu</a></div>
<?php
}
?>
