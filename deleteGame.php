<?php
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM `game` WHERE `name` = ?");
$stmt->execute([$id]);
$stmt = $pdo->prepare("DELETE FROM `game` WHERE `description` = ?");
$stmt->execute([$id]);
$stmt = $pdo->prepare("DELETE FROM `game` WHERE `gategory` = ?");
$stmt->execute([$id]);
$stmt = $pdo->prepare("DELETE FROM `game` WHERE `date` = ?");
$stmt->execute([$id]);
$stmt = $pdo->prepare("DELETE FROM `game` WHERE `image` = ?");
$stmt->execute([$id]);

header('Location: http://localhost/crunchy/');
exit;