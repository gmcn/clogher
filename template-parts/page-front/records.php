<?php

  $record_sales_copy      = get_field('record_sales_copy');
  $sales                  = get_field('sales');
  $average_at_a_sale      = get_field('average_at_a_sale');
  $record_breaking_prices = get_field('record_breaking_prices');
  $commission             = get_field('commission');


 ?>


<div class="container records">
  <div class="row records__header">
    <div class="col-md-6">
      <h3>Record Prices, <br /> Record Sales</h3>
    </div>
    <div class="col-md-6">
      <h2 class="wow fadeInRight">LOCATED IN THE HEART OF <span>TYRONE</span></h2>
    </div>
  </div>

  <div class="row records__counts">
    <div class="col-md-9">
      <?php echo $record_sales_copy ?>

      <div class="row records__counts__wrapper">
        <div class="col-xs-6 col-md-3 records__count matchheight">
          <span class="count"><?php echo $sales ?></span>
          <p>Sales in 2019</p>
        </div>

        <div class="col-xs-6 col-md-3 records__count matchheight">
          <span class="count"><?php echo $average_at_a_sale ?></span>
          <p>Average buyers at each sale</p>
        </div>

        <div class="col-xs-6 col-md-3 records__count matchheight">
          <span class="count"><?php echo $record_breaking_prices ?></span>
          <p>Record breaking prices in the last year</p>
        </div>

        <div class="col-xs-6 col-md-3 records__count matchheight">
          <span class="count"><?php echo $commission ?></span>
          <span>%</span>
          <p>We charge only <?php echo $commission ?>% commission on sales</p>
        </div>
      </div>

    </div>
    <div class="col-sm-5 col-md-3">
      <div class="records_exp">
        <span class="count">35</span>
        <p>Years of experience in the industry</p>
      </div>

    </div>
  </div>

</div>
