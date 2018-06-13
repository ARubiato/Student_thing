<!DOCTYPE html>

<?php

$S_FN = isset($_GET['S_FN']) ? $_GET['S_FN'] : "";
$S_G = isset($_GET['S_G']) ? $_GET['S_G'] : "";			
$S_BDAY = isset($_GET['S_BDAY']) ? $_GET['S_BDAY'] : "";			
$S_PROG = isset($_GET['S_PROG']) ? $_GET['S_PROG'] : "";

$conn = new mysqli('localhost','root','','student') or die ("ERROR CONNECTING TO DATABASE!" .mysqli_error());
$upquery = "UPDATE student SET ($S_FN = 'S_FN', $S_G = 'S_G', $S_BDAY = 'S_BDAY', $S_PROG = 'S_PROG')";

mysqli_query($conn,$upquery);

?>

<html>
	<head>
		<title> <?php echo "Update student record";?></title>
	</head>	
	<body>
		<h3>UPDATE STUDENT FORM</h3>
		

	</body>
</html>