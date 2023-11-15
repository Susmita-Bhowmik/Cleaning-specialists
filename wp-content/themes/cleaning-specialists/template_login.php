<?php 



/** Template Name: Login */





get_header();



?>

<section class="login_screen_main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="fig-holder">
                    <figure style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center" id="show_result"></div>
                <div class="card">
                    <div class="card-header"> Login Here </div>
                    <div class="card-body">
                        <form id="login_form" method="post">
                            <div class="form-group">
                                <label for="email">Registered Email address</label>
                                <input type="email" class="form-control" id="email" name="user_email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="user_password" placeholder="Password" required>
                            </div>
                            <button type="submit" name="submit" class="btn a_btn mt-4">Login</button>
                        </form>
                    </div>
                    <h6>Don't have an account please  <a href="<?php echo site_url('/register');  ?>">Register </a>here. </h6>
                </div>
            </div>
        </div>
    </div>
</section>









<?php get_footer(); ?>