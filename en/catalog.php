<?php
	$lang = "en";
	$title = "Catalog";
	$pageClass = "content";
	$mainImage = "art-catalog.jpg";
?>
<?php include('../header.php'); ?>

		<div class="cell">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple"><h1><?php echo $title; ?></h1></div>
		</div>
		<div class="col-sm-12 text">
			<div class="col-sm-4 hidden-xs"><img src="../img/<?php echo $mainImage; ?>" class="img-responsive" alt=""></div>
			<div class="col-sm-6">
				<p>Once the Artsida 6 collection has been selected, photos of the selected artwork and artist biographies will be available here. A downloadable and printable colour catalog will also be available.</p>
			</div>
		</div>
<?php include('../footer.php'); ?>
