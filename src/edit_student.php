
<?php
require 'header.php';
require '../lib/dbconnect.php';


// 	try {

   
// 	$S_ID = isset($_POST['S_ID']) ? $_POST['S_ID'] : ""; 
// 	$query = 'SELECT * FROM student WHERE S_ID = :S_ID';
// 	$statement = $conn->prepare($query);
// 	$statement->execute([':S_ID' => $S_ID]);
// 	$student = $statement->fetch(PDO::FETCH_OBJ);
// } catch (PDOException $e) {
//     echo 'PDO Failed: ' . $e->getMessage();
// }


?>
<html>
	<head>
	
	</head>

		<body>
			<div class = "container">
				<div class = "card">
					<div class = "card-header">
						<?php 
						require '../lib/dbconnect.php';
						$q = "SELECT * FROM `student` WHERE `S_ID` = $_GET["S_ID"] && `S_FN` = $_GET["S_FN"]";
						
						?>

						<h3>College of Information Technology</h3>
						<h3>Update student record</h3>
					</div>

					<div class = "card-body">
						<form method="POST">
							<div class = "form-group" action = "edit_student.php">
							<thead>

								<tr>Fullname:<input type = "text" name = "S_FN" id = "S_FN" class = "form-control" placeholder="your name here" required autocomplete="off" value = "<? $S_ID = $_POST[]?>"> </tr>
							</div>
							<div class = "form-group">
									<tr>Gender: <Select name = "S_G" required value = "<?=$student->S_G; ?>">
										<option selected="select" disabled="true">--Select--</option>
										<option value = "Male">Male</option>
										<option value = "Female">Female</option>
									</Select></tr>
								</div>
								<div class = "form-group">
										<tr>Birth Date: <input type="date" name="S_BDAY" id = "S_BDAY" required > </tr><br/>
								</div>

											<div class = "form-group">
												<tr>Program: <Select name = "S_PROG" required>
													<option selected="select" disabled="true">--Select--</option>
													<option value = "BSCS">BSCS</option>
													<option value = "BSIT">BSIT</option>
													<option value = "BSIS">BSIS</option>
													<option value = "BSEMC">BSEMC</option>
												</Select></tr>
											</div>
										<button type = "submit" name = "button" class = "btn btn-info">Submit</button>
								</thead>
							</div>
						</form>
					</div>
				</div>
			</div>
		</body>


</html>