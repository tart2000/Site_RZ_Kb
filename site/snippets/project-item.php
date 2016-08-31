
	<h3><?php echo $project->title()->html() ?></h3>
	<p><?php echo $project->text()->excerpt(80) ?></p>
	<?php if($image = $project->pro_image()) : ?>
		<?php $image = $project->pro_image()->toFile() ?>
		<?php $logo = $project->logo_image()->toFile() ?>
		<a href="<?php echo $project->url() ?>">
			<div class="project-img" style="background-image:url('<?php echo $image->url() ?>')">
				<?php if($project->logo_image() != '') : ?>
					<img class="pro-logo" src="<?php echo $logo->url() ?>">
				<?php endif ?>
			</div>
		</a>
	<?php endif ?>
