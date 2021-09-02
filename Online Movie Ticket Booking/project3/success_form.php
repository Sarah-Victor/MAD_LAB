<?php

$rand1 =rand(99999, 999999);

$rand2 = rand(999999999, 9999999999999);


$seat_count =$_POST["seat_count"];

$total_amount = $_POST["total_amount"];

$get_film_name = $_POST["film_name"];

$user_fname = $_POST["card_name"];

if($get_film_name==1)
{
	$film_name = 'K.G.F. 2';
}
else if($get_film_name==2)
{
	$film_name = 'F9 - THE FAST SAGA';
}
else if($get_film_name==3)
{
	$film_name = 'NO TIME TO DIE';
}

$ticket_cost = $seat_count * 100;
$tax = $total_amount - $ticket_cost;
$tax_st = $tax / 2;


$total_amount =  number_format((float)$total_amount, 2, '.', '');
$ticket_cost =  number_format((float)$ticket_cost, 2, '.', '');
$tax_st =  number_format((float)$tax_st, 2, '.', '');

?>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="assets/js/payment_jquery.min"></script>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">

	 <link href="assets/css/css.css" rel="stylesheet">
	 <link href="assets/css/success_form.css" rel="stylesheet">
  	 
</head>

<body>


    <div id="all">
        <header>
        
<div id="content">
            <div class="container">

                <div class="row" style="margin-top: 2px; ">

                    <div class="col-md-9 clearfix" id="checkout">

                        <div class="">
                            <form method="post" action="shop-checkout4.html">
                                <ul class="nav nav-pills nav-justified">
                                    
                                    <li class="active"><a href="#">SUCCESS</a></li>
                                    
                                </ul>

                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="box payment-method">
											
											<h4>Movie Tickets <br> Booking Confirmed</h4>

                                                <p style="font-size: 15px;background: #FFC107;color: #FFF;padding: 8px 15px;margin-top: 15px;border: none;display: inline-block;font-weight: bold;">
                                                	<?php echo $film_name; ?>                                                		
                                                </p>
												
												 <p><?php echo $seat_count; ?> Tickets</p>
												 <p>Name : <?php echo $user_fname; ?></p>
											
												<br><br><br>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box payment-method">

                                                <h4>Order summary</h4>
												
												<?php
												$todaydate = date('D, d F Y');

												?>

                                                <p> Booking Date: <?php echo $todaydate; ?></p>
												<p> Paytm Transaction ID: <?php echo $rand1; ?> </p>
												<p> Paytm Order ID: <?php echo $rand2; ?></p> <br>

												
												<h5>PAYMENT SUMMARY</h5>
												

													<p> Tickets total</p>
													<p> Tickets - <?php echo $_POST["seat_count"]; ?> Sub Total ₹ <?php echo $ticket_cost; ?></p>
													<p> <u> Taxes & Fees </u> </p>
													<p> Convenience Fee ₹ 00.00</p>
													<p> Central Goods and Service Tax ₹ <?php echo $tax_st; ?></p>
													<p> State Goods and Service Tax ₹ <?php echo $tax_st; ?></p>
													<hr>
													<p> Total Amount ₹ <?php echo $total_amount; ?> (Tax Included 18%)</p>



												
                                            </div>
                                        </div>

                                        
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                
                                </div>
                                <!-- /.content -->
                                
                                

    </div>
    


</body>

</html>
 
