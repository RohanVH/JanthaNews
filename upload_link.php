<?php
include("db_config.php");
$link=$_POST['link'];
if(isset($_POST['submit'])){
    $sql="INSERT into youtube values('','$link')";
    $send=mysqli_query($connectdb,$sql);
    if($send){
        echo "<script>alert('updated...');document.location ='adminHome.php';</script>";
    }
}
if(isset($_POST['clear'])){
    $sql="TRUNCATE TABLE `newsjantha`.`youtube`";
    $send=mysqli_query($connectdb,$sql);
    if($send){
        echo "<script>alert('videos deleted...');document.location ='adminHome.php';</script>";
    }

}
?>