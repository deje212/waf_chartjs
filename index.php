<!DOCTYPE html>
<html>
<head>
	<title>MODSEC</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>MODSEC - DATA </h2>
	</center>


	<?php
	include 'koneksi.php';
	?>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>



	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	  Chart.defaults.scale.gridLines.display = false;
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["OWASP_TOP_10_A1", "OWASP_TOP_10_A2","OWASP_TOP_10_A3","OWASP_TOP_10_A4","OWASP_TOP_10_A6","OWASP_TOP_10_A
7"],
				datasets: [{
					label: '',
					data: [
					<?php
					$OWASP_TOP_10_A1 = mysqli_query($koneksi,"select * from alert where full_log like '%OWASP_TOP_10/A1%'");
					echo mysqli_num_rows($OWASP_TOP_10_A1);
					?>,
					<?php
					$OWASP_TOP_10_A2 = mysqli_query($koneksi,"select * from alert where full_log like '%OWASP_TOP_10/A2%'");
					echo mysqli_num_rows($OWASP_TOP_10_A2);
					?>,
					<?php
					$OWASP_TOP_10_A3 = mysqli_query($koneksi,"select * from alert where full_log like '%OWASP_TOP_10/A3%'");
					echo mysqli_num_rows($OWASP_TOP_10_A3);
					?>
					,
					<?php
					$OWASP_TOP_10_A4 = mysqli_query($koneksi,"select * from alert where full_log like '%OWASP_TOP_10/A4%'");
					echo mysqli_num_rows($OWASP_TOP_10_A4);
					?>
					,
					<?php
					$OWASP_TOP_10_A6 = mysqli_query($koneksi,"select * from alert where full_log like '%OWASP_TOP_10/A6%'");
					echo mysqli_num_rows($OWASP_TOP_10_A6);
					?>
					,
					<?php
					$OWASP_TOP_10_A7 = mysqli_query($koneksi,"select * from alert where full_log like '%OWASP_TOP_10/A7%'");
					echo mysqli_num_rows($OWASP_TOP_10_A7);
					?>
					],
					backgroundColor: [
					'rgba(253, 38, 163, 1)',
					'rgba(54, 162, 235, 0.2)',
                                        'rgba(240, 254, 134, 1)',
					'rgba(38, 49, 253, 1)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(70, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(240, 254, 134, 1)',
					'rgba(38, 49, 253, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(70, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
		});
	</script>
</body>
</html>

