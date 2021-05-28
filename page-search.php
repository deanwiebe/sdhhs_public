<?php
get_header(); 
?>
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
        <div class="page-asl">
        <iframe width="560" height="400" src="<?php echo get_field("asl_video") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    <div class="tagline">
        <h1 class="page-title"><?php the_title() ?></h1>
    </div>
</div>
<div class="content">
    <div class="block-one">
        <form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
            <input type="search" name="s">
            <input type="submit" value="Search">
        </form>
    </div>
</div>
<?php
get_footer();
?>