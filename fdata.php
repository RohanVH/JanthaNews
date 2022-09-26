<style>
    .size{
        /* width:  100%; */
        /* height: 100%; */
        }
</style>
<?php
include("db_config.php");
    $sql = "SELECT * FROM upload";
    $result = mysqli_query($connectdb, $sql) or die("<b>Error:</b> Problem on Retrieving Image<br/>" . mysqli_error($connectdb));
    $row = mysqli_fetch_array($result);
    $rowcount = mysqli_num_rows($result);
if ($row) {
    while ($row = mysqli_fetch_array($result)){
        // header("Content-Type: image/jpeg");
        echo "<div class='col-auto'>";
        // echo $row["data"];
        echo '<img class="size" src="data:image/jpeg;base64,' . base64_encode($row['data']) . '"/>';
        echo "</div>";
    }
}
mysqli_close($connectdb);
