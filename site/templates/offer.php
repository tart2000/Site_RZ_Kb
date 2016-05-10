<?php snippet('header') ?>

<div class="container text main" role="main">
	<span class="offer"><?php echo $page->title()->html() ?></span>
	<h2><?php echo $page->baseline() ?></h2>
	<?php echo $page->text()->kirbytext() ?>
</div> <!-- // container -->

<?php if($page->elements() != '') :?>
	<div class="container">
		<?php foreach ($page->elements()->yaml() as $el) : ?>
			<h3>
				<i class="fa-<?php echo $el['fa'] ?> fa"></i>
				<?php echo $el['title'] ?>
			</h3>
			<p><strong><?php echo $el['baseline'] ?></strong></p>
			<p><i><?php echo $el['examples'] ?></i></p>
		<?php endforeach ?>
	</div>
<?php endif ?>

<div class="container" role="main">
	<?php snippet('projects') ?>
</div> <!-- // container -->

<?php snippet('footer') ?>