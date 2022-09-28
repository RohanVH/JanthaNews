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
<div class="container">
        <div style="width:400px; height:400px">
                <div class="row container d-flex justify-content-betweeen">
                        <div class="col-auto border border-3 text-center">
                                <span style="position:relative;" class="h3 text-danger text-center"><u class="blink_me">Flash News</u></span>
                                <p class="text-dark text-center">
                                        <br>
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php
                                                include('inshorts.php');
                                                ?>
                                                <br>
                                        </marquee>
                                </p>
                        </div>
                </div>


        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img src="..." class="d-block w-100" alt="...">
                        </div>
                        
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                </button>
        </div>
</div>
</div>

<?php include('footer.php'); ?>