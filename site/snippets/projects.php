<div class="row mt mb">
	
	<?php if($page->isHomePage()) : ?>
		<div class="col-xs-12">
			<h2><?php echo page('projects')->title() ?></h2>
			<?php echo page('projects')->text()->kirbytext() ?>
		</div>
		<?php $prjcts = page('projects')->children()->visible()->limit(3) ?>
	
	<?php else : ?>
		<div class="col-xs-12">
			<h2><?php echo l::get('linked') ?></h2>
		</div>
		<?php $uid = $page->uid()  ?>
		<?php $prjcts = page('projects')->children()->visible()->filterBy('offer','*=', $uid)->limit(3) ?>
	<?php endif ?>
	
	<?php foreach($prjcts as $project): ?>
		<div class="col-sm-4">
			<?php echo snippet('project-item', array('project'=>$project)) ?>
		</div>
	<?php endforeach ?>
</div>