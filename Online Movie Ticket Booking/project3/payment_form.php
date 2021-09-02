<?php


?>
<!DOCTYPE html>
<html>
<head>
<title>Payment Form : Online Ticket Booking</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/css/payment_style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="assets/js/payment_jquery.min.js"></script>
</head>
<body style="background: url(assets/images/payment_background.png) repeat;">
	<div class="main">
		<h1>Make Payment</h1>
		<div class="content">
			
			<script src="assets/js/payment_easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
				
			</script>
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<div class="pay-tabs">
						<h2>Select Payment Method</h2>
						
						<h2 style="font-size: 26px; text-align: center; margin-bottom: 25px; color: chocolate; font-weight: 501;">Total Amount : <?php echo $_POST['total_amount'] ?> (<?php echo $_POST['seat_count'] ?> Tickets)</h2>
						
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li> 
							<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
							<div class="clear"></div>
						</ul>	
					</div>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="payment-info">
								<h3>Personal Information</h3>
								<div class="tab-for">				
									<h5>EMAIL ADDRESS</h5>
										<input type="text" name="user_email" id="user_email" value="<?php echo $_POST['email']?>" readonly style="text-transform:uppercase">
									<h5>FIRST NAME</h5>													
										<input type="text" name="user_fname" id="user_fname" value="<?php echo $_POST['name'] ?>" readonly style="text-transform:uppercase">
								</div>			
								<h3 class="pay-title">Credit Card Info</h3>
								<form name="payment" method="post" action="success_form.php" onSubmit="return validate_function()">


								<input type='hidden' name="total_amount" id="total_amount" value="<?php echo $_POST['total_amount'] ?>">
								<input type='hidden' name="seat_count" id="seat_count" value="<?php echo $_POST['seat_count'] ?>">
								<input type='hidden' name="film_name" id="film_name" value="<?php echo $_POST['film_name'] ?>">
								<input type='hidden' name="uname" id="uname" value="<?php echo $_POST['name'] ?>">
								
								
									<div class="tab-for">				
										<h5>NAME ON CARD</h5>
											<input type="text" name="card_name" id="card_name"  value="" required="">
										<h5>CARD NUMBER</h5>													
											<input class="pay-logo" id="card_number" name="card_number" type="text" value="" required="" maxlength="16">
									</div>	
									<div class="transaction">
										<div class="tab-form-left user-form">
											<h5>EXPIRATION</h5>
												<ul>
													<li>
														<input type="number" class="text_box" type="text" value="6" min="1" />	
													</li>
													<li>
														<input type="number" class="text_box" type="text" value="1988" min="1" />	
													</li>
													
												</ul>
										</div>
										<div class="tab-form-right user-form-rt">
											<h5>CVV NUMBER</h5>													
											<input type="text" name="cvv_number" id="cvv_number" value="" required=""  maxlength="3">
										</div>
										<div class="clear"></div>
									</div>
									<input type="submit" value="SUBMIT">
								</form>
								<div class="single-bottom">
										<ul>
											<li>
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="payment-info">
								<h3>Net Banking</h3>
								<div class="radio-btns">
									<div class="swit">								
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Andhra Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Allahabad Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank of Baroda</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Canara Bank</label> </div></div>	
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IDBI Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Icici Bank</label> </div></div>	
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Overseas Bank</label> </div></div>	
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Punjab National Bank</label> </div></div>	
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>South Indian Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>State Bank Of India</label> </div></div>		
									</div>
									<div class="swit">								
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>City Union Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>HDFC Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IndusInd Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Syndicate Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Deutsche Bank</label> </div></div>	
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Corporation Bank</label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>UCO Bank</label> </div></div>	
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Bank</label> </div></div>	
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Federal Bank</label> </div></div>	
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>ING Vysya Bank</label> </div></div>	
									</div>
									<div class="clear"></div>
								</div>
								<a href="#">Continue</a>
							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
							<div class="payment-info">
								<h3>PayPal</h3>
								<h4>Already Have A PayPal Account?</h4>
								<div class="login-tab">
									<div class="user-login">
										<h2>Login</h2>
										
										<form name="payment" method="post" action="success_form.php" onSubmit="return validate_function()">
											<input type='hidden' name="total_amount" id="total_amount" value="<?php echo $_POST['total_amount'] ?>">
											<input type='hidden' name="seat_count" id="seat_count" value="<?php echo $_POST['seat_count'] ?>">
											<input type='hidden' name="film_name" id="film_name" value="<?php echo $_POST['film_name'] ?>">
											<input type='hidden' name="uname" id="uname" value="<?php echo $_POST['name'] ?>">
											<input type="text" name="card_name" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
											<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
												<div class="user-grids">
													<div class="user-left">
														<div class="single-bottom">
																<ul>
																	<li>
																		<input type="checkbox"  id="brand1" value="">
																		<label for="brand1"><span></span>Remember me?</label>
																	</li>
																</ul>
														</div>
													</div>
													<div class="user-right">
														<input type="submit" value="LOGIN">
													</div>
													<div class="clear"></div>
												</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
							<div class="payment-info" id="dbcard">
								
								<h3 class="pay-title">Dedit Card Info</h3>
								<form name="payment" method="post" action="success_form.php" onSubmit="return validate_db_function()">
									<input type='hidden' name="total_amount" id="total_amount" value="<?php echo $_POST['total_amount'] ?>">
									<input type='hidden' name="seat_count" id="seat_count" value="<?php echo $_POST['seat_count'] ?>">
									<input type='hidden' name="film_name" id="film_name" value="<?php echo $_POST['film_name'] ?>">
									<input type='hidden' name="uname" id="uname" value="<?php echo $_POST['name'] ?>">
									
									<div class="tab-for">				
										<h5>NAME ON CARD</h5>
											<input type="text" value="" name="card_name" id="card_name" >
										<h5>CARD NUMBER</h5>													
											<input class="pay-logo" type="text" name="card_number"  id="card_number" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
									</div>	
									<div class="transaction">
										<div class="tab-form-left user-form">
											<h5>EXPIRATION</h5>
												<ul>
													<li>
														<input type="number" class="text_box" type="text" value="6" min="1" />	
													</li>
													<li>
														<input type="number" class="text_box" type="text" value="1988" min="1" />	 
													</li>
													
												</ul>
										</div>
										<div class="tab-form-right user-form-rt">
											<h5>CVV NUMBER</h5>													
											<input type="text" name="cvv_number" id="cvv_number" value=""  placeholder="XXX" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'XXX';}" required="">
										</div>
										<div class="clear"></div>
									</div>
									<input type="submit" value="SUBMIT">
								</form>
								<div class="single-bottom">
										<ul>
											<li>
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
											</li>
										</ul>
								</div>
							</div>	
						</div>
					</div>	
				</div>
			</div>	

		</div>
		
	</div>
	
	<script>
	function validate_function()
	{
		var name = document.getElementById('card_name').value;
		var card_number = document.getElementById('card_number').value;
		var cvv_number = document.getElementById('cvv_number').value;			
		
		if(name=="")
		{
			var msg = 'Enter Name';
			document.getElementById("card_name").focus();
			alert(msg);
			return false;
		}
		
		if(card_number=="")
		{
			var msg = 'Enter Card Name';
			document.getElementById("card_number").focus();
			alert(msg);
			return false;
		}
		
		if(cvv_number=="")
		{
			var msg = 'Enter CVV';
			document.getElementById("cvv_number").focus();
			alert(msg);
			return false;
		}	
		
	}
	
	function validate_db_function()
	{
		var div = document.getElementById("dbcard");
		
		var name = div.getElementById('card_name').value;
		var card_number = div.getElementById('card_number').value;
		var cvv_number = div.getElementById('cvv_number').value;			
		
		if(name=="")
		{
			var msg = 'Enter Name as on Debit Card';
			document.getElementById("card_name").focus();
			alert(msg);
			return false;
		}
		
		if(card_number=="")
		{
			var msg = 'Enter Card Number';
			document.getElementById("card_number").focus();
			alert(msg);
			return false;
		}
		
		if(cvv_number=="")
		{
			var msg = 'Enter CVV Number';
			document.getElementById("cvv_number").focus();
			alert(msg);
			return false;
		}	
		
	}
	</script>
</body>
</html>

