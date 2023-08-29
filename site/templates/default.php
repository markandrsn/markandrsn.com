<?php snippet('header') ?>
<section class="sidebar">
<?php snippet('menu') ?>
<?php snippet('connect') ?>
</section>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<?php snippet('footer') ?>