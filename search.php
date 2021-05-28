<?php
get_header();
get_template_part('banner');
?>
<h1 class="search-results">Search Results for: <em><?php echo esc_html(get_search_query()) ?></em></h1>
<div class="single-book-bag">
<?php
while(have_posts()){
    the_post() ?>
            <div class="card" style="width: 20em;">
                <a href="<?php the_permalink() ?>">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h2 class="card-title"><?php the_title() ?></h2>
                    <hr>
                    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                    <a href="<?php the_permalink() ?>"><span>READ MORE</span><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
<?php } ?>
</div>
<?php
get_footer();
?>