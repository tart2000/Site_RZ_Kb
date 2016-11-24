<div class="col-md-2 col-sm-3 col-xs-6 client">

	<?php if ($c->hasImage()) : ?>
		<img src="<?php echo $c->images()->first()->url() ?>" class="img-responsive client-logo">
	<?php endif ?>

</div>