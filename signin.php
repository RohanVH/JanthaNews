<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
include 'db_config.php';
if (isset($_POST['submit'])) {
    $emails = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from signin";
    $result = mysqli_query($connectdb, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($emails == $row['email'] && $password == $row['password']) {
            session_start();
            $_SESSION['emails'] = $emails;
            header("Location: intro_admin.php");
        } else {
            echo '<script>alert("Invalid Email ID and Password"); document.location = "adminLogin.php";</script>';
        }
    }
}
?>
