<?php
get_header(); 
while(have_posts()){
    the_post();?>
<!-- <div class="top-of-banner-asl">
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
</div> -->
<?php get_template_Part('banner'); ?>
<div class="generic-content">
    <div class="row">
        <img src="<?php the_post_thumbnail_url('single-event-poster') ?>" alt="" srcset="">
    </div>
    <div class="row row-content">
        <div class="single-content">
        <h1><?php the_title() ?></h1>
            <h2><?php echo $formattedDate ?></h2>
            <?php the_content() ?>
            <p>posted on <?php the_time('F j, Y') ?></p>
            <div class="">
                <iframe width="560" height="400" src="<?php echo get_field("asl_video") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <a href="<?php echo site_url('/news') ?>"><span>Back to News</span><i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</div>
<?php }

get_footer();
?>