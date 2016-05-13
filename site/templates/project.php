<?php snippet('header') ?>

	<div class="container main" role="main">
		<span class="offer"><?php echo $page->title()->html() ?></span>


		
		<div class="text">
			<div class="row">
				<div class="col-sm-4">
					<img src="<?php echo $page->images()->first()->url() ?>" class="img-responsive">
				</div>
				<div class="col-sm-8">
					<?php echo $page->text()->kirbytext() ?>
				</div>
			</div>
			
     
			
		</div>
		
		<?php snippet('nav-pager') ?>
				
	</div> <!-- // container -->

<?php snippet('footer') ?>