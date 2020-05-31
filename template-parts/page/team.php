<?php if( have_rows('our_team_members') ):

  $our_team_introduction = get_field('our_team_introduction');

  ?>


  <div class="container our_team">

    <div class="row">

      <div class="col-md-12">
        <h3>Our Team</h3>
      </div>



      <div class="col-md-6 our_team__wrapper wow fadeIn matchheight">
        <div class="our_team__intro matchheight">
          <?php echo $our_team_introduction ?>
        </div>

      </div>

  	<?php while( have_rows('our_team_members') ): the_row();

  		// vars
  		$image = get_sub_field('members_photo');
  		$name = get_sub_field('members_name');
  		$title = get_sub_field('members_title');

  		?>

      <div class="col-xs-6 col-md-3 our_team__members wow fadeIn matchheight">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <div class="hover">
          <div class="our_team__members__details">
            <h3><?php echo $name ?></h3>
            <p><?php echo $title ?></p>
          </div>

        </div>
      </div>

  	<?php endwhile; ?>

  </div>


  </div>


<?php endif; ?>
