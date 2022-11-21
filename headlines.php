<?php
include_once("db_config.php");
$centent=$_POST['content'];
if(isset($_POST['submit']))
{
    $sql = "UPDATE breakingnews set content='$centent' where id=1";
    $res = mysqli_query($connectdb, $sql);      
    if($res){
        echo "<script>alert('updated...');document.location ='adminHome.php';</script>";
    }

}
?>