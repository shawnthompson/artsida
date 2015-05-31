<?php
	$lang = "en";
	$title = "Sponsors";
	$pageClass = "sponsors";
	$mainImage = "sponsor-pic.jpg";
?>
<?php include('header.php'); ?>

		<div class="cell">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple"><h1><?php echo $title; ?></h1></div>
		</div>
		<div class="col-sm-12 text">
			<div class="col-sm-4 hidden-xs"><img src="img/<?php echo $mainImage; ?>" class="img-responsive" alt=""></div>
			<div class="col-sm-6">
<p>We rely greatly on corporate sponsors to help us make Artsida a success. If you or your company are interested in supporting our event in some way, contact <a href="mailto:artsida@accmontreal.org">artsida@accmontreal.org</a></p>
<h2>Presenting Sponsor</h2>
<p class="sr-only">TD</p>
<a href="http://www.td.com/"><img src="img/sponsor-td.gif" alt="TD"></a>
<h2>Framing Sponsor</h2>
<p class="sr-only">Encadrex</p>
<a href="http://www.encadrex.com/"><img class="img-responsive" src="img/sponsor-encadrex.png" alt="Encadrex"></a>
<h2>Partner Sponsors </h2>
<p class="sr-only">Westjet</p>
<a href="http://www.westjet.com"><img class="img-responsive" src="img/sponsor-westjet.jpg" alt="Westjet"></a>
			</div>
		</div>
<?php include('footer.php'); ?>
