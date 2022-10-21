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
                echo '<li class="nav-item text-center">';
                echo '<a class="nav-link btn btn-outline-danger" href='.$list.'.php>';
                            echo $list;
                echo "</a></li>";
      
                
            }
       
            fwrite($myfile, $footerInclude);
    }
    else{
        echo '<li class="nav-item btn btn-outline-danger text-danger">';
        echo "No Categories";
        echo "</li>";
    }
    ?>