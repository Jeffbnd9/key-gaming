<?php
include 'include/header.php';
include 'include/config.php';
$game = $pdo->query("SELECT * FROM `game` WHERE id = 1")->fetchAll();
$game = $game[0];
?>

    <section class="nav d-flex justify-content-between p-3 mt-2"">
    <div>
        <?php
        include 'include/nav.php';
        ?>
    </div>

    <div class="card bg-light" style="width: 75rem;" id="promotion">
        <img src="public/asset/images/gamesgrid.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Acheter nos clés de jeux en toute légalités et confiance</p>
        </div>
    </div>


    </section>

    <section class="d-flex justify-content-around mt-2">


        <div class="card" style="width: 18rem;">
            <?php
            $item1 = $pdo->query("SELECT * FROM `game` WHERE id = 1")->fetch();
            ?>
            <img src="<?= $item1['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $item1['name'] ?></h5>
                <p class="card-text">60€</p>
                <a href="http://localhost/key-gaming/detailGame.php?id=1" class="btn btn-primary">Achetez dès maintenant</a>
            </div>
        </div>







        <div class="card" style="width: 18rem;">
            <?php
            $item2 = $pdo->query("SELECT * FROM `game` WHERE id = 2")->fetch();
            ?>
            <img src="<?= $item2['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $item2['name'] ?></h5>
                <p class="card-text">60€</p>
                <a href="http://localhost/key-gaming/detailGame.php?id=2" class="btn btn-primary">Achetez dès maintenant</a>
            </div>
        </div>







        <div class="card" style="width: 18rem;">
            <?php
            $item3 = $pdo->query("SELECT * FROM `game` WHERE id = 3")->fetch();
            ?>
            <img src="<?= $item3['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $item3['name'] ?></h5>
                <p class="card-text">60€</p>
                <a href="http://localhost/key-gaming/detailGame.php?id=3" class="btn btn-primary">Achetez dès maintenant</a>
            </div>
        </div>


    </section>

    <section class="d-flex justify-content-around mt-2">


        <div class="card" style="width: 18rem;">
            <?php
            $item4 = $pdo->query("SELECT * FROM `game` WHERE id = 4")->fetch();
            ?>
            <img src="<?= $item4['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $item4['name'] ?></h5>
                <p class="card-text">60€</p>
                <a href="http://localhost/key-gaming/detailGame.php?id=4" class="btn btn-primary">Achetez dès maintenant</a>
            </div>
        </div>







        <div class="card" style="width: 18rem;">
            <?php
            $item5 = $pdo->query("SELECT * FROM `game` WHERE id = 5")->fetch();
            ?>
            <img src="<?= $item5['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $item5['name'] ?></h5>
                <p class="card-text">60€</p>
                <a href="http://localhost/key-gaming/detailGame.php?id=5" class="btn btn-primary">Achetez dès maintenant</a>
            </div>
        </div>







        <div class="card" style="width: 18rem;">
            <?php
            $item6 = $pdo->query("SELECT * FROM `game` WHERE id = 6")->fetch();
            ?>
            <img src="<?= $item6['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $item6['name'] ?></h5>
                <p class="card-text">60€</p>
                <a href="http://localhost/key-gaming/detailGame.php?id=6" class="btn btn-primary">Achetez dès maintenant</a>
            </div>
        </div>


    </section>

<?php
include 'include/footer.php';
?>