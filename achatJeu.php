<?php
include("include/header.php");
include("include/config.php");
?>
<h1>Acheter le jeu : </h1>

<?php
$user_id = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['cardnumber']) || empty($_POST['cardcrypto'])) {
        echo "<p style='color:red'>Veuillez remplir tous les champs.</p>";
    } else {

        $cardnumber = $_POST['cardnumber'];
        $cardcrypto = $_POST['cardcrypto'];

        $stmt = $pdo->prepare("UPDATE `User` 
                               SET cardnumber = ?, cardcrypto = ? 
                               WHERE id = ?");
        $stmt->execute([$cardnumber, $cardcrypto, $user_id]);

        echo "<p>Informations de paiement enregistrées.</p>";
    }
}
?>
?>


<form action="#" method="POST">
    <label for="cardnumber">Numéro de la carte</label>
    <input type="text" name="cardnumber"><br>
    <label for="cardcrypto">Cryptogramme</label>
    <input type="text" name="cardcrypto"><br>
    <button type="submit">Payer </button>