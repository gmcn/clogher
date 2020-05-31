<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer>

		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<?php $description = get_bloginfo( 'description', 'display' ); ?>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="branding hidden-xs hidden-sm" src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=" <?php echo $description; /* WPCS: xss ok. */ ?>">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<h4>Contact Us</h4>
					Clogher Valley Livestock Producers
					Station Rd, Clogher BT76 0AH <br />
					Email: <a href="mailto:info@cloghermart.com">info@cloghermart.com</a><br />
					Tel: <a href="tel:028 8554 8279">028 8554 8279</a> / <a href="tel:028 8554 8500">028 8554 8500</a>
				</div>
				<div class="col-md-4 col-md-offset-1">
					<h4>Upcoming Sales</h4>

					<?php

					$args = array(
						'post_type' => 'sales-rings',
						'posts_per_page' => 2,
					);

					// The Query
					$the_query = new WP_Query( $args );

					// The Loop
					 if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

					 $date = get_field('date')

					 ?>

					 <div class="">
						 <p class="date"><?php echo $date; ?></p>

							<?php echo the_excerpt(); ?>
					 </div>



					<?php endwhile; wp_reset_postdata(); ?>

				<?php endif;  ?>

				</div>
				<div class="col-md-4 fb_latest">
					<h4>LATEST FROM FACEBOOK</h4>

					<?php
					// // require_once get_template_directory_uri() . '/vendor/autoload.php'; // change path as needed
					//
					// $fb = new \Facebook\Facebook([
					//   'app_id' => '589975334798209',
					//   'app_secret' => 'ba9a4b7f87968970b02e8bd725410796',
					//   'default_graph_version' => 'v2.10',
					//   //'default_access_token' => '{access-token}', // optional
					// ]);
					//
					// // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
					// //   $helper = $fb->getRedirectLoginHelper();
					// //   $helper = $fb->getJavaScriptHelper();
					// //   $helper = $fb->getCanvasHelper();
					// //   $helper = $fb->getPageTabHelper();
					//
					// try {
					//   // Get the \Facebook\GraphNodes\GraphUser object for the current user.
					//   // If you provided a 'default_access_token', the '{access-token}' is optional.
					//   // $response = $fb->get('/me?fields=posts{created_time,message,picture}', 'EAAIYlFZABw4EBAHHaQJMHvmObZA3Dal1m6EiWP2WIjptKBBB8zmCFsOhInyxPixCFrgBZABUFKVkYwIDBOTgOzjvS9hXDWPPvXqSAJErKyJpAZBKP8jJT3AjLlZCPh2ZAgd2V6ik0imTwDkGrH5vq05I0nKFha9volYPzpvusBNzYZB6LQ3hTWbGUjX3VGKEBza3R27oaqYe5KvHRmJ2SOm3sJ9wNc2JtQdCY45fmhqJAZDZD');
					// 	$response = $fb->get('/me?fields=posts{id,created_time,message, permalink_url}', 'EAAIYlFZABw4EBAETZAtRXtPBZAfpql2CjcPQPTFSThAoZBRaTzr3ZBPYYZAiOISuItr4SEvikkXwTdhFIetOUzdySJjKei5CLuLLZBObyFL8vG5cvxFtlndOdjAEosaFlZApobl33sWSdDL6XKzEqkHhJZAbvy15Fj99qM6onz2BOS4l70TbSYhgNxrtavYVcOW8ZD');
					// } catch(FacebookExceptionsFacebookResponseException $e) {
					//   echo 'Graph returned an error: ' . $e->getMessage();
					//   exit;
					// } catch(FacebookExceptionsFacebookSDKException $e) {
					//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
					//   exit;
					// }
					//
					// $graphNode = $response->getGraphNode();
					//
					// // echo $graphNode;
					//
					//
					// $array = json_decode($graphNode, true);
					// $resultArray = isset($array['posts']) ? $array['posts'] : [];
					//
					// $i = 0;
					//
					// foreach($resultArray as $result){
					//
					// 	$message = $result['message'];
					// 	$shortMessage = substr($message, 0, 60);
					// 	$permalink = $result['permalink_url'];
					// 	$id = $result['id'];
					// 	$shortId = substr($id, 0, 10);
					// 	$orgDate = $result['created_time']['date'];
					// 	$newDate = date("j F @ G:i", strtotime($orgDate));
					//
					// 	if($i < 2) {
					// 		echo '<div>';
					// 		echo '<p>';
					// 		echo $shortMessage;
					// 		echo ' <a href="' . $permalink . '">';
					// 		echo 'www.fb.com/' . $shortId;
					// 		echo '</a>';
					// 		echo '<p>';
					//
					// 		echo '<p class="date"><img src="' . get_template_directory_uri() . '/images/facebook.svg" alt="Follow Us On Facebook">' . $newDate .'</p>';
					// 		echo '</div>';
				  //    }
					//
					// $i++;
					//
					// }

					 ?>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="row site-info">
				<div class="col-md-12">
					<a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/twitter_footer.svg" alt="Follow us on Twitter"></a>
					<a href="https://www.facebook.com/Clogher-Valley-Livestock-Producers-363843867666519" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/facebook_footer.svg" alt="Follow us on Facebook"></a>
					<a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/youtube_footer.svg" alt="Follow us on Youtube"></a>


					<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-conditions">TERMS & CONDITIONS</a>
				</div>
			</div><!-- .site-info -->
		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
