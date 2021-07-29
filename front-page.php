<?php get_header();?>



<div class="homepage">

<div class="picture">


<div class="featured-image">
  
</div>

<div class="frontpage">
<?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>

<?php endwhile; endif; ?>
</div> 

<div class="most-viewed">
</div>
</div>
<p class="copyright">Philip Ayers © 2021 | Login</p>
</div>

<?php get_footer();?> 