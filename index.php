<?php

include "header.php"
	
	?>

<body>
   <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
 <a href="index.php" class="navbar-brand"><img class="logo" src="img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
		<li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
		
		 <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About us</a>
      </li>
      
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="facial.php">Facial Treatments</a>
          <a class="dropdown-item" href="slimming.php">Slimming and Skin Tightening</a>
          <a class="dropdown-item" href="lhr.php">Laser Hair Removal</a>
			<a class="dropdown-item" href="faceandbody.php">Face and Body Contour</a>
			<a class="dropdown-item" href="#">Skin Nutrients Infusion and Lightening</a>
			<a class="dropdown-item" href="#">Massage</a>
        </div>
      </li>
		  <li class="nav-item">
        <a class="nav-link" href="promo.php">Promos</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact us</a>
      </li>
       
     
    </ul>
	  
	 <button class="button btn animated swing delay-2s slow infinite" data-toggle="modal" data-target="#exampleModal">Book Now</button>
   </div>
</nav>
	
	  
	  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	   <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
	  
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="sliderimg" src="img/slider1.jpg" class="d-block w-100">
      
    </div>
    <div class="carousel-item">
      <img class="sliderimg" src="img/slider2.jpg" class="d-block w-100">
      
    </div>
    <div class="carousel-item">
      <img class="sliderimg" src="img/slider3.jpg" class="d-block w-100">
      
    </div>
	   <div class="carousel-item">
      <img class="sliderimg" src="img/slider4.jpg" class="d-block w-100">
     
    </div>
   
	   <div class="carousel-item">
      <img class="sliderimg" src="img/slider5.jpg" class="d-block w-100">
      
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	  
<div class="social-media text-center">
  
	<div class="card-body step">
    	<h5 class="card-title label animated flash delay-5s slower infinite">Step up your Beauty Game!</h5>
    	<p class="card-text like">Like and Follow us:</p>
	  		<i class="fab fa-facebook fa-2x"></i>
	  		<i class="fab fa-instagram fa-2x"></i>
	</div>
</div>
	
	
	 
	  <h1 class="services">Services</h1>
	  <div class="container percardset">
	  <div class="card-deck">
		  
  <div class="card wow slideInLeft">
    <img src="img/summer-facial.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Facial Treatments</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		
		<button type="button" class="btn">Learn More</button>
    </div>
   
  </div>
  <div class="card wow zoomIn">
    <img src="img/lean-n-green-slimming-coffee-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Slimming and Skin Tightening</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		<button type="button" class="btn">Learn More</button>
    </div>
   
  </div>
  <div class="card wow slideInRight">
    <img src="img/ulthera-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Face and Body Contour</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		<button type="button" class="btn">Learn More</button>
    </div>
  
  </div>
</div>
	</div>
	  <div class="container percardset">
	  <div class="card-deck">
  <div class="card wow slideInLeft">
    <img src="img/gluta.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title ">Skin Nutrients Infusion and Lightening</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<button type="button" class="btn">Learn More</button>
    </div>
    
  </div>
  <div class="card wow zoomIn">
    <img src="img/underarm.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Laser Hair Removal</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		<button type="button" class="btn">Learn More</button>
    </div>
  
  </div>
  <div class="card wow slideInRight">
    <img src="img/massage.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Massage</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		<button type="button" class="btn">Learn More</button>
    </div>
   
  </div>
</div>

		  <div class="container padding contactus wow bounceInUp">
		  <div class="row text-center padding">
			  
			  <div class="col-xs-12 col-sm-6 col-md-4">
				    	<h5 class="op">2F JMJ Building Governor Pascual Baritan, Malabon City</h5>
			
	
				 		<i class="phone fas fa-mobile-alt fa-2x"></i>
		  		  <p class="card-text add">0917-3188-772</p>
	  					<i class="phone fas fa-phone-square fa-2x"></i>
		   		  <p class="card-text add"> 8293-2645</p>
			  </div>
		  
			  
   		  <div class="col-xs-12 col-sm-6 col-md-4">
			  	<h3 class="op">Operating Hours</h3>
			  	<p class="card-text add">Tuesday to Thursday: 1:00pm - 7:00pm</p>
	   			<p class="card-text add">Friday to Saturday: 1:00pm - 9:00pm</p>
		   		<p class="card-text add">Sunday: 1:00pm - 6:00pm</p>
		  </div>

	  	  
		 <div class="col-md-4">
   				<h3 class="stay">Stay Updated</h3>
		  	<form class="newsletter form-inline">
  				<div class="signup">
    				<label for="inputEmail" ></label>
						<input type="email" class="form-control input-email" id="inputEmail" placeholder="Email Address">
  				</div>
				<button type="submit" class="btn btn-primary mb-2 btnsignup">SIGN UP</button>
			 </form>
      </div>
</div>
		  </div>
</div>
	
<!-- book -->
	
	


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book an Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
	<div class="container">
		
	<form>
		
	
		
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name">
    </div>
  </div>
		
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
		
  <div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Mobile number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="number">
    </div>
  </div>
  
		 <div class="form-group row">
    <label for="exampleFormControlSelect1">Treatment</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Consultation</option>
      <option>Facial</option>
      <option>Slimming and Skin Tightening</option>
      <option>Laser Hair Removal</option>
      <option>Face and Body Contour</option>
    </select>
  </div>
		
		
		<label>Date</label>
		<input type="date" >
		
		<label>Time</label>
		<input type="time" >
		
 <div class="form-group row">
    <label for="message" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-10">
		<textarea type="text" class="form-control" id="message" rows="3" cols="4"></textarea>
    </div>
  </div>
 
 
  
</form>
		
	</div>
	
	
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
	
		  
	<?php
	  include 'footer.php'
	  
	  ?>