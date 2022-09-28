<div class="carousel-item active">
    <img src="..." class="d-block w-100">
</div>
<?php
include "db_config.php";
$sql = "SELECT * FROM datafile ORDER BY id DESC";
$res = mysqli_query($connectdb, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($video = mysqli_fetch_assoc($res)) {

?>
        <div class="carousel-item active">

            <img src="uploads/<?= $video['file_url'] ?>" class="d-block w-100" alt="...">
        </div>


<?php
    }
} else {
    echo "<h4 class='text-danger text-center'>No Data Found<br> Please go back to previous page and upload content.</h4>";
}
?>