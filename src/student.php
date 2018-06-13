
<?php 
$S_FN = $_POST['S_FN'];
$S_G = $_POST['S_G'];			
$S_BDAY = $_POST['S_BDAY'];			
$S_PROG = $_POST['S_PROG'];




$conn = new mysqli('localhost','root','','student') or die ('Error connecting to mysql' .mysqli_error());		

$sql = "INSERT INTO student (S_FN,S_G,S_BDAY,S_PROG) VALUES ('$S_FN','$S_G','$S_BDAY', '$S_PROG')";

mysqli_query($conn,$sql);


	echo $S_FN;
	echo $S_G;


	if (mysqli_query($conn,$sql)){
				echo "Successfully connected!";
			} else {
				echo "Error" . mysqli_error($conn);
			}

			if(!empty($S_FN)) {
				$runerror = 'Please enter your name.'; 
				$valiD = false;
			}

			if(empty($S_G)) {
				$runerror = 'Please enter your gender!'; 
				$valiD = false;
			}
			if(empty($S_BDAY)) {
				$runerror = 'Please enter your birth date!'; 
				$valiD = false;
			}
			if(empty($S_PROG)) {
				$runerror = 'Please enter your selected program!'; 
				$valiD = false;
			}
?>
