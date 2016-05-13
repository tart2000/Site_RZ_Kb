<?php snippet('header') ?>

<div class="container text main" role="main">
	<span class="offer"><?php echo $page->title()->html() ?></span>
	<h3><?php echo $page->baseline() ?></h3>
	<div class="sep"></div>
	<?php echo $page->text()->kirbytext() ?>
</div> <!-- // container -->

<?php if($page->elements() != '') :?>
	<div class="container">
		<div class="sep"></div>
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

<div class="container" role="main">
	<?php snippet('projects') ?>
</div> <!-- // container -->

<?php snippet('footer') ?>