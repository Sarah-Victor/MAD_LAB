<?php

$get_film_name = $_REQUEST["film_name"];

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



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Ticket Booking</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");
        .movie-container {
          margin: 20px 0px;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column
        }

        .movie-container select {
          appearance: none;
          -moz-appearance: none;
          -webkit-appearance: none;
          border: 0;
          padding: 5px 15px;
          margin-bottom: 40px;
          font-size: 14px;
          border-radius: 5px;
        }
        .seat {
          background-color: #444451;
          height: 12px;
          width: 15px;
          margin: 3px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
        }

        .selected {
          background-color: #008000;
        }

        .occupied {
          background-color: #FF0000;
        }

        .seat:nth-of-type(2) {
          margin-right: 18px;
        }

        .seat:nth-last-of-type(2) {
          margin-left: 18px;
        }

        .seat:not(.occupied):hover {
          cursor: pointer;
          transform: scale(1.2);
        }

        .showcase .seat:not(.occupied):hover {
          cursor: default;
          transform: scale(1);
        }

        .showcase {
          display: flex;
          justify-content: space-between;
          list-style-type: none;
          background: rgba(0,0,0,0.1);
          padding: 5px 10px;
          border-radius: 5px;
          color: #777;
        }

        .showcase li {
          display: flex;
          align-items: center;
          justify-content: center;
          margin: 0 10px;
        }

        .showcase li small {
          margin-left: 2px;
        }

        .row {
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .screen {
          background: #fff;
          height: 70px;
          width: 70%;
          margin: 15px 0;
          transform: rotateX(-45deg);
          box-shadow: 0 3px 10px rgba(255,255,255,0.7);
        }

        p.text {
          margin: 40px 0;
        }

        p.text span {
          color: #0081cb;
          font-weight: 600;
          box-sizing: content-box;
        }

        .credits a {
          color: #fff;
        }


    </style>
</head>
<body style="background-color:antiquewhite">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="payment_form.php" autocomplete="off" >
					<input type="hidden" name="film_name" id="film_name" value="<?php echo $_REQUEST['film_name']; ?>">
                        <h2 class="form-title">Booking Confirmation for "<?php echo $film_name; ?>"</h2>
                        <div class="form-group">
						Name :
                            <input type="text" class="form-input" name="name" id="name" required placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            E-Mail :
							<input type="email" class="form-input" name="email" id="email" required placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                           Mobile : <input type="text" class="form-input" name="mobile" id="mobile"  placeholder="Your Mobile" maxlength='10'/>
                            
                        </div>
						<div class="form-group">
                           Date : <input type="date" class="form-input" name="date" id="date"/>
                            <input type='hidden' name="seat_count" id="seat_count" value="0">
                        </div>
                        <div class="form-group">
                            
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">select seats</button>

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Grab your seats</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <ul class="showcase">
                                            <li>
                                              <div class="seat"></div>
                                              <small>N/A</small>
                                            </li>
                                            <li>
                                              <div class="seat selected"></div>
                                              <small>Selected</small>
                                            </li>
                                            <li>
                                              <div class="seat occupied"></div>
                                              <small>Occupied</small>
                                            </li>    
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div class="container">
                                            <div class="screen"></div>
                                            
                                            <div class="row">
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                              </div>
                                              <div class="row">
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat occupied"></div>
                                                <div class="seat occupied"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                              </div>
                                              <div class="row">
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat occupied"></div>
                                                <div class="seat occupied"></div>
                                              </div>
                                              <div class="row">
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                              </div>
                                              <div class="row">
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat occupied"></div>
                                                <div class="seat occupied"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                              </div>
                                              <div class="row">
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat"></div>
                                                <div class="seat occupied"></div>
                                                <div class="seat occupied"></div>
                                                <div class="seat occupied"></div>
                                                <div class="seat"></div>
                                              </div>
                                            
                                            <p class="text">
                                              You have selected <span id="count" style="font-size: 20px;"> 0 </span> seats for the total price of Rs. <span id="total" style="font-size: 20px;"> 0 </span>
                                              <p class="text">
                                              (18%) GST Included<span style="font-size: 20px;"> The Grand Total Rs. </span><span id="total_gst" style="font-size: 20px;"> 0 </span>
                                            </p>
                                            </p>
                                          </div>
                                        
                                    </div>
                                  
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>

                        </div>
						
						<div class="form-group">
                           Amount : <input type="text" class="form-input" id="total_amount" name="total_amount" readonly="readonly"  />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" required class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
	
	<script>
	const container = document.querySelector('.container');
    const seats = document.querySelectorAll('.row .seat:not(.occupied)');
    const count = document.getElementById('count');
    const total = document.getElementById('total');
    const total_gst = document.getElementById('total_gst');  

    //Update total and count
    function updateSelectedCount() {
        let ticketPrice = 100;
        const selectedSeats = document.querySelectorAll('.row .seat.selected');
        const selectedSeatsCount = (selectedSeats.length-1);
        count.innerText = selectedSeatsCount;
        total.innerText = selectedSeatsCount * ticketPrice;
        total_gst.innerText = (((selectedSeatsCount * ticketPrice)/100)*18)+(selectedSeatsCount * ticketPrice);
        
        document.getElementById("seat_count").value=  selectedSeatsCount;
        document.getElementById("total_amount").value=  (((selectedSeatsCount * ticketPrice)/100)*18)+(selectedSeatsCount * ticketPrice);
    }

    //Seat click event
    container.addEventListener('click', e => {
      if (e.target.classList.contains('seat') &&
         !e.target.classList.contains('occupied')) {
        e.target.classList.toggle('selected');
      }
      updateSelectedCount();
    });
	</script>
	
</body>
</html>
