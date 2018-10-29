<!doctype html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Reservation</title>
<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css/jquery-ui.css" type="text/css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<section id="conf">
	<div class="container">
		<div class="book">
			<h2>Booking Confirmation</h2>
			<div class="b-detail">
				<h3>Booking Details</h3>
				<div class="check-detail">
					<div class="check-left">
						<h5>Check In</h5>
					</div>
					<div class="check-right">
						<h5>November 28, 2018, <span>from 11:00 am</span></h5>
					</div>
				</div>
				<div class="check-detail">
					<div class="check-left">
						<h5>Check In</h5>
					</div>
					<div class="check-right">
						<h5>November 28, 2018,<span> from 11:00 am</span></h5>
					</div>
				</div>
			</div>
		</div>
		<div class="acm">
			<h3>Accommodation 1</h3>
			<p>Accommodation Type: <span>Classic Double Room</span></p>
			<form id="acm">
				<label>Guests :</label>
				<select name="guest">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				<ul>
					<li>
						<label class="cont cir">Refundable, $59
  						<input type="checkbox" checked="checked">
  						<span class="checkmark"></span>
					</label>
					</li>
					<li>
						<label class="cont cir">Non-refundable, $40
	  						<input type="checkbox" checked="checked">
	  						<span class="checkmark"></span>
						</label>
					</li>
				</ul>
			</form>
		</div>
		<div class="addtional-s">
			<h3>Choose Additional Services</h3>
			<ul>
				<li>
					<label>Fitness Center ($120 / Once) for</label>
					<select name="night">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					<label>guest(s)</label>
				</li>
				<li>
					<label>Fitness Center ($120 / Once) for</label>
					<select name="night">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					<label>guest(s)</label>
				</li>
				<li>
					<label>Fitness Center ($120 / Once) for</label>
					<select name="night">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					<label>guest(s)</label>
				</li>
				<li>
					<label>Fitness Center ($120 / Once) for</label>
					<select name="night">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					<label>guest(s)</label>
				</li>
			</ul>
			<h3>Total Price is :<span> $70 per night</span></h3>
		</div>
		<div class="info">
			<h3>Your Information</h3>
			<p>Required fields are followed by *</p>
			<form id="more-info">
				<div class="col-2">
				  <div class="form-field">
					<input type="text" #name="ngModel" name="fname" id="fname" [(ngModel)]="contactModel.name" placeholder="First Name*:"
					  required>
				  </div>
				  <div class="form-field">
					<input type="text" #name="ngModel" name="lname" id="lname" [(ngModel)]="contactModel.name" placeholder="Last Name**:"
					  required>
				  </div>
				  <div class="form-field">
					<input type="email" #email="ngModel" name="eid" id="eid" [(ngModel)]="contactModel.email"  placeholder="Email ID*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
					  required>
				  </div>
				</div>
				<div class="col-1">
				  <div class="form-field">
					<input type="Number" #subject="ngModel" name="number*" id="number*"  placeholder="Phone Number*">
				  </div>
				</div>
				<div class="col-1">
				  <div class="form-field">
					<textarea #message="ngModel" name="address*" id="address" cols="30" rows="10" placeholder="Address*"></textarea>
				  </div>
				</div>
				<label>Total Price : $30</label>
				<label class="cont">I've read and accept the terms & conditions *
  						<input type="checkbox" checked="checked">
  						<span class="checkmark"></span>
				</label>
				<button type="submit" class="book-now"> BOOK NOW</button>
			</form>
		</div>
	</div>
</section>
<section class="footer-top">
	<div class="logo-top">
		<img src="images/gir-stay.png" alt="" title="">
	</div>
	<div class="f-menu">
		<ul>
			<li><a href="#">HOME</a></li>
			<li><a href="#">ROOMS</a></li>
			<li><a href="#">FEATURES</a></li>
			<li><a href="#">TESTIMONIAL</a></li>
			<li><a href="#">CONTACT US</a></li>
		</ul>
	</div>
</section>
<footer>
	<div class="container">
		<p>Copyright 2018 All Right Reserved</p>
	</div>
</footer>
</div>


	
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <script>
  $( function() {
    $( ".datepickerl" ).datepicker();
  } );
  $(document).ready(function(){
  	$(window).on('scroll',function(){
  		var f_top=$(".footer-top").offset().top;
  		console.log($(window).scrollTop());
  		if($(window).scrollTop() >= f_top)
  		{
  			$('.res-right').addClass('fixed');
  		}
  		else{
  			$('.res-right').removeClass('fixed');
  		}
  	});
  });
  </script>
</body>
</html>