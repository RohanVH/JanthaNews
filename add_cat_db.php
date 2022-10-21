<!-- /**
 * Author:    Name
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
 <?php
    include("db_config.php");
    $add=$_POST['addcat'];
    if(isset($_POST['add'])){
        
        $insertion="INSERT into category values('$add')";
        $inserted=mysqli_query($connectdb,$insertion);  
        if($inserted){
            include('fcat.php');
            echo "<script>alert('$add added to categories.');document.location ='adminHome.php';</script>";
        }
        else{
            echo "<script>alert('ERROR: Somthing went wrong.');document.location ='adminHome.php';</script>";

        }
    }

?>