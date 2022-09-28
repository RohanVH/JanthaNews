<?php include('header.php'); ?>
<div class="container-fluid bg-dark">
        <br>
        <div class="col-lg">
                <div class="col d-flex justify-content-start">
                        <div class="collapse" id="navbarToggleExternalContent">
                                <div class="bg-dark p-4">
                                        <h5 class="text-light h4 text-center">Categories</h5><br>
                                        <ul class="navbar-nav bg-light border-3 border-light">
                                                <?php
                                                include("fcat.php");
                                                ?>
                                        </ul>
                                </div>
                        </div>
                        <nav class="navbar navbar-dark bg-dark">
                                <div class="container-fluid">
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <br>
                                </div>
                        </nav>
                        <nav class="col d-flex justify-content-end">
                                <a href="adminLogin.php"><button class="btn btn-danger text-light">Admin</button></a>
                        </nav>
                        <br>
                </div>
                <br>
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
                                ?>
                        </p>
                </div>
        </div>
</div>


<br><br>

<?php include('footer.php'); ?>