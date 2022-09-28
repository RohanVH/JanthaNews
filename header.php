<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewsJantha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="path/to/pyscript.css" />
    <script defer src="path/to/pyscript.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Jantha News favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar Start -->
    <div class="content">
        <div class="container-fluid">
            <div class="row align-items-center bg-light bg-dark">
                <div class="col-9">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-white text-center py-1 p-1"><span class="h3 text-light align-items-center">News Headlines</span></div>
                        <!-- <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;"> -->
                        <div class="col d-flex justify-content-end">

                            <marquee behavior="" direction="" scrollamount="1" loop="infinite">
                                <p class="text-light text-center my-1 d-flex justify-content-end">

                                    <?php
                                    include('scraping.php');
                                    if (true) {

                                        foreach ($html->find('div.detail') as $ele) {
                                            echo $ele->plaintext . ' ';
                                        }
                                    }
                                    ?>
                                </p>
                            </marquee>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col text-end d-flex justify-content-end">
                    <div class="d-flex justify-content-end">
                        <h5 style="cursor:pointer;color:white;">
                            <span id="date"></span>
                            &nbsp;

                            <span id="time"></span>
                        </h5>
                        <script src="js/datatime.js"></script>
                    </div>
                </div>
            </div>
            <div class="row align-items-center py-2 px-lg-5 bg-light">
                <div class="col-lg-4">
                    <a href="" class="navbar-brand d-none d-lg-block">
                        <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Jantha</h1>
                    </a>
                </div>
                <div class="col-md text-lg-center">
                    <h1 class="blink_me">LIVE</h1>
                </div>


                <div class="col text-lg-right">
                    <link rel="stylesheet" href="css/darkmode.css">
                    <img src="img/dark1.png" onclick="myFunction()" id="dark" />
                    <script src="js/darkmode.js"></script>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid p-0 mb-3 ">
            <nav class="navbar navbar-expand-lg bg-dark navbar-light py-2 py-lg-0 px-lg-5">
                <a href="homepage.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Jantha</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="homepage.php" class="nav-item nav-link text-light">Home</a>
                        <a href="homepage.php" class="nav-item text-light nav-link active">News</a>
                        <a href="gallery.php" class="nav-item nav-link text-light">Gallery</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <?php include('fetch_categories.php'); ?>
                            </div>  
                        </div> -->
                        <a href="contact.php" class="nav-item nav-link text-light">Contact</a>
                    </div>
                    <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                        <input type="text" class="form-control" placeholder="Keyword">
                        <div class="input-group-append">
                            <button class="input-group-text text-secondary"><i class="fa fa-search"></i></button>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <br>
        <!-- Navbar End -->