<?php
	$date = strtotime("September 30, 2015 17:00");
	$remaining = $date - time();
	$days = floor($remaining / 86400);
	$hours = floor(($remaining % 86400) / 3600);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

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
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
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
					<p class="mrgn-tp-lg"><a href="index.php"><img class="img-responsive" src="img/logo.gif" alt="Artsida logo" /></a></p>
				</div>
				<div class="col-xs-8">
					<h1 class="mrgn-tp-md"><a href="index.php"><span class="sr-only">Artsida 6</span><img src="img/artsida6.jpg" class="center-block img-responsive" alt="" /></a></h1>
					<h2>Raise your hand for ACCM</h2>
					<p class="text-center date">Wednesday September 30<sup>th</sup> 2015</p>
					<p><a href="http://accmontreal.org/"><img src="img/accm-en.jpg" alt="ACCM: AIDS Community Care Montreal" class="mrgn-tp-sm center-block img-responsive" /></a></p>
				</div>
				<div class="col-xs-2">
					<p><span class="small">Presented&nbsp;by:</span><br />
					<p><a href="http://www.td.com/"><img class="img-responsive" src="img/sponsor-td.gif" alt="TD logo" /></a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-4 yellow info">
			<div class="row">
				<div class="col-xs-10 text-left"><p class="small"><a href="mailto:artsida@accmontreal.org">Subscribe to the Artsida newsletter</a></p></div>
				<section class="col-xs-2">
					<h2 class="sr-only">Language selection</h2>
					<ul class="list-unstyled">
<?php
	if ($lang == 'en') {
		echo '<li class="text-right"><a lang="fr" href="' . $otherPage . '.php" class="lang">Fr<span class="sr-only">ançais</span></a></li>';
	} else {
		echo '<li class="text-right"><a lang="en" href="' . $otherPage . '.php" class="lang">En<span class="sr-only">glish</span></a></li>';
	}
?>
					</ul>
				</section>
			</div>
				<p><a href="http://entrepotsdominion.ca/"><span class="sr-only">Entrepôts Dominion</span><img src="img/venue-dominion.png" alt=""></a></p>
				<p>3968 St-Ambroise<br />
				5:00pm - 10:30pm</p>
				<p class="text-center time-left"><strong><?php echo $days; ?></strong> days, <span class="text-nowrap"><strong><?php echo $hours;?></strong> hours until <strong class="large">Artsida 6</strong></span></p>
		</div>
		<div class="col-sm-8 cell">
			<div class="row">
			<?php if ($lang == 'en') { ?>
				<nav>
					<ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="artsida.php">Artsida 6 Auction</a></li>
								<li><a href="vernissage.php">Artsida 6 Vernissage</a></li>
								<li><a href="honorary.php">Honorary Co-Chairs</a></li>
								<li><a href="venues.php">Event Venues</a></li>
								<li><a href="team.php">Artsida 6 Team</a></li>
								<li><a href="history.php">Artsida History</a></li>
								<li><a href="accm.php">ACCM</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Artwork <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="catalog.php">Catalog</a></li>
								<li><a href="rules.php">Auction Rules</a></li>
								<li><a href="submissions.php">Submissions</a></li>
							</ul>
						</li>
						<li><a href="tickets.php">Tickets</a></li>
						<li><a href="sponsors.php">Sponsors</a></li>
					</ul>
				</nav>
			<?php } elseif ($lang == 'fr') { ?>
				<nav>
					<ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Au sujet <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="encan.php">Encan Artsida 6</a></li>
								<li><a href="vente.php">Vernissage et vente d’œuvres Artsida 6</a></li>
								<li><a href="copresidents.php">Coprésidents honoraires</a></li>
								<li><a href="lieux.php">Lieux des activités</a></li>
								<li><a href="equipe.php">Équipe d’Artsida 6</a></li>
								<li><a href="historique.php">Historique d’Artsida</a></li>
								<li><a href="sbm.php">ACCM – SIDA Bénévoles Montréal</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Œuvres <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="catalogue.php">Catalogue</a></li>
								<li><a href="regles.php">Règles de l’encan</a></li>
								<li><a href="soumissions.php">Soumissions</a></li>
							</ul>
						</li>
						<li><a href="billets.php">Billets</a></li>
						<li><a href="commanditaires.php">Commanditaires</a></li>
					</ul>
				</nav>
				<?php } ?>
			</div>
		</div>
		<div class="col-sm-3 red hidden-xs cell"></div>
		<div class="col-sm-1 pink hidden-xs cell"></div>
	</header>
	<div class="clearfix"></div>
	<main class="relative">
