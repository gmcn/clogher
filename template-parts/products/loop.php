<div class="feat_header wow fadeIn">
  <?php //echo get_the_post_thumbnail(); ?>
  <?php echo get_the_post_thumbnail(95, 'full', array( 'class' => 'hidden-xs hidden-sm' )); ?>
  <?php echo get_the_post_thumbnail(95, 'header-mobile', array( 'class' => 'hidden-md hidden-lg' )); ?>
</div>

<div class="container page-default">

	<h1>For Sale</h1>

</div>

<div class="container product-loop">
	<div class="row">

    <div class="col-md-3 hidden-xs hidden-sm">
      <p class="title">Categories</p>
    </div>

    <div class="col-md-9 product-loop__right">
        <p class="title">
          <a href="/products">Show All</a>
        </p>

    </div>
  </div>

  <div class="row">

		<div class="col-md-3 product-loop__cats">


			<?php $productsCategories = get_terms( 'products-category', 'orderby=count&hide_empty=1' ); ?>

			<ul>
				<?php foreach ( $productsCategories as $productsCategory ) { ?>
				<li>
					<a href="/products-category/<?php echo $productsCategory->slug ?>">
						<img src="<?php echo get_template_directory_uri() ?>/images/point.svg" alt="<?php echo $productsCategory->name ?>"> <?php echo $productsCategory->name ?>
					</a>
          <span>(<?php echo $productsCategory->count; ?>)</span>
				</li>
				<?php  } ?>
			</ul>

      <p class="title hidden-xs hidden-sm">Latest Products</p>

        <?php

        $args = array(
          'post_type' => 'products',
          'posts_per_page' => 3,
        );

        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
         if ( $the_query->have_posts() ) : ?>
         <ul class="hidden-xs hidden-sm">
             <?php while ( $the_query->have_posts() ) : $the_query->the_post();

             $price = get_field('product_price');

             ?>
             <li class="row">

               <a href="<?php echo the_permalink() ?>">

                 <div class="col-md-5">
                   <?php echo $thumb; ?>
                   <?php echo preg_replace( '/(width|height)="\d*"/', '', get_the_post_thumbnail( get_the_ID(), 'product-archive' ) ); ?>
                 </div>

                 <div class="col-md-7">

                   <h3><?php echo the_title(); ?></h3>

                   <p class="price"><?php echo $price ?></p>

                 </div>

               </a>

             </li>

            <?php endwhile; wp_reset_postdata(); ?>

          </ul>
        <?php endif;  ?>




		</div>

		<div class="col-md-9 product-loop__products">

			<?php while ( have_posts() ) : the_post();

			$price = get_field('product_price');
			$thumb = get_the_post_thumbnail( $post_id, 'product-archive' , array( 'loading' => 'lazy' ) );

			?>

			<div class="row product-loop__single">
				<div class="col-md-4">
					<?php echo $thumb; ?>
				</div>

				<div class="col-md-8">
					<h2><?php echo the_title(); ?></h2>
					<?php echo the_excerpt(); ?>
					<p class="price"><?php echo $price ?></p>
					<a href="<?php echo the_permalink() ?>">Find out more</a>
				</div>
			</div>



			<?php endwhile; wp_reset_postdata(); ?>

		</div>

	 <?php the_posts_pagination( array(
		 	'mid_size'  => 2,
		 	'prev_text' => __( '<<', 'textdomain' ),
		 	'next_text' => __( '>>', 'textdomain' ),
		 ) ); ?>

	</div>

 </div>
