<?php snippet('header') ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="network">
	<div class="overlay">
		<div class="container">
			<div class="col-md-8">
				<ul>
					<?php $offers=$site->index()->filterBy('template', 'offer') ?>
					<?php foreach ($offers as $o) : ?>
						<li><a href="<?php echo $o->url() ?>" class="hvr-sweep-to-right"><?php echo $o->title() ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="hp-text">
					<?php echo $page->text()->kirbytext() ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="clearfix"></div>

<div id="blurb" style="background-image:url('<?php echo $page->images()->first()->url() ?>')">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-7 col-sm-4 col-xs-8 col-xs-offset-2 blurb-text">
				<?php echo $page->blurb()->kirbytext() ?>
			</div>
		</div>
	</div>
</div>

<div class="container blurb-text2">
	<?php echo $page->text2()->kirbytext() ?>
</div>

<?php if ($site->projtoggle()== 'true') : ?>
	<div class="container" role="main">
		<?php snippet('projects') ?>
	</div> <!-- // container -->
<?php endif ?>

<!-- <div class="container">
	<?php snippet('medium') ?>
</div> -->

<div class="container">
	<?php snippet('clients') ?>
</div>

<?php echo snippet('contact') ?>

<?php snippet('footer') ?>

<script type="text/javascript">
	var targetOffset = $("#blurb").offset().top;

	var $w = $(window).scroll(function() {
	    if ( $w.scrollTop() > targetOffset ) {   
	        $('.navbar').css({"background-color":"white"});
	    } else {
	    	$('.navbar').css({"background-color":"transparent"});
	    }
	});
</script>