<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
    include("db_config.php");
    $fetch_query="SELECT * from category";
    $sql = mysqli_query($connectdb, $fetch_query);
    $row=mysqli_num_rows($sql);
    if($row>0){
        while ($row = mysqli_fetch_assoc($sql)) {

            $list = $row['categories'];
            echo '<option name="itemlist" class="text-center">';
            echo $list;
            echo "</option>";
        }    
    }
    else{
        echo '<option name="itemlist" class="text-center">';
        echo "No Categories";
        echo "</option>";
    }
?>