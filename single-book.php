<?php
get_header(); 
get_template_part('banner');
while(have_posts()){
    the_post();?>
    <div class="single-book-bag">
     <div class="card" style="width: 20em;">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('front-page-cards') ?>" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title"><?php the_title() ?></h2>
                    <hr>
                    <a href="<?php echo site_url('/book') ?>"><span>Back to Books</span><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <iframe width="560" height="400" src="<?php echo get_field("asl_video") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
<?php }
get_footer();
?>