

<?php get_header();?>

 
  <h2 class="about"> 
    <?php the_title();?>
  </h2>

<div id="about">
<?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
<?php endwhile; endif; ?>
</div>

<?php get_footer();?> 

