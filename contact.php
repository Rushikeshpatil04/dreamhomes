<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Real-Estate</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com/" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>Mon - Sat 9.00 AM - 6.00 PM &nbsp;| Sunday CLOSED</span>
        <p class="pull-right"><i class="fa fa-phone"></i><a href="tel:7448103851" style="color: white;"> +91 7448103851</a></p>
        <p class="pull-right"><i class="fa fa-envelope"></i><a href="mailto:dreamhomes@gmail.com" style="color:white;">dreamhomes@gmail.com </a> &nbsp;&nbsp;|&nbsp;&nbsp;</p>
        

      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" height="40" width="100%" alt="logo"/></a>
                    <ul><h2>Dream Homes</h2></ul>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php">Home</a></li> 
						<li><a href="about.php">About Us</a></li> 
						<li><a href="service.php">Service</a></li>
                        <li><a href="property.php">Properties</a></li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Gallery<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="video.php">Video</a></li>
                            <li><a href="photo.php">Photos</a></li>
                            <li><a href="visitors.php">Visitors</a></li> 
                            
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           
                            <li><a href="event.php">Events</a></li>
                            <li><a href="blog.php">Blogs</a></li>
                            
                            
                        </ul>
                    </li> 
                        <li class="active"><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>


	<section id="content">
		<div class="container">
		<div class="row"> 

							<div class="col-md-12">
								<div class="about-logo">
									<h2><span class="coloured">Get</span> in Touch</h2>
									<p>Dream Homes is dedicated to providing exceptional service and ensuring that your real estate experience is smooth and rewarding. Get in touch with us today, and let's turn your dreams into keys to your new home!</p>
                                    	<p>We're thrilled to assist you on your journey to finding or selling your dream home. Whether you have questions, want to schedule a consultation, or simply need more information, we're here for you.</p>
								</div>  
							</div>
		</div>
	<div class="row">
		<div class="col-md-2"></div>
    <div class="col-md-8"  style="background-color: #f0f0f0;">
	<p></p>
								  	
		   <!-- Form itself -->
          
	        <h3>Contact Us</h3>
		        <form method="post"  action="" name="contact" onSubmit="return(validate());">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group" align="center">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

				</form>		
        </div>
	</div>
</div>
</section>
	


	<?php include("include/footer.php") ?>					

	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script> 
<!--javavalidation-->
	<script type="text/javascript" src="validate.js"></script>

</body>

</html>