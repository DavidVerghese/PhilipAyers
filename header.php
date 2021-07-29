<!DOCTYPE html>
<html>
  <head>

  <?php wp_head();?>
  
</head>

<header>

<div class="website-title">
  <h1>
    <a href="/wp-demo-tuts">Philip Ayers</a>
  </h1>
  <div class="hamburger-menu">
    <hr>
    <hr>
    <hr>
  </div>
</div>
<div class="attachment">
<?php wp_nav_menu (
    array(
      'theme_location' => 'top-menu'
    )
  );?>
</div>

  
</header>

<body <?php body_class();?>

