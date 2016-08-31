<?php snippet('header') ?>

<div class="container text main mb" role="main">
	<span class="offer"><?php echo $page->title()->html() ?></span>
	<?php echo $page->text()->kirbytext() ?>
</div> <!-- // container -->

<div class="container">
		<div class="row">
			<?php foreach (page('offers')->children() as $offer) : ?>
				<!-- Pour savoir si c'est le bouton de la page -->
				<?php 
					$plouf = '';
					if($offer->url()==$page->url()) {
						$plouf = 'disabled';
					} 
				?>
				<div class="col-sm-4">
					<a type="button" class="btn btn-default btn-lg btn-block mb <?php echo $plouf ?>" href="<?php echo $offer->url() ?>">
						<?php echo $offer->title() ?>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>

<?php if($page->elements() != '') :?>
	<div class="container mb pb">
		<h2>Services</h2>
		<div class="row">
			<?php foreach ($page->elements()->yaml() as $el) : ?>
				<div class="col-sm-6 offer-items">
					<div class="row">
						<div class="col-xs-3">
							<span class="fa-stack fa-lg fa-icon">
							  <i class="fa fa-circle fa-stack-2x"></i>
							  <i class="fa fa-<?php echo $el['fa'] ?> fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-xs-9">
							<div class="offer-meta">
								<h3>
									<?php echo $el['title'] ?>
								</h3>
								<p><strong><?php echo $el['baseline'] ?></strong></p>
								<p><i><?php echo $el['examples'] ?></i></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
<?php endif ?>

<?php if ($site->projtoggle()== 'true') : ?>
	<div class="container" role="main">
		<?php snippet('projects') ?>
	</div> <!-- // container -->
<?php endif ?>

<?php echo snippet('contact') ?>

<?php snippet('footer') ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script type="text/javascript">
	$(function() {
	    $('.offer-items').matchHeight({byRow:false});
	});
</script>

