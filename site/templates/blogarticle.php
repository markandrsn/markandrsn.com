<?php snippet('header') ?>
<section class="sidebar">
<?php snippet('menu') ?>
<?php snippet('connect') ?>
</section>

<section class="content blogarticle">
  <article>
        <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F j, Y') ?></time>

    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>

  </article>
  <?php snippet('prevnext') ?>
</section>


<?php snippet('footer') ?>