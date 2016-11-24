<?php snippet('head') ?>
<?php snippet('menu') ?>

  <div class="containe-fluid page"  id="clients">

    <div class="row">
	    <div class="col-sm-10 col-sm-offset-1 ">

      	<h1 class="center"><?php echo $page->title()->html() ?></h1>
      	<?php echo $page->text()->kirbytext() ?>
      		<?php $counter = 0 ?>
	      	<?php foreach (page('clients')->children() as $c) : ?>
				<?php if ($c->hasImages()) : ?>
					<?php snippet('client', array('c' => $c, 'counter'=>$counter)) ?>
				<?php endif ?>
			<?php endforeach ?>
		</div>
	  </div>
  </div>

<?php snippet('footer') ?>