<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News Portal</title>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/news.css">





</head>

<body>
    
    <div class="container" id="container">
        <header class="site-header">
 		<div class="col-md-12">
 			<div class="col-md-4">
 				<img src="public/css/Images/world.png">
 			</div>
 			<div class="col-md-5">
 				<form class="navbar-form">
				<div class="input-group">
					<input type="text" placeholder="search for news" class="form-control">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
						<i class="fa fa-search icon">
							</i>
						</button>
					</div>
				</div>
			</form>
 			</div>
 			<div class="col-md-2 pull-right text-center">
 			<p style="font-size: 16px; font-weight:bold">Follow Us On</p>
 				<i class="fa fa-facebook-official icon"></i>
 				<i class="fa fa-twitter icon"></i>
 				<i class="fa fa-google-plus-official icon"></i>
 			</div>
 			
 		</div>
 	</header>
        <nav class="site-nav">
 		<ul id="nav">
                    <li class=""><a href="<?php echo URL;?>home">HOME</a></li>
                    <li class="active"><a href="#">ABOUT US</a></li>
 			<li><a href="#">WORLDNEWS</a></li>
 			<li class="dropdown" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="#">SPORTS</a>
 			   <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="#">Football</a></li>
            <li><a href="#">Cricket</a></li>
            <li><a href="#">Tennis</a></li>
            <li><a href="#">Basketball</a></li>
            </ul>
 			</li>
 			<li><a href="#">ENTERTAINMENT</a></li>
 		</ul>
 	</nav><!--end of navigation-->
        
        <div class="site-about">
            <section>
                <div class="col-md-12">
                <div class="col-md-3 text-center pull-right">
 	    	<h2>Sign Up for Newsletter</h2>
            <p>Sign up to receive our free newsletters!</p>
            <form action="#" method="post" name="myform" onSubmit="return validateForm()">
              <input type="text" placeholder="Name" name="fname" />
              
              <input type="email" placeholder="Email" name="email"/>
              
              <input type="submit" value="SUBMIT" />
            </form>
            
 	    </div>
                    </div>
 	    <script>
		  function validateForm(){
			  var x=document.forms["myform"]["fname"].value;
			  if (x == ""){
				  alert("The name field must be filled out");
				  return false;
			  }
			  
			  var y=document.forms["myform"]["email"].value;
			  
			   var atpos = y.indexOf("@");
               var dotpos = y.lastIndexOf(".");
			  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
                 alert("Not a valid e-mail address. Eg:john@gmail.com, john@hotmail.com");
                 return false;
    }
		  }
		</script>  
            </section>
        </div>
        
        <div class="site-banner">
		<img src="public/jsimages/banner1.png" id="img">
    	
    </div><!--end of site-banner-->
    
    <div class="footer-menu">
    	<ul class="fmenu">
    		<li><a href="#">Home</a></li>
    		<li><a href="#">About Us</a></li>
    		<li><a href="#">WorldNews</a></li>
    		<li><a href="#">Sports</a></li>
    		<li id="entertain"><a href="#">Entertainment</a></li>
    		
    	</ul>
    	
    </div>
    
    <div class="copyright">
    	<p>
    	<i class="fa fa-copyright icon"></i>Copyright: 2017 The World News. All rights reserved | Design by Binam Sen 
    	</p>
    
    </div>
        
        
    
    
    </div><!--end of container-->
    
    
    
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-3.1.1.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/js/new.js" ></script>
</body>
</html>