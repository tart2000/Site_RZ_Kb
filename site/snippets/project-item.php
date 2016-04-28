<div class="col-sm-4">
	<h3><?php echo $project->title()->html() ?></h3>
	<p><?php echo $project->text()->excerpt(80) ?></p>
	<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
		<a href="<?php echo $project->url() ?>">
			<img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" class="img-responsive">
		</a>
	<?php endif ?>
</div>