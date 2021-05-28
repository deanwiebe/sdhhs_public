<?php
get_header(); 
?>
<div class="top-of-banner-access">
    <div class="access-button">
        <i class="fas fa-universal-access"></i>
    </div>
</div>
<div class="accessControls">
    <h1>Access Controls</h1>
    <div class="font-size col">
        <h2>Text Size</h2>
        <div class="text-options default"><h3>Default</h3></div>
        <div class="text-options medium"><h3>Medium</h3></div>
        <div class="text-options large"><h3>Large</h3></div>
    </div>
    <div class="contrast col">
        <h2>Colour Contrast</h2>
        <div class="text-options contrast-default"><h3>Default</h3></div>
        <div class="text-options inverted"><h3>Inverted</h3></div>
        <div class="text-options high-contrast"><h3>High Contrast</h3></div>
    </div>
</div>
<div class="banner page-banner">
    <div class="banner-image">
        <img src="<?php the_post_thumbnail_url('banner-left-image'); ?>" alt="">
    </div>
    <div class="tagline">
        <h1 class="page-title"><?php the_title() ?></h1>
    </div>
</div>
<div class="service-content">
<!-- -------------------------------------------------------------------------BLock 1 -->
    <div class="block-one">
        <div class="title-and-video">
            <div class="service-title" style="background-color:<?php the_field('service_color'); ?>">
                <div class="service-asl">
                    <iframe width="560" height="400" src="<?php echo get_field("block1b") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h2 style="color:<?php the_field('service_text_color'); ?>"><?php the_field('block1a') ?></h2>
                <div class="video-button">
                    <div class="top-of-banner-asl-services">
                        <div class="service-asl-button service-button">
                            <svg version="1.1" id="serviceButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                                    .st1{fill:#003c4f;}
                                    .st2{font-family:''Open Sans', sans-serif';}
                                    .st3{font-size:2.7px; font-weight: bold;}
                                    .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
                                </style>
                                <circle class="st0" cx="5" cy="5.5" r="3.81"/>
                                <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
                                <circle class="st4" cx="5" cy="5.5" r="3.15"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content">
            <p><?php the_field("block1c") ?></p>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------BLock 2 -->
    <?php
        if(get_field('block2a')){ ?>
            <div class="block-two">
        <div class="title-and-video">
            <div class="service-title" style="background-color:<?php the_field('service_color'); ?>">
            <div class="service-asl">
                <iframe width="560" height="400" src="<?php echo get_field("block2b") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h2 style="color:<?php the_field('service_text_color'); ?>"><?php the_field('block2a') ?></h2>
                <div class="video-button">
                <div class="top-of-banner-asl-services">
                    <div class="service-asl-button service-button">
                        <svg version="1.1" id="serviceButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                                .st1{fill:#003c4f;}
                                .st2{font-family:''Open Sans', sans-serif';}
                                .st3{font-size:2.7px; font-weight: bold;}
                                .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
                            </style>
                            <circle class="st0" cx="5" cy="5.5" r="3.81"/>
                            <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
                            <circle class="st4" cx="5" cy="5.5" r="3.15"/>
                        </svg>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="block-content">
            <p><?php the_field("block2c") ?></p>
        </div>
    </div>
       <?php }
    ?>
     <!-- -------------------------------------------------------------------------BLock 3 -->
     <?php
        if(get_field('block3a')){ ?>
            <div class="block-two">
        <div class="title-and-video" style="background-color:<?php the_field('service_color'); ?>">
            <div class="service-title">
            <div class="service-asl">
                <iframe width="560" height="400" src="<?php echo get_field("block3b") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h2 style="color:<?php the_field('service_text_color'); ?>"><?php the_field('block3a') ?></h2>
                <div class="video-button">
                <div class="top-of-banner-asl-services">
                    <div class="service-asl-button service-button">
                        <svg version="1.1" id="serviceButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                                .st1{fill:#003c4f;}
                                .st2{font-family:''Open Sans', sans-serif';}
                                .st3{font-size:2.7px; font-weight: bold;}
                                .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
                            </style>
                            <circle class="st0" cx="5" cy="5.5" r="3.81"/>
                            <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
                            <circle class="st4" cx="5" cy="5.5" r="3.15"/>
                        </svg>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="block-content">
            <p><?php the_field("block3c") ?></p>
        </div>
    </div>
       <?php }
    ?>
         <!-- -------------------------------------------------------------------------BLock 4 -->
         <?php
        if(get_field('block4a')){ ?>
            <div class="block-two">
        <div class="title-and-video">
            <div class="service-title" style="background-color:<?php the_field('service_color'); ?>">
            <div class="service-asl">
                <iframe width="560" height="400" src="<?php echo get_field("block4b") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h2 style="color:<?php the_field('service_text_color'); ?>"><?php the_field('block4a') ?></h2>
                <div class="video-button">
                <div class="top-of-banner-asl-services">
                    <div class="service-asl-button service-button">
                        <svg version="1.1" id="serviceButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                                .st1{fill:#003c4f;}
                                .st2{font-family:''Open Sans', sans-serif';}
                                .st3{font-size:2.7px; font-weight: bold;}
                                .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
                            </style>
                            <circle class="st0" cx="5" cy="5.5" r="3.81"/>
                            <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
                            <circle class="st4" cx="5" cy="5.5" r="3.15"/>
                        </svg>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="block-content">
            <p><?php the_field("block4c") ?></p>
        </div>
    </div>
       <?php }
    ?>
     <!-- -------------------------------------------------------------------------BLock 5 -->
     <?php
        if(get_field('block5a')){ 
            ?>
            <div class="block-two">
        <div class="title-and-video">
            <div class="service-title" style="background-color:<?php the_field('service_color'); ?>">
            <div class="service-asl">
                <iframe width="560" height="400" src="<?php echo get_field("block5b") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h2 style="color:<?php the_field('service_text_color'); ?>"><?php the_field('block5a') ?></h2>
                <div class="video-button">
                <div class="top-of-banner-asl-services">
                    <div class="service-asl-button service-button">
                        <svg version="1.1" id="serviceButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                                .st1{fill:#003c4f;}
                                .st2{font-family:''Open Sans', sans-serif';}
                                .st3{font-size:2.7px; font-weight: bold;}
                                .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
                            </style>
                            <circle class="st0" cx="5" cy="5.5" r="3.81"/>
                            <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
                            <circle class="st4" cx="5" cy="5.5" r="3.15"/>
                        </svg>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="block-content">
            <p><?php the_field("block5c") ?></p>
        </div>
    </div>
       <?php }
    ?>
         <!-- -------------------------------------------------------------------------BLock 6 -->
         <?php
        if(get_field('block6a')){ ?>
            <div class="block-two">
        <div class="title-and-video">
            <div class="service-title" style="background-color:<?php the_field('service_color'); ?>">
            <div class="service-asl">
                <iframe width="560" height="400" src="<?php echo get_field("block6b") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h2 style="color:<?php the_field('service_text_color'); ?>"><?php the_field('block6a') ?></h2>
                <div class="video-button">
                <div class="top-of-banner-asl-services">
                    <div class="service-asl-button service-button">
                        <svg version="1.1" id="serviceButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                                .st1{fill:#003c4f;}
                                .st2{font-family:''Open Sans', sans-serif';}
                                .st3{font-size:2.7px; font-weight: bold;}
                                .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
                            </style>
                            <circle class="st0" cx="5" cy="5.5" r="3.81"/>
                            <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
                            <circle class="st4" cx="5" cy="5.5" r="3.15"/>
                        </svg>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="block-content">
            <p><?php the_field("block6c") ?></p>
        </div>
    </div>
       <?php }
    ?>
             <!-- -------------------------------------------------------------------------BLock 7 -->
             <?php
        if(get_field('block7a')){ ?>
            <div class="block-two">
        <div class="title-and-video">
            <div class="service-title" style="background-color:<?php the_field('service_color'); ?>">
            <div class="service-asl">
                <iframe width="560" height="400" src="<?php echo get_field("block7b") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h2 style="color:<?php the_field('service_text_color'); ?>"><?php the_field('block7a') ?></h2>
                <div class="video-button">
                <div class="top-of-banner-asl-services">
                    <div class="service-asl-button service-button">
                        <svg version="1.1" id="serviceButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                                .st1{fill:#003c4f;}
                                .st2{font-family:''Open Sans', sans-serif';}
                                .st3{font-size:2.7px; font-weight: bold;}
                                .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
                            </style>
                            <circle class="st0" cx="5" cy="5.5" r="3.81"/>
                            <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
                            <circle class="st4" cx="5" cy="5.5" r="3.15"/>
                        </svg>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="block-content">
            <p><?php the_field("block7c") ?></p>
        </div>
    </div>
       <?php }
    ?>
</div>

<?php
get_footer();
?>