
  <header>
  	<a id="ident" href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="115px" height="82px" alt="<?php echo html($site->title()) ?>" /></a>
    <h1><?php echo html($site->title()) ?></h1>
    <h2><?php echo html($site->description()) ?></h2>
  </header>
  
<nav class="menu">
  <ul>
    <?php foreach($pages->visible() AS $p): ?>
    <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>