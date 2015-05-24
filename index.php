<?php
	$title = "ArtSida 6, September 30, 2015";
	$pageClass = "home";
?>
<?php include('header.php'); ?>
		<h1 class="sr-only"><?php echo $title; ?></h1>
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/carousel1.png" alt="" />
				</div>
				<div class="item">
					<img src="img/carousel2.png" alt="" />
				</div>
				<div class="item">
					<img src="img/carousel3.png" alt="" />
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="clearfix"></div>
		<div class="hidden-xs cell">
			<div class="col-sm-3 red"></div>
			<div class="col-sm-6 purple"></div>
			<div class="col-sm-3 pink"></div>

			<div class="col-sm-2 yellow"></div>
			<div class="col-sm-6 cyan"></div>
			<div class="col-sm-4 red"></div>

			<div class="col-sm-4 pink"></div>
			<div class="col-sm-5 yellow"></div>
			<div class="col-sm-3 red relative"><img src="img/pic2.jpg" class="hidden-xs photoh bottom-right" alt=""></div>

			<div class="col-sm-6 purple"></div>
			<div class="col-sm-4 cyan"></div>
			<div class="col-sm-2 yellow"></div>

			<div class="col-sm-2 red"></div>
			<div class="col-sm-6 yellow"></div>
			<div class="col-sm-4 pink"></div>

			<img src="img/pic3.jpg" class="bottom-left photov" alt="">
		</div>
<?php include('footer.php');?>
