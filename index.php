<?php
include 'include/header.php';


?>


<section class="nav d-flex justify-content-around"">
    <div>
        <?php
            include 'include/nav.php';
         ?>
    </div>

        <div class="card text-light bg-dark" style="width: 18rem;" id="promotion">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
        </div>


</section>

<section  >
    <div class="row cardColor ">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body text-light bg-dark" id="lastRelease">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-light bg-dark">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>


            </div>
        </div>
    </div>


</section>


<?php

include 'include/footer.php';