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
<div class="donate-content">
    <div class="donate-banner">
        <div class="donate-banner-image">
            <img src="<?php the_post_thumbnail_url('donate-banner-image'); ?>" alt="">       
        </div>
        <div class="donate-banner-tagline">
            <h1><?php the_content() ?></h1>
        </div>
    </div>
    <div class="donate-block-1">
        <?php the_field('donate_field_1') ?>
    </div>
    <div class="donate-block-2">
        <?php the_field('donate_field_2') ?>
        <div class="donate-button">
            <button><a href="<?php the_field('donate_link_1') ?>" target="new">Click here to donate</a></button>
        </div>
    </div>
    <div class="donate-block-2" id="paypal">
        <?php the_field('donate_field_3') ?>
        <div class="donate-button">
            <form action="https://www.paypal.com/donate" method="post" target="new">
                <input type="hidden" name="hosted_button_id" value="ZGKBL2NSKCV98" />
                <button id="" name="submit">Click here to donate</button>
            </form>
        </div>
    </div>
    <div class="donate-block-2" id="etransfer">
        <?php the_field('donate_field_4') ?>
        <div class="donate-button">
            <button><a href="<?php the_field('donate_link_3') ?>" target="new">Click for more information</a></button>
        </div>
    </div>
    <div class="donate-block-5">
        <?php the_field('donate_field_5') ?>
    </div>
    <div class="donate-heart">
        <a href="<?php echo esc_url(site_url('/volunteer')) ?>"><h1><span><i class="far fa-heart"></i></span></h1></a>
        <h2>Thank you for thinking of SDHHS!</h2>
    </div>
    <div class="donate-bottom-banner">
            <img src="<?php the_field('donate_bottom_image') ?>" alt="">       
        </div>
</div>

<?php
get_footer();
?>