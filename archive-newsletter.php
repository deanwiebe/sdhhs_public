<?php
get_header();
get_template_part('banner');
?>
<div class="banner page-banner">
    <div class="banner-image">
        <?php dynamic_sidebar( 'newsletter_banner_image' ); ?>     
    </div>
    <div class="tagline">
        <h1 class="page-title">Newsletter</h1>
    </div>
</div>
<div class="archive-page">
    <div class="archive-top-two">
        <ul>
            <?php
                $year = date("Y");
                $lastYear = date("Y") - 1;
                $newsletter = new WP_QUERY(array(
                    'posts_per_page' => 1,
                    'post_type' => 'newsletter',
                    'order' => 'DESC',
                    'date_query' => array(
                        'year' => $year
                    )
                ));
                while($newsletter->have_posts()){
                    $newsletter->the_post();?>
                    <li>
                        <div class="">
                            <a id="card-pic" href="<?php echo get_field("newsletter-link-pdf") ?>">
                                <img class="card-img-top" src="<?php the_post_thumbnail_url('arhive-page-top-two') ?>" alt="Card image cap">
                            </a>
                        </div>
                    </li>
                    <div class="archive-body">
                        <h2 class="card-title"><?php the_title() ?></h2>
                        <hr>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                        <a href="<?php echo get_field("newsletter-link-pdf") ?>"><span>FIND OUT MORE</span><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
            <?php }
                wp_reset_postdata();
                ?> 
        </ul>
    </div>
    <div class="archive-bottom-half">
        <div class="left-side">
            <div class="archive-catch-line">
                <h2><?php echo($year) ?> Newsletters</h2>
            </div>
            <div class="archive-posts">
                <ul>
                    <?php
                    $thisYear = new WP_QUERY(array(
                        'posts_per_page' => 3,
                        'post_type' => 'newsletter',
                        'order' => 'ASC',
                        'date_query' => array(
                            'year' => $year
                        )
                    ));
                        while($thisYear->have_posts()){
                            $thisYear->the_post() ?>
                            <li>
                                <div class="card" style="width: 20em;">
                                    <a id="card-pic" href="<?php echo get_field("newsletter-link-pdf") ?>">
                                        <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                        <h2 class="card-title"><?php the_title() ?></h2>
                                        <hr>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                        <a href="<?php echo get_field("newsletter-link-pdf") ?>"><span>READ MORE</span><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div> 
                            </li>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <div class="archive-catch-line">
                <h2><?php echo($lastYear) ?> Newsletters</h2>
            </div>
            <div class="archive-posts">
                <ul>
                    <?php
                    $thisYear = new WP_QUERY(array(
                        'posts_per_page' => 3,
                        'post_type' => 'newsletter',
                        'order' => 'ASC',
                        'date_query' => array(
                            'year' => $lastYear
                        )
                    ));
                        while($thisYear->have_posts()){
                            $thisYear->the_post() ?>
                            <li>
                                <div class="card" style="width: 20em;">
                                    <a id="card-pic" href="<?php echo get_field("newsletter-link-pdf") ?>">
                                        <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                        <h2 class="card-title"><?php the_title() ?></h2>
                                        <hr>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                        <a href="<?php echo get_field("newsletter-link-pdf") ?>"><span>READ MORE</span><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div> 
                            </li>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
        <div class="right-side">
            <ul>
                <h1>Quick Clicks</h1>
                <li><a href="<?php echo esc_url(site_url('/reports')) ?>">AGM Report</a></li>
                <li><a href="<?php echo esc_url(site_url('/events')) ?>">Events</a></li>
                <li><a href="<?php echo esc_url(site_url('/news')) ?>">News</a></li>
                <li><a href="<?php echo esc_url(site_url('/book')) ?>">Books</a></li>
            </ul>
            <div class="archive-social-media">
                <hr>
                <p>Don't forget to check our Social Medias!</p>
                <ul class="archive-social">
                    <li><a href="https://www.youtube.com/channel/UComGRElAUtQBt2vXt7t_WQA"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/sdhhsinc/?hl=en"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/SDHHSinc/"><i class="fab fa-facebook-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>