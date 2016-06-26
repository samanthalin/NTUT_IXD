<?php

$post = get_post($_POST['id']);

?>
<div id="single-post post-<?php the_ID(); ?>">

  <?php while (have_posts()) :the_post(); ?>
    <div class="single-img">
        <?php if ( has_post_thumbnail() ) : ?>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') ); ?>
        <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "thumbail" ); //resize the feature img
              $image_width = $image_data[1];
              $image_height = $image_data[2];
              if ($image_height>$image_width) $imgtype = 'vertical';
              else $imgtype = 'horizontal';
        ?>
        <img class="<?php echo $imgtype?>" src="<?php echo $url ?>" />
        <?php endif; ?>
    </div>
    <div class="single-article">
        <h1 class="single-title"><?php the_title();?></h1>

        <div class="single-meta">
            <span>
                <?php the_time('n ,j ,Y'); ?>
            </span>
            <span>| </span>
            <span>
                <?php the_category(' ,');?>
            </span>
            <span>| </span>
            <span>
                <?php the_tags('', ' , ',''); ?>
            </span>
        </div>
        <div class="single-content">
            <?php the_content();?>
        </div>
    </div>
    

  <?php endwhile;?>

</div>
