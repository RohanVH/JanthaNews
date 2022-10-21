<?php include('header.php');
//  * Author:    Name
//  * Created:   27.09.2022
//  * 
//  * (c) Copyright by Dword Core.
?>
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
        <div class="container-fluid text-center text-light" id="flashnews">
                <div class="col-auto border border-3 text-center d-flex-justify-content-center" style="background-color:black;">
                        <span style="position:relative;" class="h1 text-danger text-center"><u class="blink_me">Flash News</u></span>
                        <p class="text-light text-center">
                                <br>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="container col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php include('inshorts.php'); ?>

                                                <br>
                                        </marquee>
                                        <hr>
                                </div>
                                <div class="container col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php
                                                include("hindi_inshorts_news.php");
                                                ?>
                                                <br>
                                        </marquee>
                                        <hr>
                                </div>
                                <div class="container col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                
                                                <?php
                                                include_once('phpDOM/simple_html_dom.php');
                                                include("kannadanews.php");
                                                ?>
                                                <br>
                                        </marquee>
                                        <hr>
                                </div>
                        </div>
                        </p>
                </div>
                <br>
                <br>
                <?php include("newscontainer.php"); ?>
                <br>
                <br>
        </div>
</div>
<br>



<?php include('footer.php'); ?>