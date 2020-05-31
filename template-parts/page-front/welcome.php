<div class="container-fluid">
  <div class="container welcome">


      <div class="welcome_bg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/welcome_bg.svg" alt="Welcome Section Background">
      </div>


    <div class="row">
      <div class="col-md-12 welcome__header">
        <h2 class="wow fadeInRight">WELCOME TO <span>CLOGHER VALLEY LIVESTOCK PRODUCERS</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 welcome__copy matchheight">
        <?php echo the_content(); ?>
      </div>


      <?php if( have_rows('welcome_links') ): ?>

      	<?php while( have_rows('welcome_links') ): the_row();

      		// vars
          $welcome_link_url = get_sub_field('welcome_link_url');
          $welcome_link_title = get_sub_field('welcome_link_title');
      		$welcome_link_img = get_sub_field('welcome_link_img');
      		$welcome_link_sub_title = get_sub_field('welcome_link_sub_title');

      		?>

      		<div class="col-md-3 welcome__link wow fadeInRight matchheight">

            <a href="<?php echo $welcome_link_url; ?>">

              <?php if( !empty( $welcome_link_img ) ): ?>
                  <img src="<?php echo esc_url($welcome_link_img['url']); ?>" alt="<?php echo esc_attr($welcome_link_img['alt']); ?>" />
              <?php endif; ?>
            </a>
            <div class="welcome__link__wrapper">
              <a href="<?php echo $welcome_link_url; ?>">
                <p><?php echo $welcome_link_sub_title ?></p>
                <h3><?php echo $welcome_link_title ?></h3>
              </a>
            </div>

      		</div>

      	<?php endwhile; ?>

      <?php endif; ?>

    </div>
  </div>
</div>
