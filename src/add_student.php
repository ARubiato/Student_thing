
<?php
require 'header.php';
require '../lib/dbconnect.php';

session_start();

if (!isset($_POST['submit'])) {
$S_FN = isset($_POST['S_FN']) ? $_POST['S_FN'] : "";
$S_G = isset($_POST['S_G']) ? $_POST['S_G'] : "";			
$S_BDAY = isset($_POST['S_BDAY']) ? $_POST['S_BDAY'] : "";			
$S_PROG = isset($_POST['S_PROG']) ? $_POST['S_PROG'] : "";
$sql = "INSERT INTO student (S_FN,S_G,S_BDAY,S_PROG) VALUES ('$S_FN','$S_G','$S_BDAY', '$S_PROG')";
mysqli_query($conn,$sql);
} else {
	header("location: view_Student.php");
}

// }
?>
<html>
	<head>
	
	</head>

		<body>
			<div class = "container">
				<div class = "card">
					<div class = "card-header">
						<h3>College of Information Technology</h3>
						<h3>Add a student</h3>
					</div>

					<div class = "card-body">
						<form method="POST">
							<div class = "form-group" action = "add_student.php">
							<thead>
								<tr>Fullname:<input type = "text" name = "S_FN" id = "S_FN" class = "form-control" placeholder="your name here" required autocomplete="off"> </tr>
							</div>
							<div class = "form-group">
									<tr>Gender: <Select name = "S_G" required>
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