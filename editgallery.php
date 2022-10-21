<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        min-height: 100vh;
    }

    video {
        width: 640px;
        height: 360px;
    }

    a {
        text-decoration: none;
        color: #006CFF;
        font-size: 1.5rem;
    }
</style>

<?php include('header.php'); ?>
<div class="container bg-dark">
    <br>
    <div class=" row g-3 align-items-center d-flex justify-content-center">
        <h1 class="text-center text-light"><u class="text-danger"><span class="text-danger">G</span><span class="text-light">allery </span></u></h1>
        <span style="background-color:black;"><a href="adminHome.php">
                <h3 class="text-light text-left">Back</h3>
            </a>
        </span>
        <br>
        <br>
        <br>
        <br>
        <div class="alb">
            <?php
            include "db_config.php";
            $sql = "SELECT * FROM datafile ORDER BY id DESC";
            $res = mysqli_query($connectdb, $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($video = mysqli_fetch_assoc($res)) {
            ?> <div class="column">

                        <figure>
                            <img src="uploads/<?= $video['file_url'] ?>" class="img-fluid img-thumbnail">
                            <figcaption>
                                <blockquote class="text-center text-light"><?= $video['subject'] ?></blockquote>
                                <blockquote class="text-center text-light"><?= $video['content'] ?>
                                    <hr>
                                </blockquote>
                            </figcaption>
                        </figure>
                        <!-- <video src="uploads/<?= $video['video_url'] ?>" controls>
                </video> -->
                    </div>


            <?php
                }
            } else {
                ?>
                <div class="carousel-item active justify" data-bs-interval="2000">
                    <img src="logo/noimage.gif" class="d-block w-100" alt="error" style="width:900px;height:400px">
                </div>
        <?php
                echo "<h4 class='text-danger text-center'>No Data Found<br> Please go back to previous page and upload content.</h4>";
            }
            ?>
            <br>
            <br>
        </div>
        <div style="background-color:black;">
            <a href="adminHome.php">
                <h3 class="text-light text-center">Click here to UPLOAD more content</h3>
            </a>
        </div>
    </div>
    <br>
</div>
<?php include('footer.php'); ?>
<style>
    .column {
        float: left;
        width: 25%;
        padding: 10px;
    }

    .column img {
        opacity: 0.8;
        cursor: pointer;
    }

    .column img:hover {
        opacity: 1;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>