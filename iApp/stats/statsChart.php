<?php
	session_start();
	$labels = $_SESSION['labels'];
	$likes = $_SESSION['likes'];
	$dislikes = $_SESSION['dislikes'];
?>
<!doctype html>
<html>
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
	</head>
	<body style="background-color: #000000;">
		<div style="position: absolute; top: 2%; left: 10%; width: 80%;">
			<canvas id="statsChart"></canvas>
		</div>


	<script>
		var lineChartData = {
			labels : <?php echo $labels; ?>,
			datasets : [
				{
					label: "Dislikes",
					fillColor : "rgba(231,76,60,0.2)",
					strokeColor : "rgba(231,76,60,1)",
					pointColor : "rgba(231,76,60,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(231,76,60,1)",
					data : <?php echo $dislikes; ?>
				},
				{
					label: "Likes",
					fillColor : "rgba(46,204,113,0.2)",
					strokeColor : "rgba(46,204,113,1)",
					pointColor : "rgba(46,204,113,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(46,204,113,1)",
					data : <?php echo $likes; ?>
				}
			]

		}

	window.onload = function(){
		var statsChart = document.getElementById("statsChart").getContext("2d");
		window.myLine = new Chart(statsChart).Line(lineChartData, {
    		animationEasing: "easeInQuad",
			animationSteps: 60,
			scaleGridLineColor : "rgba(255,255,255,0.05)",
  		  	scaleFontColor: "#FFFFFF",
			responsive: true,
		});
	}


	</script>
	</body>
</html>
