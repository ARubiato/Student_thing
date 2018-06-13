
<?php require 'header.php'?>
<?php 
$conn = new mysqli('localhost','root','','student') or die ('Error connecting to mysql' .mysqli_error());		
$query = "SELECT * FROM student";
$results = mysqli_query($conn,$query);
$students = array();
while ($student = mysqli_fetch_object($results)) {
	$students[] = $student;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		View Students
	</title>
</head>
<body>
	<div class = "Container">
	<div class = "card">
		<div class = "card mt-5">
			<h4> List of enrolled students</h4>
		</div>
	<div class = "card card-body">
<table class = "table table-bordered" >
<thead>
			<tr>
				<th>Student ID</th>
				<th>Fullname</th>
				<th>Gender</th>
				<th>Birthdate</th>
				<th>Program/Course</th>
				<th>Action</th>
			</tr>
		</thead>
<tbody>

	<?php foreach($students as $student): ?>
		<tr>
			<td><?=$student->S_ID; ?> </td>
			<td><?=$student->S_FN; ?> </td>
			<td><?=$student->S_G; ?> </td>
			<td><?=$student->S_BDAY; ?> </td>
			<td><?=$student->S_PROG; ?> </td>
			<td><a href = "edit_student.php?id=<?= $student->S_ID?>" class = "btn btn-info">EDIT</a>
				<a href = "delete_student.php?id=<?= $student->S_ID?>" class = "btn btn-danger">DELETE</button>
			</td>
		
		</tr>

	<?php endforeach;?>

<?php
		function deleteFunction($a) {
			echo "ok";
			$query = "DELETE FROM `student` WHERE `student`.`S_ID` = $a ";
			mysqli_query($conn,$query);
			
	}

?>


</tbody>
</table>
</div>
</div>
</div>
</body>
</html>


