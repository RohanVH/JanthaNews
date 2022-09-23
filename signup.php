<?php 

include 'db_config.php';

if (isset($_POST['submit'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];	
	$contactno = $_POST['contactno'];	
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM signup WHERE email='$email'";
		$result = mysqli_query($connectdb, $sql);

		if (!$result->num_rows > 0) {				
			
            $sql = "INSERT INTO signup (name, email,contactno,password,cpassword)VALUES ('$username', '$email', '$contactno','$password','$cpassword')";
            $result = mysqli_query($connectdb, $sql);
            if ($result) {
                    $sql = "INSERT INTO signin (email,password) VALUES ('$email', '$password')";
                    $res = mysqli_query($connectdb, $sql);    
                if ($res){
					echo '<script>alert("Successfully Account created"); document.location = "userLogin.php";</script>';
					// header("Location: userLogin.php");
                    }
                } 
            else {
                    echo "<script>alert('Something Wrong Went.')</script>";
            }	
			
		}

		else {
			echo "<script>alert('Account already Exists.')</script>";
		}
	}
		
	else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
