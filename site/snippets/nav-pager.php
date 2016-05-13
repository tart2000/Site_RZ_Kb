<nav role="navigation">
	<ul class="pager">
	<?php if (!isset($post)) : ?>
		<?php if($prev = $page->prevVisible()): ?>
			<li class="previous">
				<a href="<?php echo $prev->url() ?>" aria-label="Previous">
					<span aria-hidden="true">&lsaquo; <?php echo l::get('previous') ?> <?= $page->prevVisible()->title()->html() ?></span>
				</a>
			</li>
		<?php endif; ?>
		<?php if($next = $page->nextVisible()): ?>
			<li class="next">
				<a href="<?php echo $next->url() ?>" aria-label="Next">
					<span aria-hidden="true"><?php echo l::get('next') ?>: <?= $page->nextVisible()->title()->html() ?> &rsaquo;</span>
				</a>
			</li>
		<?php endif; ?>
	<?php else : ?>
    <?php if($post->hasPrevVisible()): ?>
      <li class="previous">
        <a href="<?= $post->prevVisible()->url() ?>" aria-label="Previous">
          <span aria-hidden="true">&lsaquo; <?php echo l::get('previous') ?>: <?= $post->prevVisible()->title()->html() ?></span>
        </a>
      </li>
    <?php endif ?>
    <?php if($post->hasNextVisible()): ?>
      <li class="next">
        <a href="<?= $post->nextVisible()->url() ?>" aria-label="Previous">
          <span aria-hidden="true"><?php echo l::get('next') ?>: <?= $post->nextVisible()->title()->html() ?> &rsaquo;</span>
        </a>
      </li>
		<?php endif; ?>
	<?php endif; ?>
	</ul>
</nav>
