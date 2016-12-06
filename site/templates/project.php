<?php snippet('header') ?>

	<div class="container main mb" role="main">
		
		<div class="text">
			<div class="row">
				<div class="col-sm-4">
					<?php if ($page->hasImages()) : ?>
						<?php $image = $page->images()->first()->url() ?>
					<?php endif ?>
					<?php if($page->pro_image() != '') : ?>
						<?php $image = $page->pro_image()->toFile() ?>
					<?php else : ?>
						<?php $image = '' ?>
					<?php endif ?>
					<img src="<?php echo $image->url() ?>" class="img-responsive bmt">
				
					<?php if ($page->hasDocuments()) : ?>
						<h3><?php echo l::get('dl'); ?></h3>
				        <?php foreach ($page->documents() as $doc) : ?>
				            <a href="<?php echo $doc->url() ?>" download>
				            	<?php echo $doc->filename() ?> - (<?php echo $doc->niceSize() ?>) <i class="fa fa-download"></i>
				            </a><br>
				        <?php endforeach ?>
			        <?php endif ?>

			        <?php if ($page->partner() != '') : ?>
			        	<h3><?php echo l::get('partners'); ?></h3>
			        	<ul>
					        <?php foreach ($page->partner()->yaml() as $par) : ?>
					        	<li><a href="<?php echo $par['link'] ?>" target="_blank">
						        	<?php echo $par['name'] ?>
						        </a></li>
						    <?php endforeach ?>
						</ul>
					<?php endif ?>

				</div><!-- fin colonne méta -->

				<div class="col-sm-8">
					<h1><?php echo $page->title()->html() ?></h1>
					<h3><?php echo $page->baseline() ?></h3>
					<?php echo $page->text()->kirbytext() ?>
				</div>
			</div>
			
     
			
		</div>
		
		<?php snippet('nav-pager') ?>
				
	</div> <!-- // container -->

<?php snippet('footer') ?>