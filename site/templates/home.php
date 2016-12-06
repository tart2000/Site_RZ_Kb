<?php snippet('header') ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="network">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<ul>
						<?php $offers=$site->index()->filterBy('template', 'offer') ?>
						<?php foreach ($offers as $o) : ?>
							<li><a href="#" class="hvr-sweep-to-right"><?php echo $o->title() ?></a></li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="hp-text">
						<?php echo $page->text()->kirbytext() ?>
					</div>
				</div>
			</div>
			<div class="col-md-12" id="footer-temp">
				<em>Contact: info@rhizome-strategies.com / 514 431 3612</em><br><em>Rhizome is taking root</em>
			</div>
		</div>
	</div>
</div>



<?php snippet('footer') ?>