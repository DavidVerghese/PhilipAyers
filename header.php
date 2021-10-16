<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head();?>
  
</head>


<header>

<div class="website-title">
    <a href="/wp-demo-tuts">Philip Ayers</a>
  <div class="hamburger-menu">
    <hr>
    <hr>
    <hr>
  </div>
</div>
<div class="attachment">
  <div id="menu">
<?php wp_nav_menu (
    array(
      'theme_location' => 'top-menu'
    )
  );?>
  </div>
</div>

  
</header>


<body <?php body_class();?>>

