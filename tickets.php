<?php
	$title = "Tickets";
	$pageClass = "content";
	$mainImage ="tickets.jpg";
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
<h2>Vernissage:</h2>
<p>Free entry</p>
<h2>Main auction:</h2>
<h3><span class="mrgn-rght-lg">VIP ticket</span> $150</h3>
<ul>
<li>Access to event at 5pm for VIP cocktail</li>
<li>Exclusive opportunity to meet selected artists</li>
<li>Exclusive complimentary wine bar </li>
<li>Exclusive cocktail dinatoire & hors d’oeuvres</li>
</ul>
<h3><span class="mrgn-rght-lg">General ticket</span> $100</h3>
<ul>
<li>Access to event at 6pm</li>
<li>Complimentary wine bar </li>
<li>Cocktail dinatoire & hors d’oeuvres</li>
</ul>
<p>Tickets will be available for on-line purchase soon. Tickets will also be on sale through <abbr title="AIDS Community Care Montreal">ACCM</abbr> office (514) 529-9462.</p>
			</div>
		</div>
<?php include('footer.php');?>
