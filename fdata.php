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
<h1 class="text-center text-light"><u class="text-danger"><span class="text-danger">G</span><span class="text-light">allery </span></u></h1>

<br>
<br>
<br>
<br>
<div class="alb">
    <?php
    // include("db_config.php");
    // $sql = "SELECT * FROM upload";
    // $result = mysqli_query($connectdb, $sql) or die("<b>Error:</b> Problem on Retrieving Image<br/>" . mysqli_error($connectdb));
    // $row = mysqli_fetch_array($result);
    // $rowcount = mysqli_num_rows($result);
    // if ($row) {
    //     while ($row = mysqli_fetch_array($result)) {
    //         // header("Content-Type: image/jpeg");
    //         echo "<div class='col-auto'>";
    //         // echo $row["data"];
    //         echo '<img class="size" src="data:image/jpeg;base64,' . base64_encode($row['data']) . '"/>';
    //         echo "</div>";
    //     }
    // }
    // mysqli_close($connectdb);
    include "db_config.php";
    $sql = "SELECT * FROM datafile ORDER BY id DESC";
    $res = mysqli_query($connectdb, $sql);

    if (mysqli_num_rows($res) > 0) {
        while ($video = mysqli_fetch_assoc($res)) {
    ?> <div class="container d-flex justify-content-center rounded float-left ">
                <figure>
                    <img src="uploads/<?= $video['file_url'] ?>" class="img-fluid d-flex justify-content-center">
                    <figcaption>
                        <blockquote class="text-center text-light"><?= $video['subject'] ?></blockquote>
                        <blockquote class="text-center text-light"><?= $video['content'] ?><hr></blockquote>
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
