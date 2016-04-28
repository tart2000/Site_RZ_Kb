<?php snippet('header') ?>

<div class="container text" role="main">
	<h1><?php echo $page->title()->html() ?></h1>
	<h2><?php echo $page->baseline() ?></h2>
	<?php echo $page->text()->kirbytext() ?>
</div> <!-- // container -->

	
<div class="container" role="main">
	<?php snippet('projects') ?>
</div> <!-- // container -->

<?php snippet('footer') ?>