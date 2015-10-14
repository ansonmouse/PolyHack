<?php $page_name='FAQ'; ?>
<?php include 'layout/header.php' ?>
<?php include 'layout/nav_light.php' ?>
<link href="css/faq.css" rel="stylesheet">
<!-- Main Content -->
<?php include 'faq_questions.php';?>
<div class="container">
	<div class="row">
		<h1 class="text-center">The PolyHack in Detail</h1>
		<hr>
		<div class="container-fluid text-center">
			<div class="row">
			<div class="col-sm-12 col-md-6">
			<a type="button" href="#general-info" class="btn btn-link faq-jump-button page-scroll" style="background-image: url(image/general-info.svg)">General<br>Information</a>
			<a type="button" href="#registration" class="btn btn-link faq-jump-button page-scroll" style="background-image: url(image/registration.svg)">Registration<br>& Attendance</a>
			</div>
			<div class="col-sm-12 col-md-6">
			<a type="button" href="#transportation" class="btn btn-link faq-jump-button page-scroll" style="background-image: url(image/transportation.svg)">Transportation</a>
			<a type="button" href="#emergency" class="btn btn-link faq-jump-button page-scroll" style="background-image: url(image/emergency.svg)">Emergency</a>
			</div>
			</div>
		</div>
		<section id="general-info" class="section-scroll">
			<div class="container">
				<div class="row">
					<h2>General Information</h2>
					<?php generateFAQ($general_info); ?>
				</div>
			</div>
		</section>
		<section id="registration" class="section-scroll">
			<div class="container">
				<div class="row">
					<h2>Registration and Attendance</h2>
					<?php generateFAQ($registration); ?>
				</div>
			</div>
		</section>
		<section id="transportation" class="section-scroll">
			<div class="container">
				<div class="row">
					<h2>Transportation</h2>
					<?php generateFAQ($transportation); ?>
				</div>
			</div>
		</section>
		<section id="emergency" class="section-scroll">
			<div class="container">
				<div class="row">
					<h2>Emergency</h2>
					<?php generateFAQ($emergency); ?>
				</div>
			</div>
		</section>
	</div>
</div>

<?php 
function generateFAQ($type) {
	$amount = count($type);
	$count = 1;
	$colOpen = false;
	foreach ($type as $row) {
		if ($colOpen == false) {
			$colOpen = true;
			echo '<div class="col-sm-6">';
		}
		echo '<span class="question">'.$row['question'].'</span>';
		echo '<p><span class="answer">'.$row['answer'].'</span></p>';
		if ($count == $amount/2 || $count == ($amount/2)+0.5 || $count == $amount) {
			echo '</div>';
			$colOpen = false;
		}
		$count++;
	}
}
?>

<!-- End of Main Content -->
<?php include 'layout/bottom.php' ?>
