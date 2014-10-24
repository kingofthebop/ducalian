<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Ducalian</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/style.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>


<header>



<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="login"> 
		<button id='modal-launcher' class="btn btn-primary btn-login" data-toggle="modal" data-target="#login-modal">Login >></button>
	  </div>
  <div class="container navbar-container">
    <!-- Brand and toggle get grouped for better mobile display -->
	 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-responsive"/></a>	 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
            
      
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="company.php">Company</a></li>
		<li><a href="portfolio.php">Portfolio</a></li>
		<li><a href="news.php">News</a></li>
		<li><a href="contact.php">Contact</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>

</header>

<section id="home">
	<div class="container-fluid">
	<div class="row">
	<figure>
	<img src="images/home-bg.jpg" class="img-responsive" />
	<div class="container">
	<div class="row figure">
	<figcaption class="figcaption-home">
	We are a team of diverse individuals from a variety of backgrounds. We bring together a range of skills united by a common goal
	</figcaption>
	</div>
	</div>
	</figure>
	</div>
	</div>
</section>



<section id="sharing">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 sharing-header-left">					
			</div>
			<div class="col-sm-6 sharing-header-right">					
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<ul class="list-inline pull-right">
				<li class="twitter-icon"><a href="#"><i class="fa fa-twitter-square"></i></a></li>
				<li class="linked-in-icon"><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
				<li class="other-icon"><a href="#"><i class="fa fa-circle-o"></i></a></li>
			</ul>
		</div>
	</div>
</section>


	
<section id="contact">
	
	
	<div class="container">
		<div class="row">
			<div class="contact-details">
				<h4>Contact</h4>
				<address>
					Ducalian Capital<br/>
					3rd Floor Staple Inn Buildings (South)<br/>
					High Holborn<br/>
					London<br/>
					WC1V 7PZ
				</address>
				<h4>General Enquiries</h4>
				<ul class="list-unstyled">
					<li class="telephone"><a href="tel:02074408692">+44(0)2074408690</a></li>
					<li class="email"><a href="mailto:info@ducalian.com">info@ducalian.com</a></li>
				</ul>
				<ul class="list-inline">
					<li class="twitter-icon"><a href="#"><i class="fa fa-twitter-square"></i></a></li>
					<li class="linked-in-icon"><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
					<li class="other-icon"><a href="#"><i class="fa fa-circle-o"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
</section>
























<footer>
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-1 col-lg-3 col-lg-offset-2 copyright">
		<p>&copy; Ducalian 2014 All Rights Reserved</p>
		</div>
		<div class="col-sm-7 col-md-6 col-lg-5">
			<ul class="list-inline legal">
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Regulatory Disclosures</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Cookie Policy</a></li>
			</ul>
		</div>
	</div>
</div>

<!--<div id="footer" class="mobile">
  <div class="col-xs-12 navbar-inverse navbar-fixed-bottom">
  <div class="row" id="bottomNav">
    <div class="col-xs-4 text-center"><a href="#"><i class="glyphicon glyphicon-circle-arrow-left"></i><br>Link</a></div>
    <div class="col-xs-4 text-center"><a href="#"><i class="glyphicon glyphicon-circle-arrow-down"></i><br>Link</a></div>
    <div class="col-xs-4 text-center"><a href="#"><i class="glyphicon glyphicon-circle-arrow-right"></i><br>Link</a></div>
  </div>
  </div>
</div>-->

	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-sprockets.js"></script>
    <script src="js/bop.js"></script>    
</footer>
  
  
<section id="modal-login">
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Login to Your Account</h2>
      		</div>
      		<div class="modal-body login-modal">      			
      			<div class="clearfix"></div>
      			
	        		<div class='col-xs-12'>
	        			<div class="form-group">
		              		<input type="text" id="username" placeholder="Enter your name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>
		
		            	<div class="form-group">
		            	  	<input type="password" id="login-pass" placeholder="Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>
		
		            	<a href="#" class="btn btn-success modal-login-btn">Login</a>
		            	<a href="#" class="login-link text-center">Lost your password?</a>
	        		</div>
	        	
	        		
	        																												
        		<div class="clearfix"></div>
        		
        		<div class="form-group modal-register-btn">
        			<button class="btn btn-default"> New User Please Register</button>
        		</div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>
</section>


  
  
</body>
</html>