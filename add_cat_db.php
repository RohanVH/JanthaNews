<?php
    include("db_config.php");
    $add=$_POST['addcat'];
    if(isset($_POST['add'])){
        $query= "CREATE TABLE $add (
                    cat_id int NOT NULL AUTO_INCREMENT,
                    content varchar(100) NOT NULL,
                    PRIMARY KEY (cat_id)
                )";
        $insertion="INSERT into category values('$add')";
        $inserted=mysqli_query($connectdb,$insertion);  
        $sql=mysqli_query($connectdb,$query);
        if($inserted){
            echo "<script>alert('$add added to categories.');document.location ='adminHome.php';</script>";
        }
        else{
            echo "<script>alert('ERROR: Somthing went wrong.');document.location ='adminHome.php';</script>";

        }
    }

?>