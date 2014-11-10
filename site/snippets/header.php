<!DOCTYPE html>
<html lang="de">
<head>

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <link rel="shortcut icon" href="<?= url('assets/images/favicon.png') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <?php echo css('assets/css/custom.css') ?>
</head>

<body>
  <!--div class="lang_switch">
    <?php $langs=c::get('lang.available');
    $current=c::get('lang.current');?> 
    <?php foreach($langs as $lang):?> 
      <?php //if($page->content($lang)!=false):?> 
        <?php if($lang != $current):?> 
          <span> <a class="noajax" href="<?php echo $page->url($lang)?>">
            <?php echo $lang?></a> </span> 
          <?php endif?> 
        <?php //endif?> <?php endforeach?>
      </div-->
      <div id="wrap">
        <header class="container">
          <a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/arsnova.jpg') ?>" alt="<?php echo html($site->title()) ?>" /></a>
        </header>