<?php $page_name='Schedule'; ?>
<?php include 'layout/header.php' ?>
<?php include 'layout/nav_light.php' ?>
<link href="css/schedule.css" rel="stylesheet">
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-69265245-1', 'auto');
	ga('send', 'pageview');
</script>
<!-- Main Content -->
<?php include 'schedule_data.php';?>
<div class="container">
	<div class="row">
		<h1 class="text-center">Schedule</h1>
		<hr>

<?php 
$counter = 0;
foreach ($schedule as $row) {
	echo '<div class="panel-group">';
	echo '<div class="panel panel-default">';
	echo '<a data-toggle="collapse" href="#collapse'.$counter.'">';
	echo '<div class="panel-heading">';
	echo '<table>';
	echo '<tr>';
	echo '<td class="schedule-date">'.$row['date'].'<br><span class="day-of-week">'.$row['day_of_week'].'<span></td>';
	echo '<td class="schedule-time">'.$row['start_time'].'<br>'.$row['end_time'].'</td>';
	echo '<td class="schedule-title '.$row['type'].'">'.$row['title'].'<br><span class="event-type">'.ucwords($row['type']).'</span></td>';
	echo '<td class="schedule-venue">'.$row['venue'].'</td>';
	echo '</tr>';
	echo '</table>';
	echo '<hr>';
	echo '</div>';
	echo '</a>';
	echo '<div id="collapse'.$counter.'" class="panel-collapse collapse">';
	echo '<div class="panel-body">'.$row['description'].'</div>';
	echo '<hr>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	$counter++;
}
?>
  
</div>
</div>
<!-- End of Main Content -->
<?php include 'layout/bottom.php' ?>
<script>
	$(document).ready(function() {
		var anchor = window.location.hash.replace("#", "");
		$(".collapse").collapse('hide');
		$("#" + anchor).collapse('show');
	});
</script>