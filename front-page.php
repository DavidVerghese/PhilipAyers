<?php get_header();?>



<div class="homepage">



<div class="picture">


<div class="featured-image">
  
</div>

<?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
    <b><p className="title">On The Metro North </p></b>
<i><p className="paintinginfo-sub">Oil on Wooden Panel, 36 x 24 in.</p></i>
<p>Most Viewed</p>

<?php endwhile; endif; ?>

<div class="most-viewed">
</div>
</div>
<p class="copyright">Philip Ayers © 2021 | Login</p>
</div>

<?php get_footer();?> 