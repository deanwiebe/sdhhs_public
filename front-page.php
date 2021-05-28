<?php
get_header(); 

$vid1 = get_field('vid_1');

?>
<div class="top-of-banner-access">
    <div class="access-button">
        <i class="fas fa-universal-access"></i>
    </div>
</div>
<div class="top-of-banner-asl">
    <div class="access-button">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 10 10" style="enable-background:new 0 0 10 10;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:#9DCD5A;stroke:#9DCD5A;stroke-width:0.25;stroke-miterlimit:10;}
                .st1{fill:#003c4f;}
                .st2{font-family:''Open Sans', sans-serif';}
                .st3{font-size:2.7px; font-weight: bold;}
                .st4{fill:none;stroke:#23578F;stroke-width:0.2 ;stroke-miterlimit:10;}
            </style>
            <circle class="st0" cx="5" cy="5.5" r="3.81"/>
            <text transform="matrix(1 0 0 1 2.65 6.2818)" class="st1 st2 st3">ASL</text>
            <circle class="st4" cx="5" cy="5.5" r="3.15"/>
        </svg>
    </div>
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
<div class="front-page-banner page-banner" style="background-image: url('<?php echo get_field('background_image_') ?>')">
    <video autoplay muted playsinline loop class="videoInsert">
    <source  src="<?php echo $vid1 ?>">
    <source src="movie.ogg" type="video/ogg">
    Your browser does not support the video tag.
    </video>
    <div class="tagline front-page">
      <?php 
      the_content();
      ?>
    </div>
    <div class="page-asl">
        <iframe width="560" height="400" src="<?php echo get_field("asl_video") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<div class="main">
    <div class="mainLinks">
        <ul>
            <li>
                <a href="<?php echo esc_url(site_url('/interpreting')) ?>">
                    <i class="fas fa-american-sign-language-interpreting"></i>
                    <h2>Interpreting</h2>
                    <p>To book an ASL Interpreter or other information about ASL Interpreting</p>
                </a>
            </li>
            <li>
                <a href="<?php  echo esc_url(site_url('/cccc-preschool')) ?>">
                    <i class="fas fa-pencil-alt"></i>
                    <h2>CCCC Preschool</h2>
                    <p>See what we do at the DHH Preschool in Saskatoon!</p>
                </a>
            </li>
            <li>
            <a href="https://sites.google.com/sdhhs.com/sdhhs">
                <i class="fas fa-scroll"></i>
                <h2>Teachers' Resources</h2>
                <p>DHH resources for Teachers and other professionals</p>
            </a>
            </li>
            <li>
                <a href="<?php echo esc_url(site_url('/vocational-services')) ?>">
                <i class="fas fa-people-arrows"></i>
                <h2>Vocational</h2>
                <p>Explore your educational and employment options</p>
            </a>
            </li>
            <li>
                <a href="<?php echo esc_url(site_url('/sign-support-professional')) ?>">
                <i class="fas fa-users"></i>
                <h2>Sign Support Professional</h2>
                <p>Language enhancement for DHH</p>
            </a>
            </li>
        </ul>
    </div>
    <div class="mainPosts">
        <div class="postsContainer">
            <h1>What's Happening</h1>
            <div class="mainPostCards">
                <ul>
                <li>
                    <?php
                        $books = new WP_QUERY(array(
                            'posts_per_page' => 1,
                            'post_type' => 'book'
                        ));
                        while($books->have_posts()){
                            $books->the_post();?>
                             <div class="mainPostTitles">
                             <a href="<?php echo esc_url(site_url("/book")) ?>">
                                <h2><span>Books</span></h2>
                            </a>
                            </div>
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
                    <?php }
                        wp_reset_postdata();
                        ?>
                    </li>
                    <li>
                        <?php
                            $events = new WP_QUERY(array(
                                'posts_per_page' => 1,
                                'post_type' => 'event'
                            ));
                            while($events->have_posts()){
                                $events->the_post();?>
                                <div class="mainPostTitles">
                                <a href="<?php echo esc_url(site_url("/events")) ?>">
                                    <h2><span>Events</span></h2>
                                </a>
                                </div>
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
                        <?php }
                        wp_reset_postdata();
                        ?>    
                    </li>
                    <li>
                    <?php
                        $news = new WP_QUERY(array(
                            'posts_per_page' => 1,
                            'post_type' => 'news'
                        ));
                        while($news->have_posts()){
                            $news->the_post();?>
                             <div class="mainPostTitles">
                             <a href="<?php echo esc_url(site_url("/news")) ?>">
                                <h2><span>News</span></h2>
                            </a>
                            </div>
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
                    <?php }
                        wp_reset_postdata();
                        ?> 
                    </li>
            </div>
        </div>
    </div>
    <div class="volunteer">
        <a href="<?php echo esc_url(site_url('/volunteer')) ?>"><h1><span><i class="far fa-heart"></i></span></h1></a>
        <?php echo get_field('volunteer_heart') ?>
    </div>
    <?php
        echo do_shortcode('[smartslider3 slider="2"]');
        ?> 
</div>
<?php
get_footer();
?>