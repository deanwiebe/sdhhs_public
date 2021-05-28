<footer>
  <div class="newsletter-signup">
    <h2><a href="<?php echo esc_url(site_url('/newsletter-subscription')); ?>">Sign Up for Newsletter</a></h2>
  </div>
  <div class="footer-columns">
      <div class="col-1">
        <?php dynamic_sidebar( 'footer_address' ); ?>
      </div>
      <nav class="col-2">
         <div id="menu-footer">
         <?php
              wp_nav_menu(array(
                  'theme_location' => 'footerMenu1'
              ))
          ?>
         </div>
            <?php
              wp_nav_menu(array(
                  'theme_location' => 'footerMenu2'
              ))
          ?>
          <?php
              wp_nav_menu(array(
                  'theme_location' => 'footerMenu3'
              ))
          ?>
      </nav>
      <div class="col-3">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'footerMenu4'
            ))
          ?>
            <!-- <div class="donate_button donate_footer">
                <form action="https://www.paypal.com/donate" method="post" target="_top">
                    <input type="hidden" name="hosted_button_id" value="ZGKBL2NSKCV98" />
                    <button id="donate_footer" name="submit">Donate</button>
                </form>  
            </div> -->
      </div>
      <div class="toTop">
          <a href="#top">
              <i class="fas fa-arrow-up"></i>
              <p>Back</p>
          </a>
      </div>
  </div>
  <div class="social-media">
      <ul class="social">
          <li><a href=" <?php echo esc_url(site_url('/')) ?>"><i class="fas fa-home"></i></a></li>
          <li><a href=" <?php echo esc_url(site_url('/search')) ?>"><i class="fas fa-search"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UComGRElAUtQBt2vXt7t_WQA" target="blank"><i class="fab fa-youtube"></i></a></li>
          <li><a href="https://www.instagram.com/sdhhsinc/?hl=en" target="blank"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://www.facebook.com/SDHHSinc/" target="blank"><i class="fab fa-facebook-square"></i></a></li>
      </ul>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>