<style>
    div,
    p,
    .h6,
    div.card,
    .card-body,.card-text {
        word-wrap: break-word;
        word-break: break-all;

    }
</style>
<?php include("header.php"); ?>
<div class="row row-cols-1 row-cols-md-2 g-4 border border-3 text-center d-flex-justify-content-center" style="background-color:black;padding: 60px;">
    <?php
    include("db_config.php");
    $fetch_query = "SELECT * from datafile ORDER BY id DESC";
    $sql = mysqli_query($connectdb, $fetch_query);
    $row = mysqli_num_rows($sql);
    if ($row > 0) {
        while ($video = mysqli_fetch_assoc($sql)) {


    ?>
            <div class="col-sm-4  d-flex justify-content-center text-center text-light" style="">
                <div class="row g-0 bg-dark">
                    <div class="col-lg-4">
                        <img src="uploads/<?= $video["file_url"] ?>" class="img-fluid rounded-start" alt="..." onerror=this.src="logo/noimage.gif" id="<?= $video["subject"] ?>" style="width:203px;height:200px;border-radius:2%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-danger" id="<?= $video["subject"] ?>"><?= $video["subject"] ?></h5>
                            <hr style="color:black;">
                            <p class="card-text"><?= $video["content"] ?></p>
                            <p class="card-text"><small class="text-muted d-flex justify-content-end">-<?= $video["categories"] ?></small></p>
                        </div>
                    </div>
                </div>
            </div>


    <?php
        }
    } else {
        echo '<li class="nav-item btn btn-outline-danger text-danger">';
        echo "No Categories";
        echo "</li>";
    }
    ?>
</div>
<?php include("footer.php"); ?>