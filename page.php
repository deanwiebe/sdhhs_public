<?php
get_header(); 
?>
<div class="top-of-banner-asl">
    <div class="access-button">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
<div class="top-of-banner-access">
    <div class="access-button">
        <i class="fas fa-universal-access"></i>
    </div>
</div>
<div class="page-asl">
    <iframe width="560" height="400" src="<?php echo get_field("asl_video") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
<div class="content">
    <div class="block-one">
        <?php the_content() ?>
    </div>
</div>
<?php if(is_page('contact')){ ?>
    <div class="social-media-page">
        <hr class="hr-page">
        <div class="page-social">
            <h2>Don't forget to check our social medias</h2>
            <ul class="ul-page">
                <li><a href=" <?php echo esc_url(site_url('/search')) ?>"><i class="fas fa-search"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UComGRElAUtQBt2vXt7t_WQA"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/sdhhsinc/?hl=en"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/SDHHSinc/"><i class="fab fa-facebook-square"></i></a></li>
            </ul>
        </div>
      <hr class="hr-page">
  </div>
<?php } ?>
<?php
get_footer();
?>