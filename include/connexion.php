<?php
include 'header.php';
?>

<h2>Page de connexion</h2>

    <nav id="Inscription Button="d-grid gap-2 col-6 mx-auto">
        <a href="inscription.php">Inscription</a>
            <button class="btn btn-primary" type="button">Button</button>
    </nav>


<section id="formConnexion">

    <form action="#" method="POST">
        <input type="email" id="email" placeholder="userEmail" require>
        <input type="password" placeholder="userPassword">
        <button type="submit">Envoyer</button>

</section>
</body>
</html>

<?php

include 'footer.php';
?>