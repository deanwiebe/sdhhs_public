<?php
get_header();
?>
<div class="top-of-banner-access">
    <div class="access-button">
        <i class="fas fa-universal-access"></i>
    </div>
</div>
<div class="top-of-banner-asl">
    <div class="access-button">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 13"><defs><style>.cls-1{fill:#9dcd5a;stroke-width:0.47px;}.cls-1,.cls-3{stroke:#fff;stroke-miterlimit:10;}.cls-2{font-size:3.77px;fill:#f1f2f2;font-family:MyriadPro-Regular, Myriad Pro;}.cls-3{fill:none;stroke-width:0.62px;}</style></defs><circle class="cls-1" cx="6.65" cy="7.30" r="4.71"/><text class="cls-2" transform="translate(3 8.5)">ASL</text><circle class="cls-3" cx="6.65" cy="7.30" r="3.75"/></svg>
    </div>
</div>
<div class="banner" style="background-image: url('<?php echo get_field('background_image_right') ?>')">
    <div class="banner-image">
        <img src="<?php echo get_field('background_image_left') ?>" alt="" srcset="">
    </div>
    <div class="tagline">
        <h1 class="page-title">Events</h1>
    </div>
</div>
<div class="content-container">
<?php
while(have_posts()){
    the_post() ?>
        <a href="<?php the_permalink() ?>"><h1><?php the_title() ?></h1></a>
        <?php
 echo paginate_links();
?>
        <p>posted by <?php the_author_posts_link() ?> on <?php the_time('F j, Y') ?> in <?php echo get_the_category_list(',') ?></p>

        <p><?php the_excerpt() ?></p>
<?php } ?>
</div>
<?php
get_footer();
?>