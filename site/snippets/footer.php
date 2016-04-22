    <hr>
 	 	<footer class="footer" role="contentinfo">
 	 		<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="socials">
							<!-- Twitter -->
							<?php if ($site->tw()!='') : ?>
								<a href="<?php echo $site->tw() ?>" target="_blank">
									<span class="fa-stack fa">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							<?php endif ?>
							<!-- Facebook -->
							<?php if ($site->fb()!='') : ?>
								<a href="<?php echo $site->fb() ?>" target="_blank">
									<span class="fa-stack fa">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							<?php endif ?>
							<!-- Linkedin -->
							<?php if ($site->ln()!='') : ?>
								<a href="<?php echo $site->ln() ?>" target="_blank">
									<span class="fa-stack fa">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							<?php endif ?>
							<!-- email -->
							<?php if ($site->mail()!='') : ?>
								<a href="mailto:<?php echo $site->mail() ?>?Subject=Contact%20Rhizome" target="_blank">
									<span class="fa-stack fa">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							<?php endif ?>

						</div>						
					</div>
					<div class="col-sm-6 text-right">
						<?php e($site->address() !='',$site->address()->kirbytext()) ?>
					</div>
				</div>
 	 		</div>
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php url('assets/js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>

    <?php echo getBlogFooter($page); ?>

    <?php echo js('assets/js/vendor/bootstrap.min.js'); ?>
    <?php echo js('assets/js/main.js'); ?>

    <?php if ($page->isHomePage()) : ?>
    	<?php echo js('assets/js/paper-full.min.js'); ?>
	    <?php echo js('assets/js/network.js'); ?>
	<?php endif ?>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','<?php echo $site->analytics() ? $site->analytics() : 'UA-XXXXX-X' ?>','auto');ga('send','pageview');
		</script>
		
  </body>
</html>
