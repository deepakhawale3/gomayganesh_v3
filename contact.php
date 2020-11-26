<?php

include('db.php');

if(isset($_POST["send"]))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];


    $query = "INSERT INTO custdata(`name`, `email`, `mobile`, `subject`, `message`) VALUES ('$name','$email','$mobile','$subject','$message')";
    $res=mysqli_query($db,$query);
    if ($res) 
    {
        echo "<script>alert('Thank you, we will reply you soon..!!');</script>";
    }
    else
    {
        echo "<script>alert('Error, Please try again..');</script>";
    }
}

?>

<!doctype html>
<html lang="en">

    <head>
		<!-- Meta tags -->
		<title>Home - Uma Gomay Ganesh Art</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		<!-- icon -->
		<link rel="icon" type="image/png" sizes="96x96" href="assets/img/icon.JPG">

    </head>

    <body>

		<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-lg set-black navbar-invrs transparent fixed-top">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img id="logo-web1" src="assets/img/logo55.png" alt="">
					<img id="logo-web2" src="assets/img/logo1.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span id="nav-bars" class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active" style="padding: 0px 15px 0px 15px">
							<a id="nav-text1" class="nav-link font-weight-bold" href="index.html" style="color: #080808;">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item" style="padding: 0px 15px 0px 15px">
							<a id="nav-text2" class="nav-link font-weight-bold" href="branches.html" style="color: #080808;">Branches</a>
						</li>
						<li class="nav-item" style="padding: 0px 15px 0px 15px">
							<a id="nav-text3" class="nav-link font-weight-bold" href="contact.php" style="color: #080808;">Contact us</a>
						</li>
						<!--li class="nav-item" style="padding: 0px 15px 0px 15px">
							<a id="nav-text4" class="nav-link font-weight-bold" href="contact.html" style="color: #080808;">About</a>
						</li-->
					</ul>
				</div>

			</div>
		</nav>		

		<!-- Section 4 -->
        <div class="top section-4-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col section-4 section-description wow fadeInLeftBig">
	                	<h2>Feel free to Reach-out..!!</h2>
	                    <p style="font-size: 20px;">
	                    	If you want more information, buy Gomay Ganesh, or want to collaborate with us,<br /> send us a message by filling the form below.
	                    </p>
	                </div>
	            </div>
	        </div>
		</div>
		

		<!----------------------------------------Deepak, edit here only------------------------------------------>

		<!-- Contact us-->
        <!-- Default form contact -->
        <div class="container d-card">
            <form class="text-center border border-light p-5" action="#" method="post">

                <p class="h4 mb-4">Contact us</p>

                <!-- Name -->
                <input name="name" type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Full Name">

                <!-- Email -->
                <input name="email" type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

				<!-- Mobile -->
                <input name="mobile" type="mobile" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Mobile">

                <!-- Subject -->
                <label>Subject</label>
                <select name="subject" class="browser-default custom-select mb-4">
                    <option value="" disabled selected>Choose option</option>
                    <option value="Booking">Booking</option>
                    <option value="Franchise">Franchise</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Other">Other</option>
                </select>

                <!-- Message -->
                <div class="form-group">
                    <textarea name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                </div>

                <!-- Send button -->
				<input name="send" class="btn btn-info btn-block" type="submit" value="Send">
				
				<!-- Back button -->
				<input name="Back" class="btn btn-info btn-block" type="back" value="Back">

            </form>
        </div>  
		<!-- Default form contact -->


		<!----------------------------------------Edit area end------------------------------------------>

        
		<!-- Section 4 -->
        <div class="section-4-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col section-4 section-description wow fadeInLeftBig">
	                	<h2>Hurry Upp...!</h2>
	                    <p style="font-size: 20px;">
	                    	For booking.. Call <a href="tel:+919096363088">+91 9096363088</a> Or you can visit <a href="branches.html">Our Branches</a>
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- Footer -->
        <footer>
        	<div class="footer-top">
		        <div class="container">
		        	<div class="row">
		        		<div class="col-md-4 col-lg-3 footer-about wow fadeInUp">
		        			<img class="logo-footer" src="assets/img/logo222.png" alt="logo-footer" data-at2x="assets/img/logo11.jpg">
		        			<p>
									प्रदुषण मुक्त भारत, रसायणरहित मंगलमुर्तिंची प्रतिमा... हेच आमचे प्रथम उदिष्ट्..!!
		        			</p>
		        			<p><a href="#">Our Team</a></p>
	                    </div>
		        		<div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
		        			<h3>Contact</h3>
		                	<p><i class="fas fa-map-marker-alt"></i><a href="branches.html">Click here to get our location</a></p>
		                	<p><i class="fas fa-phone"></i> Phone: <a href="tel:+919096363088">+91 9096363088</a></p>
		                	<p><i class="fas fa-envelope"></i> Email: <a href="mailto:umagomayganeshart@gmail.com">umagomayganeshart@gmail.com</a></p>
	                    </div>
	                    <div class="col-md-4 col-lg-4 footer-links wow fadeInUp">
	                    	<div class="row">
	                    		<div class="col">
	                    			<h3>Links</h3>
	                    		</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="col-md-6">
									<p><a class="scroll-link" href="#top">Top</a></p> 
									<p><a href="#">Affiliates</a></p>
	                    			<p><a href="#">Terms</a></p>                   			
	                    		</div>
	                    		<!--div class="col-md-6">
	                    			<p><a href="#">Affiliates</a></p>
	                    			<p><a href="#">Terms</a></p>
	                    		</div-->
	                    	</div>
	                    </div>
		            </div>
		        </div>
	        </div>
	        <div class="footer-bottom">
	        	<div class="container">
	        		<div class="row">
	           			<div class="col-md-6 footer-copyright">
	                    	&copy; Uma Gomay Ganesh Art
	                    </div>
						<div class="col-md-6 footer-social">
	                    	<a href="https://www.facebook.com/umagomayganesh/"><i class="fab fa-facebook"></i></a> 
							<!--a href="#"><i class="fab fa-twitter"></i></a> 
							<a href="#"><i class="fab fa-google-plus-g"></i></a> 
							<a href="#"><i class="fab fa-instagram"></i></a> 
							<a href="#"><i class="fab fa-pinterest"></i></a-->
	                    </div>
	           		</div>
	        	</div>
	        </div>
        </footer>


        <!-- Javascript -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>