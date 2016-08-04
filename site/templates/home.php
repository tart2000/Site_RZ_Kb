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
</div>

<div id="clearfix"></div>

<div id="blurb" style="background-image:url('<?php echo $page->images()->first()->url() ?>')">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-7 col-sm-4 col-xs-8 col-xs-offset-2 blurb-text">
				<?php echo $page->blurb()->kirbytext() ?>
			</div>
		</div>
	</div>
</div>


<div class="container" role="main">
	<?php snippet('projects') ?>
</div> <!-- // container -->

<div class="container">
	<?php snippet('medium') ?>
</div>

<!-- contact -->
<div id="contac">
	<div class="container">
		<div class="row">
			<div class="center col-sm-8 col-sm-offset-2">
				<h3><?php echo page('contact')->cta() ?></h3>
				<a class="btn btn-default btn-lg btn-theme" href="<?php echo page('contact')->url() ?>" role="button"><?php echo l::get('contact') ?></a>
			</div>
		</div>
	</div>
</div>


<?php snippet('footer') ?>