<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

    <!-- fOOTER -->
    <footer class="footer_main">
        <div class="subscribe_form_index">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text">
                            <h3>Contact </h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form_wapper">
                            <form id="newsletter_form" name="newsletter_form">
                                <div class="form_group">
                                    <span class="icon_email"></span>
                                    <input type="email" name="user_email" id="user_email" placeholder="Enter your Email Address" required>
                                    <button type="submit" class="a_btn">Contact us</button>
                                </div>
                            </form>
                            <div id="result_message" class="text-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="<?php echo home_url() ; ?>">
                            <?php 
  
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }
                            
                            ?>
                            </a>
                        </div>
                        <div class="social_media">
                            <ul>
                                <li><a href="<?php  dynamic_sidebar('social_facebook'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/Icon-Facebook.png" alt=""></a></li>
                                <li><a href="<?php  dynamic_sidebar('social_instagram'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/Icon-insta.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="quick_links">
                            <h3>Useful Links</h3>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu') );?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="quick_links">
                            <h3>Useful Links</h3>
                            <?php wp_nav_menu( array( 'theme_location' => 'usefullinks-menu') );?>
                        </div>
                    </div>
                </div>
                <div class="copyright_sec">
                    <div class="wapper">
                        <p> <?php  dynamic_sidebar('copyright_text'); ?></p>
                        <p>Design and Maintained by <a href="https://www.businessprodigital.com/" target="_blank">Business Pro Digital</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- fOOTER -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>
    <!-- extra js -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.6.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <!-- main-Js -->
    <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>	
    
    <script>

$('#refer_code_form').submit(function(event){
 
 event.preventDefault();
  $('#result_msg').html('');
  var link="<?php echo admin_url('admin-ajax.php')?>";
  var form=$('#refer_code_form').serialize();
  var formData = new FormData;
  formData.append('action','refer_code');
  formData.append('refer_code',form);
  //$('#submit').attr('disabled',true);
  $.ajax({
      url:link,
      type:'post',
      data:formData,
      processData:false,
      contentType:false,
      success:function(result){
       
          var data = $.parseJSON(result)
          if(data.status == 1){
            $('#refer_code_form')[0].reset()
            $('#result_msg').html(data.message)
            setTimeout(function () {
                     $('#result_msg').html('');
                 }, 2500);

          }else{
            $('#refer_code_form')[0].reset()
            $('#result_msg').html(data.message)
            setTimeout(function () {
                     $('#result_msg').html('');
                 }, 2500);

          }
          
        
      }
  });
});   
</script>	
<script>

$('#newsletter_form').submit(function(event){
 
 event.preventDefault();
  $('#result_message').html('');
  var link="<?php echo admin_url('admin-ajax.php')?>";
  var form=$('#newsletter_form').serialize();
  var formData = new FormData;
  formData.append('action','newsletter');
  formData.append('newsletter',form);
  //$('#submit').attr('disabled',true);
  $.ajax({
      url:link,
      type:'post',
      data:formData,
      processData:false,
      contentType:false,
      success:function(result){
       
          var data = $.parseJSON(result)
          if(data.status == 1){
            $('#newsletter_form')[0].reset()
            $('#result_message').html(data.message)
            setTimeout(function () {
                     $('#result_message').html('');
                 }, 2500);
          }else{
            $('#newsletter_form')[0].reset()
            $('#result_message').html(data.message)
            setTimeout(function () {
                     $('#result_message').html('');
                 }, 2500);
          }
          
        
      }
  });
});   
</script>	

<script>
    $('#registration_form').submit(function(event){
        event.preventDefault();
       var link     = "<?php echo admin_url('admin-ajax.php')?>";
       var form     = $('#registration_form').serialize();
    
        var formData = new FormData;
        formData.append('action','user_register');
        formData.append('user_register',form);
        $.ajax({
            url : link,
            type : 'post',
            data : formData ,
            processData : false,
            contentType : false ,
            success : function(result){
            var data = $.parseJSON(result)
              if(data.status == 1){
                $('#registration_form')[0].reset()
                $('#show_resp').html('<p style="color:green;">'+data.message+'</p>')
                setTimeout(function(){
							window.location.href = "<?php echo site_url('/login'); ?>" 
						}, 2000)
              }else{
                $('#registration_form')[0].reset()
                $('#show_resp').html('<p style="color:red;">'+data.message+'</p>')
              }
            }
           
           
       });
       
        
        
        
    });
    
</script>

<script>
    $('#login_form').submit(function(event){
        event.preventDefault();
          var link     = "<?php echo admin_url('admin-ajax.php')?>";
          var form     = $('#login_form').serialize();
          var formData = new FormData;
          formData.append('action','login_data');
          formData.append('login_data',form);
          $.ajax({
              
              url: link,
              type: 'post',
              data: formData,
              processData : false,
              contentType : false,
              
              success: function(response){
              var data = $.parseJSON(response)
              if(data.status == 0){
                $('#login_form')[0].reset()
                $('#show_result').html('<p class="success-message" style="color:green;">' + data.message + '</p>')
            	setTimeout(function(){
							window.location.href = "<?php echo site_url('/my-account'); ?>" 
						}, 2000)
              }
              else{
                $('#login_form')[0].reset()
                $('#show_result').html('<p class="error-message" style="color:red;">' + data.message + '</p>')
              }
              }
            
              
          });
        
        
    });
</script>

<?php wp_footer(); ?>

</body>
</html>
