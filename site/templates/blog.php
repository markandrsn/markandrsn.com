<?php snippet('header') ?>
<section class="sidebar">
<?php snippet('menu') ?>
<?php snippet('connect') ?>
</section>

<section class="content blog">
    
  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <article>
        <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('F j, Y') ?></time>
    <h1><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
    <?php echo kirbytext($article->text()) ?>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>