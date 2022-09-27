<?php include('header.php'); ?>
<div class="container-fluid bg-dark">
        <br>
        <div class="col-lg-12">
                <div class="col d-flex justify-content-center">
                        <a href="adminLogin.php"><button class="btn btn-danger text-light">Admin</button></a>
                </div>
        </div>
        <br>
</div>
<hr>
<br><br>

<div class="container d-flex justify-content-center">
        <div class="row">
                <div class="col-auto border border-3">
                        <p class="text-dark text-center">
                                <?php
                                include('inshorts.php');

                                // foreach ($inshorts->find('a.clickable') as $ele) {
                                //         echo '<b>' . $ele->plaintext . '</b>' . '<br>';
                                // }
                                ?>
                        </p>
                </div>
        </div>
</div>


<br><br>

<?php include('footer.php'); ?>