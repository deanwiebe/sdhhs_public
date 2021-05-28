<?php
get_header();
get_template_part('banner');
?>
<div class="banner page-banner">
    <div class="banner-image">
        <?php dynamic_sidebar( 'staff_banner_image' ); ?>     
    </div>
    <div class="tagline">
        <h1 class="page-title">Staff</h1>
    </div>
</div>
<div class="archive-page">
    <div class="temporaryBio" style="text-align:center">
        <h1>Pictures and biography to follow</h1>
    </div>
    <div class="archive-staff">
        <ul>
            <?php
                $staff = new WP_QUERY(array(
                    'posts_per_page' => -1,
                    'post_type' => 'staff',
                    'orderby' => 'date',
                    'order'   => 'ASC'
                ));
                while($staff->have_posts()){
                    $staff->the_post(); ?>
            <li>
                <div class="card">
                    <a href="mailto: <?php the_field('email') ?>">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="">
                    </a>
                    <div class="archive-staff-body">
                        <h2 class="card-title"><?php the_title() ?></h2>
                        <p class="card-text"><?php the_content() ?></p>
                    </div>
                </div>
                <div class="email">
                    <p><a href="mailto: <?php the_field('email') ?>"><?php the_field('email') ?></a></p> 
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php
get_footer();
?>