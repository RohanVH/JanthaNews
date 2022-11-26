<?php include('header.php');
//  * Author:    Name
//  * Created:   27.09.2022
//  * 
//  * (c) Copyright by Dword Core.
?>
<div class="container-fluid bg-dark">
        <div class="col-lg">
                <div class="">
                        <div class="collapse" id="navbarToggleExternalContent">
                                <div class="bg-dark p-2">
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
                        <div class="col text-end d-flex justify-content-end ">
                    <div class="d-flex justify-content-end">
                        <h5 style="cursor:pointer;color:black;font-size: 15px;">
                            <span id="date" style="color:white;"></span>
                            &nbsp;

                            <span id="time" style="color:white;"></span>
                        </h5>
                        <script src="js/datatime.js"></script>
                    </div>
                </div>
                        <div class="col-md text-lg-center d-flex justify-content-center container rounded-pill" style="background-color:white;">
                                <h1 class="blink_me">LIVE</h1>
                        </div>
                        <br>
                        <br>
                </div>
        </div>
</div>

</div>
<hr>
<div class="container-fluid bg-dark">
        <br>
        <div class="container-fluid text-center text-light" id="flashnews">
              <!--   <div class="col-auto border border-3 text-center d-flex-justify-content-center" style="background-color:black;">
                        <span style="position:relative;" class="h1 text-danger text-center"><u class="blink_me">Flash News</u></span>
                        <p class="text-light text-center">
                                <br>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="container col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php 
                                                // include('inshorts.php'); 
                                                ?>

                                                <br>
                                        </marquee>
                                        <hr>
                                </div>
                                <div class="container col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                <?php
                                                // include("hindi_inshorts_news.php");
                                                ?>
                                                <br>
                                        </marquee>
                                        <hr>
                                </div>
                                <div class="container col">
                                        <marquee behavior="scroll" direction="up" scrollamount="3" style="width:300px; height:300px">
                                                
                                                <?php
                                                // include_once('phpDOM/simple_html_dom.php');
                                                // include("kannadanews.php");
                                                ?>
                                                <br>
                                        </marquee>
                                        <hr>
                                </div>
                        </div>
                        </p>
                </div> -->
                <!-- <style>
                        .zoom {
                        transition: transform 0.3s ease-out; /* Animation */
                        
                        margin: 0 auto;
                        }

                        .zoom:hover {
                        transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                        }
                </style>
                <iframe class="zoom" width="300" height="200" src="https://www.youtube.com/embed/aGxqoz_WvxE?list=PLCneSXnzz-PciiT1kIjGvJxT5qsFkmnLY" title="ಜನತಾ ನ್ಯೂಸ್ ಕನ್ನಡ/Janatha News Kannada ಪತ್ರಿಕೆ ಹಾಗೂ ಚಾನಲ್ ಗೆ ಪ್ರೀತಿಯಿಂದ ಹರಸಿದ ಜೈ ಜಗದೀಶ್ ಸರ್.." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="zoom" width="300" height="200" src="https://www.youtube.com/embed/kJL8Fz1qQo0" title="ಸಾಯಲೂ ಸಿದ್ಧವಾದ ಕೆ.ಆರ್.ಎಸ್ ಪಾರ್ಟಿ..!|KRS PAERTY|KRS|RAVIKRISHNA REDDY|#janathanewskannada" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="zoom" width="300" height="200" src="https://www.youtube.com/embed/nry10boceF0?list=PLCneSXnzz-PciiT1kIjGvJxT5qsFkmnLY" title="ಅಭಿಷೇಕ್ ಅಂಬರೀಶ್ ಬಾಡಿಗಾರ್ಡ್ ಟೀಶರ್ಟ್ ಮೇಲೆ ಕ್ರಾಂತಿ..!|ABHISHEK AMBARISH|AMBARISH|FILMY|" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="zoom" width="300" height="200" src="https://www.youtube.com/embed/J1t_RYx5FP4?list=PLCneSXnzz-PciiT1kIjGvJxT5qsFkmnLY" title="ಜನತಾ ನ್ಯೂಸ್ ಕನ್ನಡ ಪತ್ರಿಕೆ ಹಾಗೂ ಚಾನಲ್ ಗೆ ಪ್ರೀತಿಯಿಂದ ಹರಸಿದ ಟಿ.ಪಿ ಸಿದ್ಧರಾಜು ಸರ್ ಗೆ ಧನ್ಯವಾದಗಳು .." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                        <br>
                        <br>
                <iframe class="zoom" width="300" height="200" src="https://www.youtube.com/embed/sRd5rEu8l0s?list=PLCneSXnzz-PeUzGhe6tGoGLTatuGxAz1K" title="ಮದ್ವೆ ಆಗಿದ್ಯಾ..?ಹೆಂಡತಿ ಮಕ್ಕಳು ಇದರಾ..!|ರೌಡಿಗಳಿಗೆ ಮಂಡ್ಯ ಎಸ್.ಪಿ ವಾರ್ನಿಂಗ್|MANDYA S P ROWDY PARADE|" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="zoom" width="300" height="200" src="https://www.youtube.com/embed/ML3lL0FcBts?list=PLCneSXnzz-Pdju-Edjp_zZMLRtXuKJTgA" title="ಇತಿಹಾಸ ತಿರುಗಿಸಿದ ಪಠ್ಯಪುಸ್ತಕ..!|ಸಿದ್ಧರಾಮಯ್ಯ|CHAKRA THEERTHA|#chakratirth #siddaramaiah #textbook" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="zoom" width="300" height="200" src="https://www.youtube.com/embed/51gdRokyhVc?list=PLCneSXnzz-Pdju-Edjp_zZMLRtXuKJTgA" title="ನಿರುದ್ಯೋಗಕ್ಕೆ ಕಾರಣ ತಿಳಿಸಿದ ರಾಹುಲ್ ಗಾಂಧಿ..!|RAHUL GANDHI|CONGRESS|CHITHRADURGA|UDYOGA SRISHTI|" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="zoom" width="300" height="200" src="https://www.youtube.com/embed/qwTWLVTJ3rc?list=PLCneSXnzz-Pdju-Edjp_zZMLRtXuKJTgA" title="ಡಾ.ಬಾಬಾ ಸಾಹೇಬ ಅಂಬೇಡ್ಕರ್ ಸೋಲಲು ಕಾರಣ ಯಾರು ಗೊತ್ತೇ..?|BSY|BJP|CONGRESS|SPEECH|BSYADAYURAPPA|MODI|BOMMAI|" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <br> -->
                                <?php
                                include_once("display_vdo.php");
                                ?>
                                        <br>
                                        <br>
                <?php 
                include("newscontainer.php"); 
                ?>
                <br>
                <br>
        </div>
</div>
<br>



<?php include('footer.php'); ?>