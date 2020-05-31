
  <?php

  $args = array(
    'post_type' => 'sales-rings',
    'posts_per_page' => -1,
  );

  // The Query
  $the_query = new WP_Query( $args );

  // The Loop
   if ( $the_query->have_posts() ) : ?>

   <div class="container sales-rings">
     <div class="row">

       <?php while ( $the_query->have_posts() ) : $the_query->the_post();

       $video_link = get_field('video_link');

       ?>

       <div class="col-md-4 sales-rings__single">

         <?php echo get_the_post_thumbnail(); ?>

         <h2><?php echo the_title(); ?></h2>

          <?php echo the_content(); ?>

          <?php if ($video_link): ?>
            <a class="fancybox" data-fancybox-type="iframe" href="<?php echo $video_link; ?>">
              Click here to watch
            </a>
          <?php endif; ?>



       </div>


      <?php endwhile; wp_reset_postdata(); ?>

     </div>

    </div>

  <?php endif;  ?>
