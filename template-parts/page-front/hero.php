<?php
/**
 * Note: The design shows a section in the banner 'tile' that seems to indicate that there should
 * be reference made to a particular project however none of the slides in the banner relate to
 * projects so this is not being coded.
 */
?>

<!-- BX Slider with Caption & Read More Link -->
<div id="bxslider">

	<?php if(have_rows('slider')): ?>

		<ul class="bxslider">

			<?php while(have_rows('slider')) : the_row();
					// ACF Sub fields
      		$slide_image = get_sub_field('slide_image');
      		$slide_title = get_sub_field('slide_title');
					$slide_link = get_sub_field('slide_link');
					$slide_desc = get_sub_field('slide_description');
					?>

				<li class="slide">

          <div class="vert-align">
            <div class="container wow fadeInUp">
              <h1><?php echo $slide_title; ?></h1>
              <p><?php echo $slide_desc; ?></p>

              <?php
                $link = get_sub_field('slide_link');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <img src="<?php echo get_template_directory_uri() ?>/images/download_arrow.svg" alt="<?php echo esc_html( $link_title ); ?>"></a>
                <?php endif; ?>
            </div>
          </div>

          <img class="hidden-xs" src="<?php echo esc_url($slide_image['url']); ?>" alt="<?php echo esc_attr($slide_image['alt']); ?>" />

					<?php
						// Image variables.
						$url = $slide_image['url'];
						$title = $slide_image['title'];
						$alt = $slide_image['alt'];
						$caption = $slide_image['caption'];
						// Thumbnail size attributes.
						$size = 'slide-mobile';
						$thumb = $slide_image['sizes'][ $size ];
						$width = $slide_image['sizes'][ $size . '-width' ];
						$height = $slide_image['sizes'][ $size . '-height' ];
						 ?>
						<img class="hidden-sm hidden-md hidden-lg" src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">



				</li>

			<?php endwhile; ?>

		</ul>
  <?php endif; ?>
</div>
