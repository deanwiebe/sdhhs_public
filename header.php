<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="body-wrapper">
        <header class="site-header">
            <div class="container1">
                <nav class="nav1">
                    <ul class="menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'headerMenu1'
                            ));
                        ?>
                    </ul>
                    <ul class="social">
                        <li><a href=" <?php echo esc_url(site_url('/')) ?>"><i class="fas fa-home"></i></a></li>
                        <li><a href="<?php echo esc_url(site_url('/search')) ?>"><i class="fas fa-search"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UComGRElAUtQBt2vXt7t_WQA" target="blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/sdhhsinc/?hl=en" target="blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/SDHHSinc/" target="blank"><i class="fab fa-facebook-square"></i></a></li>
                    </ul>
                </nav>
            </div>
            <div class="container2">
                <div class="logo">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                            } ?>
                </div>
                <nav class="nav2">
                    <ul class="menu">
                    <?php
                            wp_nav_menu(array(
                                'theme_location' => 'headerMenu2'
                            ));
                        ?>
                    </ul>
                    <div class="donate_button">
                        <!-- <form action="https://www.paypal.com/donate" method="post" target="_top">
                            <input type="hidden" name="hosted_button_id" value="ZGKBL2NSKCV98" />
                            <button id="donate" name="submit">Donate</button>
                        </form> -->
                        <form action="<?php echo site_url("/donate") ?>" target="_top">
                            <input type="hidden" name="hosted_button_id"  />
                            <button id="donate" name="submit">Donate</button>
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Simulate a smartphone / tablet -->
        <!-- Top Navigation Menu -->
        <div class="topnav">
            <div class="mobile-logo">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                        } ?>
            </div>
            <div id="myLinks">
            <nav class="col-2">
           <?php
                wp_nav_menu(array(
                    'theme_location' => 'footerMenu1'
                ))
            ?>
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
        </div>
            </div>
            <a class="icon">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- End smartphone / tablet look -->
    </div>
    
    
