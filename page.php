<?php get_header();?>

  <div class="page">

  <h2>
    <?php the_title();?>
  </h2>
</div>

<div id="gallery">
<?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
<?php endwhile; endif; ?>
</div> 


<?php get_footer();?> 