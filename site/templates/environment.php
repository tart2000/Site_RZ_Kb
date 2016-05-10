<?php snippet('header') ?>

	<div class="container main text mb" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div> <!-- // container -->

	<div class="container mb">
		<ul class="nav nav-pills nav-justified">
			<?php foreach (page('offers')->children() as $offer) : ?>
				<li class="presentation" role="presentation">
					<a href="<?php echo $offer->url() ?>"><?php echo $offer->title() ?></a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>

<?php snippet('footer') ?>