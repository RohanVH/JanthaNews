<?php
include("db_config.php");
$cat=$_POST['select'];
if(isset($_POST['delete'])){
    $fetch_query = "DELETE from category where categories='$cat'";
    // $query= "DROP TABLE $cat";
    $sql = mysqli_query($connectdb, $fetch_query);
    // $sql_table = mysqli_query($connectdb, $query);
    if ($sql) {
        echo "<script>alert('$cat Deleted.');document.location ='adminHome.php';</script>";
    }
    else{
        echo "<script>alert('ERROR: Somthing went wrong.');document.location ='adminHome.php';</script>";
    }
}
?>