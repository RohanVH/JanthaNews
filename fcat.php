<?php
    include("db_config.php");
    $fetch_query="SELECT * from category";
    $sql = mysqli_query($connectdb, $fetch_query);
    $row=mysqli_num_rows($sql);
    if($row>0){
        while ($row = mysqli_fetch_assoc($sql)) {

            $list = $row['categories'];
            // Creating category php files
            $myfile = fopen("$list.php", "w") or die("Unable to open file!");
            $headerInclude = "<?php include('header.php');?>\n";
            $heading = "<center class='h1'><u class='text-danger'>".$list."</u></center>\n";
            $footerInclude = "<?php include('footer.php');?>\n";
            fwrite($myfile,$headerInclude);
            fwrite($myfile,$heading);
            fwrite($myfile,$footerInclude);
            ?>
            <li class="nav-item text-center">
            <?php   
            echo '<a class="nav-link btn btn-outline-danger" href='.$list.'.php>';
                        echo $list;
            echo "</a>";
            ?>
            </li>
    <?php
        }    
    }
    else{
        echo '<li class="nav-item btn btn-outline-danger text-danger">';
        echo "No Categories";
        echo "</li>";
    }
    ?>
