<?php
get_header();
get_template_part('banner');
?>
<div class="archive-page">
    <div class="archive-catch-line">
        <h2><?php echo single_cat_title() . ' News' ?></h2>
    </div>
    <hr>
    <div class="archive-top-two">
        <ul>
            <?php
                $news = new WP_QUERY(array(
                    'posts_per_page' => 2,
                    'post_type' => 'any',
                    'category_name' => single_cat_title('', false)
                ));
                while($news->have_posts()){
                    $news->the_post();?>
                    <li>
                        <div class="card">
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
            <?php }
                wp_reset_postdata();
                ?> 
        </ul>
    </div>
    <div class="archive-bottom-half">
        <div class="left-side">
            <div class="archive-catch-line">
                <h2><?php echo category_description() ?></h2>
            </div>
            <div class="archive-posts">
                <ul>
                    <?php
                    $news = new WP_QUERY(array(
                      'posts_per_page' => -1,
                      'post_type' => 'any',
                      'category_name' => single_cat_title('', false)
                  ));
                        while($news->have_posts()){
                            $news->the_post() ?>
                            <li>
                                <div class="card" style="width: 20em;">
                                    <a id="card-pic" href="<?php the_permalink() ?>">
                                        <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                        <h2 class="card-title"><?php the_title() ?></h2>
                                        <hr>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                        <a href="<?php the_permalink() ?>"><span>READ MORE</span><i class="fas fa-long-arrow-alt-right"></i></a>
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
                <h1>News Categories</h1>
                <?php
                    $args = array(
                                'taxonomy' => 'category',
                                'orderby' => 'name',
                                'order'   => 'ASC'
                            );

                    $cats = get_categories($args);

                    foreach($cats as $cat) {
                    ?>
                        <li><a href="<?php echo get_category_link( $cat->term_id ) ?>"><?php echo $cat->name; ?></a></li>
                    <?php
                    }
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