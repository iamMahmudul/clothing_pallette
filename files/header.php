<?php
	
	include('config/config.php');
	include('config/Database.php');
	include('config/format.php');
?>


<!--Creating object of Database and Format class-->
<?php
	$db=new Database();
	$fm=new format();
?>
<html>
<head>
<title>Clothing_Pallette</title>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2200,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>



	 <!--Attaching CSS files-->
	 <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <script src="js/bootstrap.min.js"></script>
	 <!--Attaching CSS files-->
	 
	 
</head>
<body>
<div class="headersection templete clear">
		<div class="logo">
		<img src="images/123.png"/>
		</div>
		<div class="title">
		<h3>Clothing Pallette</h3>
		<p>Website Slogan Goes Here</p>
		</div>
		
		<div class="right">
		<strong><p><a href="#">Company Policy</a> | <a href="#">About Us </a>|<a href="contact.php"> Contact Us</a></p></strong>
		
		
		 <!--Search Form-->
		 
		<form action="search.php" method="get">
		<input type="text" name="search"/>
		<button>Search</button>
		</form>
		
		 <!--Search Form-->
	</div>
</div>

<div class="bannersection templete clear">
		<img src="images/banner.jpg"/>
</div>

<section class="navsection templete clear">
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="products.php">Products</a></li>
			
			
		</ul>
	</div>
</section>