<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewsJantha -Homepage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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

                            <marquee behavior="" direction="" scrollamount="3">
                                <p class="text-light text-center my-1 d-flex justify-content-end">

                                    <?php
                                    include('scraping.php');
                                    foreach ($html->find('li.clearfix') as $ele) {
                                        echo $ele->plaintext . '&nbsp;&nbsp;';
                                        foreach ($html->find('li.clearfix') as $ele) {
                                            echo $ele->plaintext . '&nbsp;&nbsp;';
                                            foreach ($html->find('li.clearfix') as $ele) {
                                                echo $ele->plaintext . '&nbsp;&nbsp;';
                                            }
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
                <a href="" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Jantha</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.html" class="nav-item nav-link text-light">Home</a>
                        <a href="category.html" class="nav-item text-light nav-link active">News</a>
                        <a href="single.html" class="nav-item nav-link text-light">Single News</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="#" class="dropdown-item">Menu item 1</a>
                                <a href="#" class="dropdown-item">Menu item 2</a>
                                <a href="#" class="dropdown-item">Menu item 3</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link text-light">Contact</a>
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
        <!-- Navbar End -->

        <div class="row">
            <div class="col justify-content-end">
                <!-- google translator -->
                <div id="google_element"></div>
                <script src="https://translate.google.com/translate_a/element.js?cb=adGoogleTranslate"></script>
                <script>
                    function loadGoogleTranslate() {
                        new google.translate.TranslateElement("google_element");
                    }
                </script>
            </div>
        </div>

        <br>
        <br>

        <br><br>
        <br>
        <br>

        <br><br>
        <br>
        <br>

        <br><br>
        <br>
        <br>

        <br><br>
        <!-- Footer Start -->
        <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <img src="logo/N.gif" alt="NewsJantha Intro" style="background-repeat:no-repeat;width:100%">
                    </a>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="font-weight-bold mb-4">Categories</h4>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="font-weight-bold mb-4">News links</h4>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 justify-content-end">
                    <h4 class="font-weight-bold mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy &
                            policy</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms &
                            conditions</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4 px-sm-3 px-md-5">
            <p class="m-0 text-center">
                &copy; <a class="font-weight-bold" href="#">NewsJantha</a>. All Rights Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed by <a class="font-weight-bold" href="">Dword Core</a>
            </p>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </div>

    <!-- Modal -->
    <!-- <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">
            <center>
                <img id="myVideo" src="logo/N.gif" >
                 <source src="logo/N.mp4" type="video/mp4">
                </video> -->
    <!-- </center>
        </div>
    </div>
    <script src="js/intro.js"> </script> -->

</body>

</html>