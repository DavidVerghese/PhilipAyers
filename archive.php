<?php get_header();?>



<h2>
    <?php single_cat_title();?>
  </h2>

<div id="gallery">

<?php if(has_post_thumbnail());?>
  <img src="<?php the_post_thumbnail_url?>"/>
  
<ul>
<?php if (have_posts()) : while(have_posts()) : the_post();?>


<?php if(has_post_thumbnail()):?>
  <li><a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url("smallest");?>"/></a></li>
 <?php endif;?>

<?php endwhile; endif; ?>
</ul>

</div> 

<?php get_footer();?> 