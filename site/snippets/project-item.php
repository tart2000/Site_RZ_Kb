
<div class="card-top">
	<h3><?php echo $project->title()->html() ?></h3>
	<?php if ($project->baseline() != '') : ?>
		<p><?php echo $project->baseline() ?></p>
	<?php else : ?>
		<p><?php echo $project->text()->excerpt(80) ?></p>
	<?php endif ?>
</div>

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
