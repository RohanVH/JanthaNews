<!DOCTYPE html>
<html>

<head>
    <meta charset=" utf - 8 " />
    <title> Blob File MySQL </title>
</head>

<body>
    <?php
    include('db_config.php');
    if (isset($_POST['btn'])) {
        $name = $_FILES['myfile']['name'];
        $type = $_FILES['myfile']['type'];
        $data = file_get_contents($_FILES['myfile']['tmp_name']);
        $s="insert into myblob values('','$name','$type',$data)";
        $stmt=mysqli_query($connectdb,$s);
    }
    ?>
    <form method="post" enctype="multipart/form-data">

        <input type="file" name="myfile" />
        <button name="btn"> Upload </button>
    </form>
</body>

</html>