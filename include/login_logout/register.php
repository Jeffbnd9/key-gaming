<?php
require __DIR__ . '/../config.php';
session_start();
$message = "";

if(count($_POST) > 0) {
    $con = mysqli_connect('127.0.0.1', 'root', 'aqwzsxedc09!', 'keygaming', 3306) or die('Unable To connect');

    // Vérifier si l'email existe déjà
    $stmt = $con->prepare("SELECT id FROM `User` WHERE email=?");
    $stmt->bind_param("s", $_POST["userEmail"]);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        $message = "Email déjà utilisé !";
    } else {
        // Insérer le nouvel utilisateur
        $stmt = $con->prepare("INSERT INTO `User` (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $_POST["userName"], $_POST["userEmail"], $_POST["userPassword"]);
        if($stmt->execute()) {
            $message = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
        } else {
            $message = "Erreur lors de l'inscription !";
        }
    }
}
?>

<form action="#" method="POST">
    <h2>Inscription test</h2>
    <input type="text" name="userName" placeholder="Votre nom">
    <input type="text" name="userEmail" placeholder="Votre email">
    <input type="password" name="userPassword" placeholder="Votre mot de passe">
    <button type="submit">S'inscrire</button>
</form>

<?php if($message != "") { echo "<p>$message</p>"; } ?>