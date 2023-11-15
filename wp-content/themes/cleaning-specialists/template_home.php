<?php 

/** Template Name: Home */



get_header();

?>
 <!-- Banner -->    `
 <section class="banner_main">
        <div class="banner_slider_main">
            <div class="elements">
                <div class="wapper">
                    <figure style="background-image: url( <?php the_field('banner_image'); ?>);"></figure>
                    <div class="banner_width">
                        <div class="text_div">
                            <span class="span_text"> <?php the_field('banner_content'); ?></span>
                            <h1> <?php the_field('banner_title'); ?></h1>
                            <h3> <?php the_field('banner_subtitle'); ?></h3>
                            <div class="button_wapper">
                                <a href="<?php echo site_url('contact'); ?>" class="a_btn">Request Estimate</a>
                                <a href="<?php echo site_url('our-services') ; ?>" class="a_btn">Our Services</a>
                            </div>
                        </div>
                        <div class="logo_div">
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo_big.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="elements">
                <div class="wapper">
                    <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/banner-01.jpg);"></figure>
                    <div class="banner_width">
                        <div class="text_div">
                            <span class="span_text">WELCOME  TO  Cleaning Specialists OF Virginia,LLC</span>
                            <h1><span>Specialists</span> cleaning agency with Best Equipment</h1>
                            <h3>Call to book an appointment today</h3>
                            <div class="button_wapper">
                                <a href="#" class="a_btn">Request Estimate</a>
                                <a href="#" class="a_btn">Our Services</a>
                            </div>
                        </div>
                        <div class="logo_div">
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo_big.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Banner -->

    <!-- form section -->
    <section class="free_estimate_index">
        <div class="container">
            <div class="form_wapper">
                <h2>Request a Free Estimate</h2>
                <?php  echo do_shortcode('[contact-form-7 id="078360f" title="Free Estimate Form"]') ; ?>
            </div>
        </div>
    </section>
    <!-- form section -->

    <!-- Cleaning specialists of virginia LLC FEATURED SERVICES -->
    <section class="cleaning_specialists">
        <div class="container">
            <div class="main_wapper">
                <h2>Cleaning specialists of virginia LLC FEATURED SERVICES</h2>
                <div class="feature_slider">
                <?php

                    $args = array( 'post_type' => 'service', 'posts_per_page' => -1,'order' => 'DESC' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $service_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    ?>
                   
                    <div class="elements">
                        <div class="feature_slider_box">
                            <a href="<?php the_permalink(); ?>"><figure style="background-image: url(<?php echo $service_image[0] ; ?>);"></figure></a>
                            <div class="text_wapper">
                                <div class="icon_wapper">
                                    <img src="<?php the_field('services_icon'); ?>" alt="">
                                </div>
                                <div class="text">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Cleaning specialists of virginia LLC FEATURED SERVICES -->

    <!-- about -->
    <section class="about_main_index">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="fig_holder">
                        <figure style="background-image: url(<?php the_field('about_image'); ?>);"></figure>
                        <div class="main_side_wapper">
                            <div class="wapper">
                                <span class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon-satifed-customer.png" alt=""></span>
                                <span class="number"><?php the_field('satisfied_customer_number'); ?> <em>Satisfied Customers</em></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text_wapper_main">
                        <span class="span_text"><?php the_field('about_subtitle') ; ?></span>
                        <h2><?php the_field('about_title'); ?></h2>
                        <p><?php the_field('about_content'); ?></p>
                        <a href="<?php echo site_url('about-us') ; ?>" class="a_btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="refer_code_index">
                <div class="row">
                    <div class="col-md-6">
                        <span class="span_text"><?php the_field('refer_code_section_subtitle') ; ?></span>
                        <h2><?php the_field('refer_code_section_title'); ?></h2>
                    </div>
                    <div class="col-md-6">
                        <div class="form_wapper">
                            <form id="refer_code_form" name="refer_code_form">
                        <div class="form_group">
                        <input type="text" name="refer_code" id="refer_code" placeholder="Refer Code" required>
                        <button class="a_btn">Submit</button>
                         </div>
                         <div id="result_msg"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <!-- Latest Projects -->
    <section class="latest_projects_index">
        <div class="container text-center">
            <span class="span_text">Cleaning specialists of virginia LLC Works</span>
            <h2>Latest Projects</h2>
        </div>
        <div class="latest_project_slider">
            <?php
                if( have_rows('project_slider') ):
                while( have_rows('project_slider') ) : the_row(); ?>
                    <div class="elements">
                        <div class="wapper">
                            <figure style="background-image: url(<?php the_sub_field('project_image'); ?>);"></figure>
                        </div>
                    </div>
                <?php
                    endwhile;
                    endif;
                ?>
            

            
        </div>
    </section>
    <!-- Latest Projects -->

    <!-- hire_us_section  -->
    <section class="hire_us_section">
        <div class="top">
            <div class="container">
                <div class="hire_us_index">
                    <div class="row">
                        <div class="col-md-8">
                            <span class="span_text"><?php the_field('hire_us_section_subtitle'); ?></span>
                            <h2><?php the_field('hire_us_section_title'); ?></h2>
                            <ul>
                                <?php
                                    if( have_rows('hire_us_section_content_box') ):
                                    while( have_rows('hire_us_section_content_box') ) : the_row(); ?>
                                <li>
                                    <div class="icon_wapper">
                                        <span class="icon"><img src="<?php the_sub_field('icon'); ?>" alt=""></span>
                                        <strong><?php the_sub_field('title'); ?></strong>
                                    </div>
                                    <?php the_sub_field('content'); ?>
                                </li>
                                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                                
                                
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="fig_holder">
                                <figure style="background-image: url(<?php the_field('hire_us_image'); ?>);"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul>
                        <?php
                            if( have_rows('hire_us_section_bottom_content_box') ):
                            while( have_rows('hire_us_section_bottom_content_box') ) : the_row(); ?>
                            <li>
                                <div class="ul_wapper">
                                    <span class="icon_wapper"><img src="<?php the_sub_field('icon'); ?>" alt=""></span>
                                    <span class="number_wapper"><?php the_sub_field('title'); ?></span>
                                </div>
                                <p><?php the_sub_field('content'); ?></p>
                            </li>
                            <?php
                                endwhile;
                                endif;
                            ?>

                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hire end -->

    <!-- testimonials -->
    <section class="testimonials_main">
        <div class="container">
            <span class="span_text">testimonials</span>
            <h2><?php the_field('testimonial_section_title') ; ?></h2>
            <div class="testimonials_slider">
            <?php
                if( have_rows('testimonial_slider') ):
                while( have_rows('testimonial_slider') ) : the_row(); ?>
                    <div class="elements">
                        <div class="wapper">
                            <p><?php the_sub_field('client_message'); ?></p>
                            <div class="profile_holder">
                                <img src="<?php the_sub_field('client_image'); ?>" alt="">
                            </div>
                            <span class="name"><?php the_sub_field('client_name'); ?></span>
                            <span class="work"><?php the_sub_field('client_profession'); ?></span>
                        </div>
                    </div>
                <?php
                    endwhile;
                    endif;
                ?>
                
            </div>
        </div>
    </section>
    <!-- testimonials -->

    <!-- contact -->
    <section class="contact_index">
        <div class="container">
            <div class="text-center">
                <span class="span_text">Contact</span>
                <h2>Get Touch with <span>Us</span></h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact_info_wapper">
                        <ul>
                            <li>
                                <strong>Email Address</strong>
                                <div class="normal_wapper">
                                    <span class="icon"><img src="<?php bloginfo('template_url'); ?>/img/Icon-Mail.png" alt=""></span>
                                    <a href="mailto: querry@cleaningspecialists.com">querry@cleaningspecialists.com</a>
                                </div>
                            </li>
                            <li>
                                <strong>Phone No</strong>
                                <div class="normal_wapper">
                                    <span class="icon"><img src="<?php bloginfo('template_url'); ?>/img/Icon-Phone.png" alt=""></span>
                                    <a href="tel: +65 6986000914">+65 6986000914</a>
                                </div>
                            </li>
                            <li>
                                <strong>Any Questions</strong>
                                <span class="question">Have A Question ?</span>
                                <div class="normal_wapper">
                                    <span class="icon"><img src="<?php bloginfo('template_url'); ?>/img/Icon-Phone.png" alt=""></span>
                                    <a href="tel: 1800 456 7890">1800 456 7890</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="main_contact_form">
                <?php  echo do_shortcode('[contact-form-7 id="4c9e663" title="Get Touch with Us Form"]') ; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

   
<?php get_footer(); ?>