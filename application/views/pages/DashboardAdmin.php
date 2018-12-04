<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admindashboardcss.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/admindashboard.js')?>">
<body>

<section>
<div class="container">

  <div class="box first">
    <span class="icon-cont"><i class="fa fa-user"></i></span>
    <a href="<?=base_url("UserDetails")?>">
    <h3>User Details</h3>

  </div>

  <div class="box second">
    <span class="icon-cont"><i class="fa fa-list"></i></span>

    <a href="<?=base_url("OrderDetails")?>">

    <h3>Orders</h3>

  </div>

  <div class="box third">
    <span class="icon-cont"><i class="fa fa-history"></i></span>
    <a href="<?=base_url("OrderHistory")?>">
    <h3>History</h3>

  </div>

  <div class="box fourth">
    <span class="icon-cont"><i class="fa fa-print"></i></span>
    <a href="<?=base_url("PrintPriority")?>">
    <h3>Print priority</h3>

  </div>
  </div>

  <div class="container">
  <div class="box five">
    <span class="icon-cont"><i class="fa fa-price"></i></span>
    <a href="<?=base_url("PriceListAdmin")?>">
    <h3>Price List</h3>

  </div>

</div>
</body>

</section>
