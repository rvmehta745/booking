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
<section id="rvmain">
<div class="container">
<div class="res-flip cf">
<section class="res-left">
	<div class="r-left-inner">
	<section class="r-banner" id="about-inner">
			<div class="main-s">
				<img src="images/about.png">
			</div>
	</section>
	<section class="explore exp" id="explore">
		<h2>Superior Ocean Room</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		<div class="r-main">
			<div class="r-inner">
				<div class="r-img">
					<img src="images/about.png" alt="" title="">
				</div>
			</div>
			<div class="r-inner">
				<div class="r-img">
					<img src="images/Depositphotos.png" alt="" title="">
				</div>
			</div>
			<div class="r-inner">
				<div class="r-img">
					<img src="images/triple_room.png" alt="" title="">
				</div>
			</div>
			<div class="r-inner">
				<div class="r-img">
					<img src="images/triple_room_04-235x167.png" alt="" title="">
				</div>
			</div>
			<div class="r-inner">
				<div class="r-img">
					<img src="images/triple_room_05-235x167.png" alt="" title="">
				</div>
			</div>
			<div class="r-inner">
				<div class="r-img">
					<img src="images/slide_02-891x636.png" alt="" title="">
				</div>
			</div>
		</div>
	</section>
	<section class="feature-r" id="feature">
		<h2>Details</h2>
			<div class="fr-inner">
				<div class="feature-rl">
					<ul>
						<li>Guests : 4</li>
						<li>Amenities : air conditioning, balcony, slippers, sofa, towels, wi-fi</li>
						<li>View : forest</li>
						<li>Size : 50m²</li>
						<li>Bed Type : 1 queen size bed</li>
						<li>Categories : triple</li>
					</ul>
					<h3>Prices start at : <span>$70 per night</span></h3>
					<div class="book-now">
						<a href="#">BOOK NOW</a>
					</div>
				</div>
			</div>
	</section>
	</div>
</section>
<section class="res-right">
	<div class="res-right-inner">
	<p>YOUR RESERVATION</p>
	<form action="/action_page.php" class="reservation-form">
		<ul>
			<li><div class="col-x2">
				<div class="ch-in">
					<label>CHECK IN</label>
					<input type="text" id="checkin" class="datepickerl">
				</div>
				<div class="night">
					<label>NIGHT</label>
					<select name="night">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				</div>
			</li>
			<li>
			<div class="col-x1">
				<div class="ch-out">
					<label>CHECK OUT</label>
					<input type="text" id="checkout" class="datepickerl">
				</div>
				<div class="night">
				</div>
			</div>
			</li>
			<li>
			<div class="col-x1">
				<label>ROOMS</label>
				<select name="rooms">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>	
			</div>
			</li>
			<li>
			<div class="col-x3">
				<div class="r1">
					<label>ROOM 1</label>
				</div>
					<div class="adu">
						<label>ADULTS</label>
						<select name="adults">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<div class="child">
						<label>CHILDREN</label>
						<select name="child">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
			</div>
			</li>
			<button class="booking">Check Availability</button>
		</ul>
	</form>
	</div>
</section>
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
  		var f_top=$(".explore").offset().top;
  		console.log($(window).scrollTop());
  		if($(window).scrollTop() >= f_top)
  		{
  			$('.res-right-inner').addClass('fixed');
  		}
  		else{
  			$('.res-right-inner').removeClass('fixed');
  		}
  	});
  });
  </script>
</body>
</html>