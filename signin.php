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

            header("Location: index.php");
        } else {
            echo '<script>alert("Invalid Email ID and Password"); document.location = "index.php";</script>';
        }
    }
}
?>
