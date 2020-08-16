<?php
$pager->setSurroundCount(2);
?>
<nav aria-label="<? = lang('Pager.pageNavigation') ?>">
	<ul class="paganation">
		<?php if ($pager->hasPrevious()) : ?>
			<li class="page-item">
				<a href="<?= $pager->getPrevious() ?>" class="page-link" aria-label="<?= lang('Pager.previous') ?>">
				</a>
			</li>
			<?php endif ?>

			<?php foreach ($pager->links() as $link) : ?>
			<li <?= $link['active'] ? 'class="active page-item"' : 'class="page-item"' ?>>
			<a href="<?= $link['uri']?>" class="page-link">
				<?= $link['title'] ?>
			</a>
			</li>
			<?php endforeach ?>

			<?php if ($pager->hasNext()) : ?>
			<li class="page-item">
			<a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="page-link">
				<span aria-hidden="true"></span>
			</a>
			</li> 
			<li class="page-item">
				<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="page-link"></a>
			</li>
		<?php endif ?>
		</ul>
	</nav>