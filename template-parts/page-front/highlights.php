<?php

  $highlights_video = get_field('highlights_video');

 ?>

<div class="container highlights">
  <div class="row">
    <div class="col-md-12 highlights__header">
      <h2 class="wow fadeInLeft">RECENT <span>SALE HIGHLIGHTS</span></h2>
      <iframe width="100%" height="545px" src="<?php echo $highlights_video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>
