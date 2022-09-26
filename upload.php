<?php
/* [INIT] */
require "config.php";
if(isset($_POST['submit'])){
	$subject=$_POST['subject'];
	$content=$_POST['content'];
	$cat_val=$_POST['cat_val'];

	/* [ERROR CHECKING] */
	if ($_FILES['upFile']['size']==0) { die("No file selected"); }
	if (exif_imagetype($_FILES['upFile']['tmp_name'])===false) { die("Not an image"); }

	/* [CONNECT TO DB] */
	$pdo = new PDO(
	"mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
	DB_USER, DB_PASSWORD, 
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false]
	);

	/* [INSERT IMAGE] */
	// DO MORE ERROR CHECKING & HANDLING HERE IF YOU WANT
	try {
		$stmt = $pdo->prepare("INSERT INTO `upload` (`categories`,`subject`,`content`,`name`, `data`) VALUES ('$cat_val','$subject','$content',?, ?)");
		$stmt->execute([$_FILES["upFile"]["name"], file_get_contents($_FILES['upFile']['tmp_name'])]);
	} catch (Exception $ex) {
		if($ex->getMessage()){
			echo "<script>alert('ERROR: File size is too large.');document.location='adminHome.php';</script>";
		}
		die();
	}

	/* [ON COMPLETE] */
	echo "<script>alert('Uploaded.');document.location ='adminHome.php';</script>";

}
