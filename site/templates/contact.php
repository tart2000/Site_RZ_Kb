<?php snippet('header') ?>

	<div class="container main text" role="main">
		<div class="col-md-12">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div> <!-- // container -->

	<div class="container mb">
		<div class="col-md-8">
			<!-- Contact form goes here --> 
		  	<form action="//formspree.io/ds@rhizome-strategies.com" id="form"  method="POST">
		  	
		  		<div class="form-group">
			    	<input class="form-control input-lg" id="name" required placeholder="<?php echo l::get('name')?>" type="text" name="name">
			    </div>

			    <div class="form-group">
			    	<input class="form-control input-lg" id="mail" required placeholder="<?php echo l::get('mail')?>" type="email" name="mail">
				</div>

			    <div class="form-group">
					<textarea class="form-control input-lg" rows="8" placeholder='Message' type='message' name='message'></textarea>
			    </div>

			    <input type="hidden" name="_next" value="<?php echo $site->url() ?>" />
			    <input type="hidden" name="_subject" value="Message du site Internet" />
			    <input type="text" name="_gotcha" style="display:none" />

			    <button type="submit" class="btn btn-effect"><?php echo l::get('submit') ?></button>
			</form>
		</div>
		<div class="col-md-4">
			<?php echo $page->infos()->kirbytext() ?>
		</div>
	</div>

<?php snippet('footer') ?>