<?php 

/** Template Name: MY Account */



get_header();

?>
<!-- About-banner -->
<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="banner-text">
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</section>
<!-- About-banner -->
<!-- About-text -->
<section class="welcome-about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="wapper">
            
            <?php if (is_user_logged_in()) { 
            $current_user = wp_get_current_user();
            
            ?>

          <h2> <?php  echo 'Welcome, ' .  $current_user->display_name; ?> </h2> 
        <?php }  ?>
        </div>
      </div>
      <div class="">
        <a href="<?php echo wp_logout_url(); ?>" class="btn">Log Out</a>
        </div>
     
    </div>
  </div>
</section>
<!-- About-text -->


<?php get_footer(); ?>