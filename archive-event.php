<?php
get_header();
get_template_part('banner');
?>
<div class="banner page-banner">
    <div class="banner-image">
        <?php dynamic_sidebar( 'events_banner_image' ); ?>     
    </div>
    <div class="tagline">
        <h1 class="page-title">Events</h1>
    </div>
</div>
<div class="archive-page">
    <div class="archive-top-two">
            <?php
                $events = new WP_QUERY(array(
                    'posts_per_page' => -1,
                    'post_type' => 'event',
                    'meta_key' => 'date',
                    'meta_compare' => '>=',
                    'meta_value' => date("Y-m-d H:i")
                ));
                if(!$events->have_posts()){ ?>
                    <div class="archive-catch-line">
                        <h2>Sorry. There are no upcoming events.</h2>
                    </div>
               <?php }else{ ?>
                <div class="archive-catch-line">
                    <h2>Upcoming Events</h2>
                </div>
            <ul>
               <?php while($events->have_posts()){
                    $events->the_post();
                    $today = date("Y-m-d H:i"); 
                    $event_date = get_field('date'); ?>
                        <li>
                            <div class="">
                                <a id="card-pic" href="<?php the_permalink() ?>">
                                    <img class="card-img-top" src="<?php the_post_thumbnail_url('arhive-page-top-two') ?>" alt="Card image cap">
                                </a>
                                <div class="archive-body">
                                    <h2 class="card-title"><?php the_title() ?></h2>
                                    <hr>
                                    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                    <a href="<?php the_permalink() ?>"><span>FIND OUT MORE</span><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </li> 
                <?php }}
                     wp_reset_postdata();
                ?> 
            </ul>
    </div>
    <div class="archive-bottom-half">
        <div class="left-side">
            <div class="archive-catch-line">
                <h2>Click on one of our past events to find out more!</h2>
            </div>
            <div class="archive-posts">
                <ul>
                    <?php
                    $events = new WP_QUERY(array(
                        'posts_per_page' => -1,
                        'post_type' => 'event',
                        'meta_key' => 'date',
                        'meta_compare' => '<=',
                        'meta_value' => date("Y-m-d H:i")
                    ));
                        while($events->have_posts()){
                            $events->the_post() ?>
                            <li>
                                <div class="card" style="width: 20em;">
                                    <a id="card-pic" href="<?php the_permalink() ?>">
                                        <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                        <h2 class="card-title"><?php the_title() ?></h2>
                                        <hr>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                        <a href="<?php the_permalink() ?>"><span>FIND OUT MORE</span><i class="fas fa-long-arrow-alt-right"></i></a>
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
                <h1>Photos from past events</h1>
                <?php
                    while(have_posts()){
                        the_post(); 
                        if(get_field('gallery')){ ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                       <?php }
                     } 
                ?>
            </ul>
            <div class="archive-social-media">
                <hr>
                <p>Don't forget to check our Social Media!</p>
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