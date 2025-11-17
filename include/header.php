<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key Gaming</title>
    <link rel="stylesheet" href="public/styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<html>

<body>
<header class="header" >

    <div class="d-flex align-items-center">
        <?php
if (!empty($_SESSION['id'])) {
    ?>
    <a href="http://localhost:8000/include/login_logout/logout.php">Se déconnecter
        
    </a>
<?php
} else {
?>
    <a href="/include/login_logout/login.php">connexion
</a>
<?php
}

?>
        ?>


        <img src="public/asset/images/1logos.png" class="rounded mx-auto d-block" alt="logo key" height="150px" width="150px">
        <button type="button" class="btn btn-outline-primary">panier</button>
    </div>




</header>

<style>
    header {
        background-color: #F9DC5C;
    }
</style>