<?php snippet('header') ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="network">
	<div class="overlay">
		<div class="container">
			<div class="col-md-8">
				<ul>
					<?php $offers=$site->index()->filterBy('template', 'offer') ?>
					<?php foreach ($offers as $o) : ?>
						<li><a href="<?php echo $o->url() ?>" class="hvr-sweep-to-right"><?php echo $o->title() ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="hp-text">
					<?php echo $page->text()->kirbytext() ?>
				</div>
			</div>
		</div>
	</div>
	<canvas id="canvas"></canvas>
</div>

<div id="clearfix"></div>

<div class="container" role="main">
<?php snippet('projects') ?>
</div> <!-- // container -->

<?php snippet('footer') ?>