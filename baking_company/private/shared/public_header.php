<!doctype html>

<html lang="en">
  <head>
    <title>Baking Company <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          <img class="bread-icon" src="<?php echo url_for('/images/bread.svg') ?>" /><br />
          Chain Gang
        </a>
      </h1>
    </header>
