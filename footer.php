<?php if ($pageClass != 'home') {?>

			</div>
		</div>
<?php } ?>
	<div class="clearfix"></div>
	</main>
	<footer class="col-xs-12">
		<div class="col-sm-6 col-sm-push-6">
			<section class="col-xs-6">
				<h2 class="sr-only">Social Media</h2>
				<ul class="list-inline">
					<li>
						<a target="_blank" href="https://www.facebook.com/accm.artsida"><i class="fa fa-facebook-square fa-4x"></i><span class="sr-only">Facebook</span></a>
					</li>
					<li>
						<a target="_blank" href="https://twitter.com/ARTSIDA6"><i class="fa fa-twitter-square fa-4x"></i><span class="sr-only">Twitter</span></a>
					</li>
					<li>
						<a target="_blank" href="http://instagram.com/artsida"><i class="fa fa-instagram fa-4x"></i><span class="sr-only">Instagram</span></a>
					</li>
					<li>
						<a target="_blank" href="http://artsida.tumblr.com/"><i class="fa fa-tumblr-square fa-4x"></i><span class="sr-only">Tumblr</span></a>
					</li>
				</ul>
			</section>

<?php if ($lang == 'en') { ?>
			<section class="col-xs-6 text-right media">
				<h2 class="sr-only">Information links</h2>
				<ul class="list-unstyled">
					<li><a href="media.php">Media</a></li>
					<li><a href="volunteer.php">Volunteer</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</section>

<?php } else { ?>

			<section class="col-xs-6 text-right media">
				<h2 class="sr-only">Liens d'informations</h2>
				<ul class="list-unstyled">
					<li><a href="media-fr.php">Médias</a></li>
					<li><a href="benevolat.php">Bénévolat</a></li>
					<li><a href="joindre.php">Nous joindre</a></li>
				</ul>
			</section>

<?php } ?>


		</div>
		<section class="col-xs-12 col-sm-6 col-sm-pull-6 sponsors">
			<h2 class="sr-only"><?php if ($lang == "en") { echo "Sponsors"; } else { echo "Commanditaires"; } ?></h2>
			<ul class="list-inline">
				<li class="col-xs-4">
					<?php if ($lang == "en") { echo "Presented by"; } else { echo "Présenté par"; } ?>: <br /><a target="_blank" href="http://www.td.com/"><img class="img-responsive mrgn-tp-sm" src="img/sponsor-td.gif" alt="TD"></a>
				</li>
				<li class="col-xs-4 col-xs-push-2">
					<?php if ($lang == "en") { echo "Framing Sponsor"; } else { echo "Commanditaire Encadrement"; } ?>: <br /><a target="_blank" href="http://www.encadrex.com/"><img class="img-responsive mrgn-tp-sm" src="img/sponsor-encadrex.png" alt="encadrex"></a>
				</li>
			</ul>
		</section>
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/twitter.js"></script>
</body>
</html>
