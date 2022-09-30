<?php
include "db_config.php";
$sql = "SELECT * FROM datafile ORDER BY id DESC";
$res = mysqli_query($connectdb, $sql);

if (mysqli_num_rows($res) > 0) {
    if ($video = mysqli_fetch_assoc($res)) {

?>
        <div class="carousel-item active justify" data-bs-interval="2000">
            <img src="uploads/<?= $video['file_url'] ?>" class="d-block" alt="error" style="width:550px; height:400px">
        </div>
    <?php
    }
    while ($video = mysqli_fetch_assoc($res)) {
    ?>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="uploads/<?= $video['file_url'] ?>" class="d-block" alt="error" style="width:550px; height:400px">
        </div>


    <?php
    }
} else {
    // echo "<h4 class='text-danger text-center'>No Data Found<br> Please go back to previous page and upload content.</h4>";
    ?>
    <div class="carousel-item active justify" data-bs-interval="2000">
        <img src="logo/noimage.gif" class="d-block" alt="error" style="width:400px; height:400px">
    </div>
<?php
}
?>