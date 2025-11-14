<?php
include("include/header.php");
include("include/config.php");
?>
<h1>Acheter le jeu : </h1>

<?php
$id = $_GET['id'];
$achat= $pdo->query("SELECT * FROM `game` WHERE id = $id")->fetchAll();
$achat = $achat[0];

