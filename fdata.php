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


<div class="alb">
    <?php
    include "db_config.php";
    $sql = "SELECT * FROM datafile ORDER BY id DESC";
    $res = mysqli_query($connectdb, $sql);

    if(mysqli_num_rows($res) > 0) {
        while ($video = mysqli_fetch_assoc($res)>0) {

    ?>
            <div class="column">

                <figure>
                    <img src="uploads/<?= $video['file_url'] ?>" class="img-fluid img-thumbnail">
                    <figcaption>
                        <blockquote class="text-center text-light"><?= $video['subject'] ?></blockquote>

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
            <?php
            echo "<h4 class='text-danger text-center'><br>No Data Found</h4>";
            ?>
        </div>
        <br>
    <?php
    }
    ?>
    <br>
    <br>
</div>



