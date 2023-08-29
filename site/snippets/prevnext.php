<div class="pagination">
	<div class="prev">
<?php if($page->hasPrevVisible()): ?>
<a href="<?php echo $page->prevVisible()->url() ?>">&larr; <?php echo $page->prevVisible()->title() ?></a>
<?php endif ?>
	</div>
	<div class="next">
<?php if($page->hasNextVisible()): ?>
<a href="<?php echo $page->nextVisible()->url() ?>"><?php echo $page->nextVisible()->title() ?> &rarr;</a>
<?php endif ?>
	</div>
</div>