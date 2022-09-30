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
<div class="container-fluid bg-dark ">
        <br>
        <!-- <div class="container d-flex justify-content-center row" style="width:400px; height:400px">
                <div class="container-fulid d-flex justify-content-between" style="width:900px; height:400px">
                        <div class="col-auto border border-3 text-center bg-dark">
                                <span style="position:relative;" class="h3 text-danger text-center"><u class="blink_me">Flash News</u></span>
                                <p class="text-light text-center">
                                        <br>
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php
                                                // include('inshorts.php');
                                                ?>
                                                <br>
                                        </marquee>
                                </p>
                        </div> -->

        <!-- <div id="carouselExampleInterval" class="col-auto carousel slide" data-bs-ride="carousel" style="width:550px; height:400px">
                                <div class="carousel-inner" style="width:550px; height:400px">

                                        <?php
                                        // include("imageslide.php") 
                                        ?>
                                </div> -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                </button> -->
        <!-- </div> -->
        <!-- <div class="col-auto border border-3 text-center bg-dark d-flex justify-content-end">
                                <span style="position:relative;" class="h3 text-danger text-center"><u class="blink_me">Flash News</u></span>
                                <p class="text-light text-center">
                                        <br>
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php
                                                // if (true) {
                                                //         foreach ($html->find('div.detail') as $ele) {
                                                //                 echo '<b class="h5 text-light">' . $ele->plaintext . '</b><br><br>';
                                                //         }
                                                // }
                                                ?>
                                                <br>
                                        </marquee>
                                </p>
                        </div> -->


        <!-- </div>
        </div> -->
        <div class="container-fluid text-center text-light">
                <div class="col-auto border border-3 text-center d-flex-justify-content-center" style="background-color:black;">
                        <span style="position:relative;" class="h1 text-danger text-center"><u class="blink_me">Flash News</u></span>
                        <p class="text-light text-center">
                                <br>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php include('inshorts.php'); ?>

                                                <br>
                                        </marquee>
                                </div>
                                <div class="col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php
                                                include("hindi_inshorts_news.php");
                                                ?>
                                        </marquee>
                                </div>
                                <div class="col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php
                                                include("kannadanews.php");
                                                ?>
                                        </marquee>
                                </div>
                        </div>
                        </p>
                </div>
                <br>
                <br>
                <?php include("newscontainer.php");?>
                <br>
                <br>
        </div>
</div>
<br>



<?php include('footer.php'); ?>