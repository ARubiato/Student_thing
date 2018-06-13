<?php 

require 'header.php';
require '../lib/dbconnect.php';

$BSCS = mysqli_query($conn, "SELECT COUNT(S_ID) AS Total FROM student WHERE `S_PROG` = 'BSCS' ");
$BSIT = mysqli_query($conn, "SELECT COUNT(S_ID) AS Total FROM student WHERE `S_PROG` = 'BSIT' ");
$BSIS = mysqli_query($conn, "SELECT COUNT(S_ID) AS Total FROM student WHERE `S_PROG` = 'BSIS' ");
$BSEMC = mysqli_query($conn, "SELECT COUNT(S_ID) AS Total FROM student WHERE `S_PROG` = 'BSEMC' ");

?>		


<!DOCTYPE html>
<html>
<head>
	<script src="../js/canvasjs.min.js"></script>
<script src = "../js/chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
	<title><?php echo 'Generate reports';?></title>
</head>
<body>
	<div class = "container">
		<div class = "card">
			<div class = "card-header">
				<h2>VIEW LIST OF STUDENTS PER COURSE</h2>
			</div>
			<div class = "card-body">
				<canvas id = "stChart"></canvas>
			</div>
		</div>
	</div>
		<script>
				let st = document.getElementById('stChart').getContext('2d');
		         Chart.defaults.global.defaultFontFamily = 'Raleway';
   				 Chart.defaults.global.defaultFontSize = 18;
   				 Chart.defaults.global.defaultFontColor = '#777';

				let studentChart = new Chart(stChart, {
					  type: 'bar',
						  data: {
						    labels: ['Student Population'],
						    datasets: [{
						      
						      label: 'BSCS',
						      backgroundColor: "rgba(54, 162, 235, 0.6)",
						      
						      data: [<?php while ($cs = mysqli_fetch_array($BSCS)) { echo '"' . $cs['Total'] . '",';}?>]
						    }, {
						      label: 'BSIT',
						      backgroundColor: "rgba(54, 162, 235, 0.6)",
						      data: [<?php while ($it = mysqli_fetch_array($BSIT)) { echo '"' . $it['Total'] . '",';}?>]
						    }, {
						      label: 'BSIS',
						      backgroundColor: "rgba(255, 206, 86, 0.6)",
						      data: [<?php while ($is = mysqli_fetch_array($BSIS)) { echo '"' . $is['Total'] . '",';}?>]
						    }, {
						    	label: 'BSEMC',
						    	backgroundColor: "rgba(75, 192, 192, 0.6)",
						    	data: [<?php while ($is = mysqli_fetch_array($BSEMC)) { echo '"' . $is['Total'] . '",';}?>]
						    }]
						  },
											

				options: {
					title: {
						display:true,
						label: 'Programs Population',
						fontSize:25
					},

					legend:{
						position:'right',
						labels: {
							fontColor:'#000'
						}
					},
					layout: {
						padding:{
							left:50,
							right:0,
							bottom:0,
							top:0
						}	
					},
					scales: {
						xAxes:[{
							display: true,
							scaleLabel: {
								display: true,
							}
						}],
						yAxes:[{
							display: true,
							ticks: {
								beginAtZero:true,
								max:10
							}
						}]
					}
				}
			});	

		</script>
</body>


</html>