<?php
	$title = "Contact";
	$pageClass = "content";
	$mainImage ="contact.jpg";
?>
<?php include('header.php'); ?>

		<div class="cell">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple"><h1><?php echo $title; ?></h1></div>

			<div class="col-sm-3 hidden-xs red"></div>
			<div class="col-sm-6 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>

		</div>
		<div class="col-sm-12 text">
			<div class="col-sm-4 hidden-xs"><img src="img/<?php echo $mainImage; ?>" class="img-responsive" alt=""></div>
			<div class="col-sm-6">
				<p>Jordan Coulombe – ACCM Communications Coordinator<br />
				Chris Lau – ACCM Executive Director<br />
				<a href="mailto:artsida@accmontreal.org">artsida@accmontreal.org</a><br />
				514-529-9462</p>
			</div>
		</div>
<?php include('footer.php');?>
