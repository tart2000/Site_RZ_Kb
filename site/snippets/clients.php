
<?php if (page('clients')->hasChildren()) : ?>
	<div class="row" id="clients">
		<div class="center">
			<em><?php echo page('clients')->title() ?></em>
		</div>
		<?php foreach (page('clients')->children()->limit(6) as $c) : ?>
			<?php if ($c->hasImages()) : ?>
				<?php snippet('client', array('c' => $c)) ?>
			<?php endif ?>
		<?php endforeach ?>
	</div>
<?php endif ?>

