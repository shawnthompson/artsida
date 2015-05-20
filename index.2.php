<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ArtSIDA.org</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/theme.css">


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

<h1>Masonry - columnWidth percentage width</h1>
<div class="masonry js-masonry"  data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".item", "percentPosition": true }'>
  <div class="grid-sizer"></div>
 		<header class="">
 			<div class="item">
			<h1>ArtSIDA <span>6</span></h1>
			<h2>Raise your hand for <abbr title="AIDS Community Care Montreal">ACCM</abbr></h2>
				<div id="logo"><img class="w100" src="img/logo.jpg" alt="ArtSIDA logo"></div>
				<div id="header-sponsor">
					<p>Presented by: <img class="w100" src="img/header-sponsor.png" alt=""></p>
				</div>
				</div>
				<section>
				<div class="item">
					<h2 class="sr-only">Language selection</h2>
					<ul class="list-unstyled">
						<li><a lang="en" href="/fr/index.html">Fr<span class="sr-only">ançais</span></a></li>
					</ul>
				</section>
				<p><time>Wednesday September 30, 2015</time></p>
				<p>Entrepôts Dominion</p>
				<p>3968 St-Ambroise</p>
				<p>5:00pm - 10:30pm</p>
				<div class="item red">
				<img class="w100" src="img/pic1.jpg" alt="">
				</div>
				</div>
		</header>  	
  <div class="item w2 h2"></div>
  <div class="item h3"></div>
  <div class="item h2"></div>
  <div class="item w3"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item h2"></div>
  <div class="item w2 h3"></div>
  <div class="item"></div>
  <div class="item h2"></div>
  <div class="item"></div>
  <div class="item w2 h2"></div>
  <div class="item w2"></div>
  <div class="item"></div>
  <div class="item h2"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item h3"></div>
  <div class="item h2"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item h2"></div>
</div>



<!--
		<main>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<p><a href="#">About</a></p>
			<img src="img/art1.jpg" alt="">
			<p><a href="#">Tickets</a></p>
			<img src="img/pic2.jpg" alt="">
			<img src="img/pic3.jpg" alt="">
			<p><a href="#">Artwork</a></p>
		</main>
		<footer>
			<ul>
				<li><a href="#">Media</a></li>
				<li><a href="#">Volunteer</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</footer>
 -->		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/masonry.pkgd.min.js"></script>
	<script>
var container = document.querySelector('#container');
var msnry = new Masonry( container, {
  // options
  columnWidth: 200,
  itemSelector: '.item'
});
	</script>
	</body>
</html>