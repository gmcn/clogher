<div class="feat_header wow fadeIn">
  <?php //echo get_the_post_thumbnail(); ?>
  <?php echo get_the_post_thumbnail($post_id, 'full', array( 'class' => 'hidden-xs hidden-sm' )); ?>
  <?php echo get_the_post_thumbnail($post_id, 'header-mobile', array( 'class' => 'hidden-md hidden-lg' )); ?>
</div>

<div class="container page-default">

  <?php include(locate_template("template-parts/elements/title.php")); ?>
  <?php echo the_content(); ?>

</div>
