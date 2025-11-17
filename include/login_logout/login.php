<?php
require __DIR__ . '/../config.php';

include __DIR__ . '/../header.php';

$message = "";

if(count($_POST) > 0) {
    $con = mysqli_connect('127.0.0.1', 'root', 'aqwzsxedc09!', 'keygaming', 3306) or die('Unable To connect');        

    $stmt = $con->prepare("SELECT id, name FROM `User` WHERE email=? AND password=?");
    $stmt->bind_param("ss", $_POST["userEmail"], $_POST["userPassword"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        header("Location: /index.php");
        exit();
    } else {
        $message = "Invalid Username or Password!";
    }
}
?>





<form action="#" method="POST">
    <h2>Connexion</h2>
    <input type="text" name="userEmail" placeholder="Votre email">
    <input type="password" name="userPassword" placeholder="Votre mot de passe">
    <button type="submit">Se connecter</button>
</form>

<?php if($message != "") { echo "<p>$message</p>"; } 

?>