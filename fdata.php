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

    if (mysqli_num_rows($res) > 0) {
        while ($video = mysqli_fetch_assoc($res)) {

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
        echo "<h4 class='text-danger text-center'>No Data Found<br> Please go back to previous page and upload content.</h4>";
    }
    ?>
    <br>
    <br>
</div>