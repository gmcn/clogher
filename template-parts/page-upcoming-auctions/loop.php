
  <?php

  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $args = array(
    'post_type' => 'auctions',
    'posts_per_page' => 1,
    'paged' => $paged
  );

  // The Query
  $the_query = new WP_Query( $args );

  // The Loop
   if ( $the_query->have_posts() ) : ?>

   <div class="container upcoming-auction">
     <div class="row">

       <?php while ( $the_query->have_posts() ) : $the_query->the_post();

       $auction_description = get_field('auction_description');

       ?>

       <div class="col-md-12 upcoming-auction__single">

         <h2><?php echo the_title(); ?>
           <span><?php echo $auction_description ?></span>
         </h2>

          <?php echo the_content(); ?>

       </div>


      <?php endwhile; wp_reset_postdata(); ?>

      <?php if (function_exists("pagination")) {
          echo pagination($custom_query->max_num_pages);
      } ?>

     </div>

    </div>

  <?php endif;  ?>
