<?php
get_header();
get_template_part('banner');
?>
<div class="single-book-bag">
hello from archive.php
<?php
while(have_posts()){
    the_post() ?>
            <div class="card" style="width: 20em;">
                <a href="<?php the_permalink() ?>">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="">
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