<?php 



/** Template Name: Register */





get_header();



?>



<section class="login_screen_main register">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-4">
                <div class="fig-holder">
                    <figure style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></figure>
                </div>
            </div>
            <div class="col-md-6">
                <div id ="show_resp" class="text-center" style="color: black;"></div>
                <div class="card">
                    <div class="card-header"> Register With Us </div>
                    <div class="card-body">
                        <form id="registration_form" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="user_email" placeholder="Enter email" required>
                            </div>
                            <!-- <div class="form-group">-->
                            <!--    <label for="phone">Phone Number</label>-->
                            <!--    <input type="tel" class="form-control" id="phone" name="user_phone" placeholder="Phone number" required>-->
                            <!--</div>-->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="user_password" placeholder="Password" required>
                            </div>
                            <button type="submit" name="submit" class="mt-4 btn a_btn">Register</button>
                        </form>
                    </div>
                    <h6>Already have an account please  <a href="<?php echo site_url('/login');  ?>">Log In </a>here. </h6>
                </div>
            </div>
        </div>
    </div>
</section>









<?php get_footer(); ?>