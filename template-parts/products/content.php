<?php

	$thumb = get_the_post_thumbnail( $post_id, 'full' , array( 'loading' => 'lazy' ) );
	$price = get_field('product_price');

 ?>


<div class="container product-single">

	<div class="row">
		<div class="col-md-6">
			<?php echo $thumb; ?>
		</div>
		<div class="col-md-6">

			<div class="product-single__nav">
				<?php next_post_link( '%link','<img src="' . get_template_directory_uri() . '/images/prev.svg" alt="Next Product">' ) ?>
				<?php previous_post_link( '%link','<img src="' . get_template_directory_uri() . '/images/next.svg" alt="Previous Product">' ) ?>



			</div>

			<h1><?php echo the_title(); ?></h1>
			<p class="price"><?php echo $price; ?></p>
			<div class="product-single__content">
				<?php echo the_content(); ?>
			</div>

			<p class="enquiry">To make an enquiry or purchase, get in touch with Julie or Robert at mart office on <a href="tel:02885548500">02885548500</a>  or <a href="tel:02885548279">02885548279</a>, or email <a href="mailto:sales@cloghermart.com ">sales@cloghermart.com</a></p>

			<p class="terms">All sales are subject to our <a href="/terms-conditions">Terms & Conditions</a></p>

		</div>
	</div>

</div>
