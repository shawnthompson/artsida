<?php
	$date = strtotime("September 30, 2015");
	$remaining = $date - time();
	$days_remaining = floor($remaining / 86400);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php echo $title; ?></title>
	<!-- Fav Icon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="css/theme.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="<?php echo $pageClass; ?>">
	<header class="relative">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-xs-2 mrgn-tp-md">
					<p class="mrgn-tp-lg"><a href="index.php"><img class="img-responsive" src="img/logo.gif" alt="ArtSIDA logo" /></a></p>
				</div>
				<div class="col-xs-8">
					<h1 class="mrgn-tp-md"><a href="index.php"><span class="sr-only">ArtSIDA 6</span><img src="img/artsida6.jpg" class="center-block img-responsive" alt="" /></a></h1>
					<h2>Raise your hand for ACCM</h2>
					<p class="text-center date">Wednesday September 30<sup>th</sup> 2015</p>
					<p><a href="http://accmontreal.org/"><img src="img/accm-en.jpg" alt="ACCM: AIDS Community Care Montreal" class="mrgn-tp-sm center-block img-responsive" /></a></p>
				</div>
				<div class="col-xs-2 mrgn-tp-sm">
					<p class="mrgn-tp-md"><span class="small">Presented&nbsp;by:</span><br />
					<p><a href="https://www.tdcanadatrust.com/"><img class="img-responsive" src="img/header-sponsor.gif" alt="TD logo" /></a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-4 yellow info">
			<div class="row">
				<div class="col-xs-10 text-left"><p class="small"><a href="mailto:artsida@accmontreal.org">Subscribe to the Artisda newsletter</a></p></div>
				<section class="col-xs-2">
					<h2 class="sr-only">Language selection</h2>
					<ul class="list-unstyled">
						<li class="text-right"><a lang="en" href="#" class="lang">Fr<span class="sr-only">ançais</span></a>
						</li>
					</ul>
				</section>
			</div>
				<p><a href="#"><span class="sr-only">Entrepôts Dominion</span><img src="img/logo-dominion.png" alt=""></a></p>
				<p>3968 St-Ambroise<br />
				5:00pm - 10:30pm</p>
				<p class="text-center time-left"><strong><?php echo $days_remaining; ?></strong> Days Left!</p>
		</div>
		<div class="col-sm-8 cell">
			<div class="row">
				<nav>
					<ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="about-artsida.php">Artsida 6 Auction</a></li>
								<li><a href="about-vernissage.php">Artsida 6 Vernissage</a></li>
								<li><a href="about-honorary.php">Honorary Co-Chairs & Auctioneer</a></li>
								<li><a href="about-venues.php">Event Venues</a></li>
								<li><a href="about-team.php">Artsida 6 Team</a></li>
								<li><a href="about-history.php">Artisda History</a></li>
								<li><a href="about-accm.php">ACCM</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Artwork <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="art-catalog.php">Catalog</a></li>
								<li><a href="art-rules.php">Auction Rules</a></li>
								<li><a href="art-submissions.php">Submissions</a></li>
							</ul>
						</li>
						<li><a href="tickets.php">Tickets</a></li>
						<li><a href="sponsors.php">Sponsors</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-sm-3 red hidden-xs cell"></div>
		<div class="col-sm-1 pink hidden-xs cell"></div>
	</header>
	<div class="clearfix"></div>
	<main class="relative">
