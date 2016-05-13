<?php snippet('header') ?>

	<div class="container main text mb" role="main">
		<span class="offer"><?php echo $page->title()->html() ?></span>
		<?php echo $page->text()->kirbytext() ?>
	</div> <!-- // container -->

	<div class="container mb">
		<div class="row">
			<?php foreach (page('offers')->children() as $offer) : ?>
				<div class="col-sm-4">
					<a type="button" class="btn btn-default btn-lg btn-block mb" href="<?php echo $offer->url() ?>"><?php echo $offer->title() ?></a>

					<?php $uid = $offer->uid() ?>
					<?php $projects = page('projects')->children()->filterBy('offer','*=', $uid) ?>
					<?php $puid = $page->uid(); ?>
					<?php $project = $projects->filterBy('environment','*=',$puid)->first() ?>
					<?php if ($project != '') : ?>
						<?php snippet('project-item', array('project'=>$project)) ?>
					<?php endif ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>

<?php snippet('footer') ?>