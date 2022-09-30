<style>
    @media screen and (min-width: 12rem) {
        #title {
            font-size: 15px;
        }
    }

    @media screen and (min-height: 25px) {
        #title {
            font-size: 20px;
        }
    }

    #img {
        z-index: 0;
        transition: transform .2s;
        /* Animation */
        margin: 0 auto;
        resize: both;

    }

    #img:hover {
        transform: scale(1.1);
    }
</style>
<div class="row row-cols-1 row-cols-md-5 g-4 border border-3 text-center d-flex-justify-content-center" style="background-color:black;padding: 60px;">
    <?php
    include "db_config.php";
    $sql = "SELECT * FROM datafile ORDER BY id DESC";
    $res = mysqli_query($connectdb, $sql);

    if (mysqli_num_rows($res) > 0) {
        while ($video = mysqli_fetch_assoc($res)) {

    ?>

            <div class="col-sm-4 d-flex justify-content-center text-center text-light">
                <a href="<?= $video['categories'] ?>.php">
                    <div id="img" class="card bg-light" style="width: 13rem;border:ridge;border-color:white;">
                        <img src="uploads/<?= $video['file_url'] ?>" class="card-img-top d-flex center" alt="..." style="width:203px;height:200px;border-radius:2%;">
                        <!-- <div class="card-body" style="width:400px;height:200px;"> -->
                        <!-- <p class="card-text"><?= $video['content'] ?></p> -->
                        <!-- </div> -->
                        <div class="container card-body text-center" style="width: 13rem;">
                            <p class="card-title text-center text-danger" style="width:100%;height:1%;"><u class="h3 text-danger" id="title"><?= $video['subject'] ?></u></p>
                            <hr style="color:black;">
                            <p class="h6 card-text text-muted d-flex justify-content-end">-<?= $video['categories'] ?></p>
                        </div>
                    </div>
                </a>
            </div>

        <?php
        }
        
        echo "</div>";
    } else {
        ?>
        <div class="carousel-item active justify" data-bs-interval="2000">
            <img src="logo/noimage.gif" class="d-block w-100" alt="error" style="width:200px;height:250px;">
            <?php
            echo "<h4 class='text-danger text-center'><br>No Data Found</h4>";
            ?>
        </div>
        <br>
    <?php
    }
    ?>