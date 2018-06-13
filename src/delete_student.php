
			<?php 
			require '../lib/dbconnect.php';
			$q = $_GET['id'];
			echo $q;
			$query = "DELETE FROM `student` WHERE `student`.`S_ID` = $q";
			mysqli_query($conn,$query);
			?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Delete record";?></title>
</head>
<body>
	<div class = "container">
		<div class = "card">
			<div class = "card-header">

			</div>
			
		</div>
	</div>
</body>
</html>