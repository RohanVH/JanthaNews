<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
// /* [INIT] */
// require "config.php";
// if(isset($_POST['submit'])){
// 	$subject=$_POST['subject'];
// 	$content=$_POST['content'];
// 	$cat_val=$_POST['cat_val'];

// 	/* [ERROR CHECKING] */
// 	if ($_FILES['upFile']['size']==0) { die("No file selected"); }
// 	if (exif_imagetype($_FILES['upFile']['tmp_name'])===false) { die("Not an image"); }

// 	/* [CONNECT TO DB] */
// 	$pdo = new PDO(
// 	"mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
// 	DB_USER, DB_PASSWORD, 
// 		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
// 	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
// 	PDO::ATTR_EMULATE_PREPARES => false]
// 	);

// 	/* [INSERT IMAGE] */
// 	// DO MORE ERROR CHECKING & HANDLING HERE IF YOU WANT
// 	try {
// 		$stmt = $pdo->prepare("INSERT INTO `upload` (`categories`,`subject`,`content`,`name`, `data`) VALUES ('$cat_val','$subject','$content',?, ?)");
// 		$stmt->execute([$_FILES["upFile"]["name"], file_get_contents($_FILES['upFile']['tmp_name'])]);
// 	} catch (Exception $ex) {
// 		if($ex->getMessage()){
// 			echo "<script>alert('ERROR: File size is too large.');document.location='adminHome.php';</script>";
// 		}
// 		die();
// 	}

// 	/* [ON COMPLETE] */
// 	echo "<script>alert('Uploaded.');document.location ='adminHome.php';</script>";

// }
include("db_config.php");
if (isset($_POST['submit']) && isset($_FILES['upFile'])) {
	include "db_conn.php";
	$video_name = $_FILES['upFile']['name'];
	$tmp_name = $_FILES['upFile']['tmp_name'];
	$error = $_FILES['upFile']['error'];

	if ($error === 0) {
		$video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

		$video_ex_lc = strtolower($video_ex);

		$allowed_exs = array("mp4", 'webm', 'avi', 'flv' ,'jpeg','png', 'gif', 'jpg');

		if (in_array($video_ex_lc, $allowed_exs)) {

			$new_video_name = uniqid("IMG-", true) . '.' . $video_ex_lc;
			$video_upload_path = 'uploads/' . $new_video_name;
			move_uploaded_file($tmp_name, $video_upload_path);

			// Now let's Insert the video path into database
			$subject=$_POST['subject'];
			$content=$_POST['content'];
			$categories=$_POST['cat_val'];
			$sql = "INSERT INTO datafile(`categories`,`subject`,`content`,`file_url`)
                   VALUES('$categories','$subject','$content','$new_video_name')";
			mysqli_query($connectdb, $sql);
			header("Location: homepage.php");
		} else {

			header("Location: adminHome.php");
		}
	}
} 
else {
	header("Location: adminHome.php");
}
?>