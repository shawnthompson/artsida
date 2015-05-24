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
				<div class="col-xs-2 mrgn-tp-lg">
					<p><img class="img-responsive" src="img/logo.gif" alt="ArtSIDA logo" /></p>
				</div>
				<div class="col-xs-8">
					<h1 class="mrgn-tp-md"><span class="sr-only">ArtSIDA 6</span><img src="img/artsida6.jpg" class="center-block img-responsive" alt="" /></h1>
					<h2>Raise your hand for ACCM</h2>
					<img src="img/accm-en.jpg" alt="ACCM: AIDS Community Care Montreal" class="mrgn-tp-sm center-block img-responsive" />
				</div>
				<div class="col-xs-2 mrgn-tp-md">
					<p><span class="small">Presented&nbsp;by:</span><br />
					<img class="img-responsive" src="img/header-sponsor.gif" alt="TD logo" />
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4 yellow">
			<div class="text-right info">
				<p class="date">Wednesday September 30, 2015</p>
				<p><span class="sr-only">Entrepôts Dominion</span><img src="img/logo-dominion.png" alt=""></p>
				<p>3968 St-Ambroise</p>
				<p>5:00pm - 10:30pm</p>
				<section>
					<h2 class="sr-only">Language selection</h2>
					<ul class="list-unstyled mrgn-tp-md">
						<li class="text-right"><a lang="en" href="#" class="lang">Fr<span class="sr-only">ançais</span></a>
						</li>
					</ul>
				</section>
			</div>
		</div>
		<div class="hidden-xs col-sm-8 cell">
			<div class="row">
				<nav>
					<ul class="tableRow">
						<li class="dropdown purple tableCell"><a href="#" class="dropdown-toggle purple" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
							<ul class="dropdown-menu purple" role="menu">
								<li><a href="#">Artsida 6</a></li>
								<li><a href="#">Honorary Co-Chairs & Auctioneer</a></li>
								<li><a href="#">Entrepôts Dominion</a></li>
								<li><a href="#">Artsida 6 Team</a></li>
								<li><a href="#">Artisda History</a></li>
								<li><a href="#">ACCM</a></li>
							</ul>
						</li>
						<li class="dropdown yellow tableCell"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Artwork <span class="caret"></span></a>
							<ul class="dropdown-menu yellow" role="menu">
								<li><a href="#">Catalog</a></li>
								<li><a href="#">Auction Rules</a></li>
								<li><a href="#">Submissions</a></li>
							</ul>
						</li>
						<li class="pink tableCell"><a href="#">Tickets</a>
						</li>
						<li class="cyan tableCell"><a href="#">Sponsors</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-sm-4 red cell relative">
			<img src="img/pic1.jpg" class="hidden-xs photoh bottom-left" alt="">
		</div>
		<nav class="visible-xs-block col-xs-12">
			<div class="row">
				<ul class="panel-group visible-xs-block list-unstyled" id="accordion" role="tablist" aria-multiselectable="true">
					<li class="purple" role="tab" id="headingOne"><a class="nav-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">About <span class="caret"></span></a>
						<ul id="collapseOne" class="panel-collapse collapse list-unstyled" role="tabpanel" aria-labelledby="headingOne">
							<li><a class="nav-link" href="#">Artsida 6</a></li>
							<li><a class="nav-link" href="#">Honorary Co-Chairs & Auctioneer</a></li>
							<li><a class="nav-link" href="#">Entrepôts Dominion</a></li>
							<li><a class="nav-link" href="#">Artsida 6 Team</a></li>
							<li><a class="nav-link" href="#">Artisda History</a></li>
							<li><a class="nav-link" href="#">ACCM</a></li>
						</ul>
					</li>
					<li class="yellow" role="tab" id="headingTwo"><a class="nav-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Artwork <span class="caret"></span></a>
						<ul id="collapseTwo" class="panel-collapse collapse list-unstyled" role="tabpanel" aria-labelledby="headingTwo">
							<li><a class="nav-link" href="#">Catalog</a></li>
							<li><a class="nav-link" href="#">Auction Rules</a></li>
							<li><a class="nav-link" href="#">Submissions</a></li>
						</ul>
					</li>
					<li class="pink"><a href="#" class="nav-link">Tickets</a></li>
					<li class="cyan"><a href="#" class="nav-link">Sponsors</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="clearfix"></div>
	<main class="relative">
