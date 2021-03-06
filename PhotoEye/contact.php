<?php
/*
Free Bootstrap Themes : http://www.365bootstrap.com
Free Responsive Html5 Templates : http://www.zerotheme.com
 */

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "365Bootstrap - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "365Bootstrap.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  	<title>PHOTO-EYE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="www.365bootstrap.com">

	<!-- styles -->
	
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/camera.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.min.css">
	
	<!-- js -->
	<script src="js/modernizr.custom.97074.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="wrapper">

	<!-- /////////////////////////////////////////Navigation -->
	<button id="mm-menu-toggle" class="mm-menu-toggle">Toggle Menu</button>
	<nav id="mm-menu" class="mm-menu">
		<div class="mm-menu__header">
			<h2 class="mm-menu__title">PHOTO-EYE</h2>
		</div>
		<ul class="mm-menu__items">
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="index.html">
				<span class="mm-menu__link-text"><i class="md md-home"></i> Home</span>
			  </a>
			</li>
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="single.html">
				<span class="mm-menu__link-text"><i class="md md-person"></i> Folio</span>
			  </a>
			</li>
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="archive.html">
				<span class="mm-menu__link-text"><i class="md md-inbox"></i> Blog</span>
			  </a>
			</li>
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="contact.html">
				<span class="mm-menu__link-text"><i class="md md-favorite"></i> Contact</span>
			  </a>
			</li>
		</ul>
	</nav><!-- /nav -->
	
	<!-- /////////////////////////////////////////Header -->
	<header id="intro">
		<div class="camera_wrap camera_black_skin" id="camera_wrap_1"><!-- slideder star-->
			<div data-thumb="images/slider-3-thumb.jpg" data-src="images/slider-3.jpg">
				<div class="camera_caption fadeFromBottom">
					Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
				</div>
			</div>
			<div data-thumb="images/slider-1-thumb.jpg" data-src="images/slider-1.jpg">
				<div class="camera_caption fadeFromBottom">
					It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
				</div>
			</div>
			<div data-thumb="images/slider-2-thumb.jpg" data-src="images/slider-2.jpg">
				<div class="camera_caption fadeFromBottom">
					<em>It's completely free</em> (even if a donation is appreciated)
				</div>
			</div>
			<div data-thumb="images/slider-4-thumb.jpg" data-src="images/slider-4.jpg">
				<div class="camera_caption fadeFromBottom">
					Camera slideshow provides many options <em>to customize your project</em> as more as possible
				</div>
			</div>
			<div data-thumb="images/slider-5-thumb.jpg" data-src="images/slider-5.jpg">
				<div class="camera_caption fadeFromBottom">
					It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> 
				</div>
			</div>
			<div data-thumb="images/slider-6-thumb.jpg" data-src="images/slider-6.jpg">
				<div class="camera_caption fadeFromBottom">
					  Different color skins and layouts available, <em>fullscreen ready too</em>
				</div>
			</div>
		</div><!-- slideder end-->
	</header>
	<!-- Header -->
	
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="sub-page">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-8">
					<article>
						<div class="art-header">
							<h2>Contact Us</h2>
						</div>
						<div class="art-content">
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label>
									<span>Enter your name:</span>
									<input type="text"  name="name" id="name" required>
									</label>
									<label>
									<span>Enter your email:</span>
									<input type="email"  name="email" id="email" required>
									</label>
									<label>
									<span>Your message here:</span>
									<textarea name="message" id="message"></textarea>
									</label>
									<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
								</form>
							</div>
						</div>
					</article>
					
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-about">
						<div class="heading"><h4>Shortly About Me</h4></div>
						<div class="content">
							<img src="images/20.jpg" />
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
						</div>
					</div>
					<div class="widget wid-tags">
						<div class="heading"><h4>Tag</h4></div>
						<div class="content">
							<ul class="list-inline">
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Sadipscing</a></li>
								<li><a href="#">Consetetur</a></li>
								<li><a href="#">Voluptua</a></li>
								<li><a href="#">Dolore</a></li>
								<li><a href="#">Travel</a></li>
								<li><a href="#">Video</a></li>
							</ul>
						</div>
					</div>
					<div class="widget wid-posts">
						<div class="heading"><h4>Popular Posts</h4></div>
						<div class="content">
							<ul class="list-inline">
								<div class="post">
									<a href="#"><img src="images/1.jpg"/></a>
									<div class="wrapper">
									  <h5><a href="#">A Blue Morning</a></h5>
									  <p>March 1, 2015</p>
									</div>
								</div>
								<div class="post">
									<a href="#"><img src="images/2.jpg"/></a>
									<div class="wrapper">
									  <h5><a href="#">A Blue Morning</a></h5>
									  <p>March 1, 2015</p>
									</div>
								</div>
								<div class="post">
									<a href="#"><img src="images/3.jpg"/></a>
									<div class="wrapper">
									  <h5><a href="#">A Blue Morning</a></h5>
									  <p>March 1, 2015</p>
									</div>
								</div>
							</ul>
						</div>
					</div>
					<div class="widget wid-archive">
						<div class="heading"><h4>Archive</h4></div>
						<div class="content">
							<select>
							    <option value="audi" selected>Select Month</option>
								<option value="volvo">March 2015</option>
								<option value="saab">Febuary 2015</option>
							</select>
						</div>
					</div>
					<div class="widget wid-gallery">
						<div class="heading"><h4>Gallery</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-xs-4">
									<a href="#"><img src="images/1.jpg"></a>
									<a href="#"><img src="images/2.jpg"></a>
									<a href="#"><img src="images/3.jpg"></a>
								</div>
								<div class="col-xs-4">
									<a href="#"><img src="images/6.jpg"></a>
									<a href="#"><img src="images/7.jpg"></a>
									<a href="#"><img src="images/8.jpg"></a>
								</div>
								<div class="col-xs-4">
									<a href="#"><img src="images/5.jpg"></a>
									<a href="#"><img src="images/9.jpg"></a>
									<a href="#"><img src="images/4.jpg"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="widget wid-links">
						<div class="heading"><h4>Categories</h4></div>
						<div class="content">
							<ul>
								<li><a href="#">> Lorem ipsum dolor sit </a></li>
								<li><a href="#">> Nullam venenatis lacus a </a></li>
								<li><a href="#">> Morbi ut sapien nec nisl</a></li>
								<li><a href="#">> Integer a enim ac ex.</a></li>
								<li><a href="#">> Sed in nunc non eleifend  </a></li>
								<li><a href="#">> Integer a enim ac ex.</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy; Your Website <br/> <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> by 365Bootstrap.com</span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- Top Slider -->
    <script src="js/jquery.js"></script>
    <script src='js/jquery.easing.1.3.js'></script> 
    <script src='js/camera.min.js'></script>
    <script>
		jQuery(function(){
		 
		  jQuery('#camera_wrap_1').camera({
			height: '600px',
			loader: 'bar',
			pagination: true,
			thumbnails: false
		  });
		});
	</script>
	<!-- Menu Js -->
	<script src="js/materialMenu.js"></script>
	<script>
	  var menu = new Menu;
	</script>
	<!-- Imges-hover-content -->
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript">
		$(function() {
			$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
		});
	</script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>