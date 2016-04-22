<div class="row mt">
	<div class="col-xs-12">
		<h2><?php echo page('projects')->title() ?></h2>
		<?php echo page('projects')->text()->kirbytext() ?>
	</div>
	<?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
		<div class="col-sm-4">
			<h2><?php echo $project->title()->html() ?></h2>
			<p><?php echo $project->text()->excerpt(80) ?></p>
			<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
				<a href="<?php echo $project->url() ?>">
					<img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" class="img-responsive">
				</a>
			<?php endif ?>
		</div>
	<?php endforeach ?>
</div>