<?php
get_header(); 
    $date_string = get_field('date');
    $newDate = strtotime($date_string);
    $formattedDate = date("F j, Y g:i a", $newDate);
    ?>

<?php get_template_Part('banner'); ?>
<div class="generic-content">
    <div class="row">
        <img src="<?php the_post_thumbnail_url('single-event-poster') ?>" alt="" srcset="">
    </div>
    <div class="row row-content">
        <div class="single-content">
        <h1><?php the_title() ?></h1>
           
            <?php the_content() ?>
            <p>posted on <?php the_time('F j, Y') ?></p>
            <div class="">
                <iframe width="560" height="400" src="<?php echo get_field("asl_video") ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <a href="<?php echo site_url('/events') ?>"><span>Back to Events</span><i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</div>
        <?php
        $today = date("Y-m-d H:i"); 
        $date = get_field('date');
        if($today < $date){ ?>
            <div class="archive-catch-line">
                <h2>Check back after the event for photos</h2>
            </div>
       <?php }
                if($today > $date){ ?>
                <div class="archive-catch-line">
                    <h2>This Event has passed! <?php 
                    if(get_field('gallery')){
                         echo('See the Gallery below.');
                         }?></h2>
                    <div class="event-gallery">
                        <?php the_field('gallery') ?>
                    </div>
                </div>
        <?php }
    ?>
<?php 

get_footer();
?>