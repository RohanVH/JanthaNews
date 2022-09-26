<?php
    include("db_config.php");
    $fetch_query="SELECT * from category";
    $sql = mysqli_query($connectdb, $fetch_query);
    if($sql){
        while ($row = mysqli_fetch_assoc($sql)) {
            $list = $row['categories'];
            echo '<li name="itemlist">';
            echo '<a class="dropdown-item" href="#">';
            echo $list;
            echo "</a>";
            echo "</li>";
        }
    }
?>