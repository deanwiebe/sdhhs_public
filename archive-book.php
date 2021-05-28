<?php
get_header();
get_template_part('banner');
?>
<div class="banner page-banner">
    <div class="banner-image">
        <?php dynamic_sidebar( 'books_banner_image' ); ?>     
    </div>
    <div class="tagline">
        <h1 class="page-title">Books</h1>
    </div>
</div>
<div class="archive-page">
    <div class="archive-top-two">
        <ul>
            <?php
                $news = new WP_QUERY(array(
                    'posts_per_page' => 1,
                    'post_type' => 'book'
                ));
                while($news->have_posts()){
                    $news->the_post();?>
                    <li>
                        <div class="card">
                            <a id="card-pic" href="<?php the_permalink() ?>">
                                <img class="card-img-top" src="<?php the_post_thumbnail_url('arhive-page-top-two') ?>" alt="Card image cap">
                            </a>
                        </div>
                    </li>
                    <div class="card">
                        <div class="archive-body">
                            <h2 class="card-title"><?php the_title() ?></h2>
                            <hr>
                            <iframe width="560" height="400" src="<?php echo get_field("asl_video") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
            <?php }
                wp_reset_postdata();
                ?> 
        </ul>
    </div>
    <div class="archive-bottom-half">
        <div class="left-side">
            <div class="archive-catch-line">
                <h2>Click on a book to watch the ASL!</h2>
            </div>
            <div class="archive-posts">
                <ul>
                    <?php
                    $allBooks = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'book'
                    ));
                        while($allBooks->have_posts()){
                            $allBooks->the_post() ?>
                            <li>
                                <div class="card" style="width: 20em;">
                                    <a id="card-pic" href="<?php the_permalink() ?>">
                                        <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                        <h2 class="card-title"><?php the_title() ?></h2>
                                        <hr>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                        <a href="<?php the_permalink() ?>"><span>SEE THE ASL</span><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div> 
                            </li>
                    <?php }
                    ?>
                </ul>
            </div>
        </div>
        <div class="right-side"> 
            <ul>
                <h1>Videos</h1>
                <?php
                    while($allBooks->have_posts()){
                        $allBooks->the_post(); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                <?php } 
                ?>
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