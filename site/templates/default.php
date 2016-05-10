<?php snippet('header') ?>

	<div class="container main text" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div> <!-- // container -->

<?php snippet('footer') ?>