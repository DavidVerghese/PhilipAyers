<?php get_header();?>

<?php if(has_post_thumbnail()):?>
  <img src="<?php the_post_thumbnail_url("largest");?>"/>
 <?php endif;?>

<div id="gallery">
<?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
<?php endwhile; endif; ?>
</div> 

<script>
  console.log(document.querySelector("#post").style.font)
  let fontStyle = document.querySelector("#post").style.font;
  fontStyle = "small-caps 1em/1.125 "Source Sans Pro", sans-serif"
  console.log(fontStyle);
  </script>
<?php get_footer();?> 