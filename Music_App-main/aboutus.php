<?php 

include("navbar.php");

 ?>
 <style type="text/css">
 	.myabout{
	background-image: url(img/pexels-fauxels-3184418.jpg);
	background-size: cover;
	background-position: center;
	min-width: 100%;
	min-height: 100vh;
	max-width: 100%;
	max-height:100%;
	}
	.heading1{
		text-align: center;
	}
	.about{
		justify-content: space-between;
	}

 </style>
<div class="container text-light p-5 myabout">
	<h1 class="heading1 mb-5">ABOUT US</h1>
    <div class="container">
    	<div class="d-sm-flex about">
    		<div>
    			<h4 class="text-dark">OnTheMove is a music streaming <br> platform whose main aim is <br>promoting and elevating creators <br> since most local musicians do not <br> strive from YouTube uploads and <br> their international streaming sites</h4>
    		</div>
    		<div>
    			<h3>Our Mission</h3>
    			<h3>Our Vision</h3>
    			<h3>Our Core Values</h3>
    		</div>
    	</div>
    </div>
</div>
<?php 

include("footer.php");

 ?>