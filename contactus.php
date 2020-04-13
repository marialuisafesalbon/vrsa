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
      
		<li class="nav-item">
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
		<li class="nav-item active">
        <a class="nav-link" href="contactus.php">Contact us</a>
      </li>
       
     
    </ul>
	  
	 <a class="button btn animated swing delay-2s slow infinite" href="#">Book Now</a>
   </div>
</nav>
	
	<!-- Email Form -->
	
	<h1 class="email">Email us:</h1>
	<div class="container emailcontainer">
		
	<form class="emailform">
		
	
		
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control inputemail" id="name">
    </div>
  </div>
		
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control inputemail" id="inputEmail3">
    </div>
  </div>
		
  <div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Mobile number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control inputemail" id="number">
    </div>
  </div>
  
		
 <div class="form-group row">
    <label for="message" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-10">
		<textarea type="text" class="form-control inputemail" id="message" rows="3" cols="4"></textarea>
    </div>
  </div>
 
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn emailbtn">Send</button>
    </div>
  </div>
</form>
		
	</div>
	
	
	
	<div class="social-media text-center">
  
	<div class="card-body step">
    	<h5 class="card-title label animated flash delay-5s slower infinite">Step up your Beauty Game!</h5>
    	<p class="card-text like">Like and Follow us:</p>
	  		<i class="fab fa-facebook fa-2x"></i>
	  		<i class="fab fa-instagram fa-2x"></i>
	</div>
</div>

	
	
	<!-- Contact Card --> 
	
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

	<?php
	
	include 'footer.php'
		?>


