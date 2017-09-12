<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News Portal</title>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/theme.css">

<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/news.css">





</head>
 

<body>
    
    <div class="modal fade" id="modalDemo">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header"><h3 class="text-center">Sign Up for Newsletter!!</h3></div>
            <div class="modal-body">
                
                <form action="" method="post" name="myform" onSubmit="return validateForm()">
                <label>Name:</label>
                <input type="text" name="fname" >
                <label>Email:</label>
                <input type="text" name="email"><br>
                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" id="close">Close</button>
                 <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                  </form>
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->

    
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
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="<?php echo URL;?>aboutus">ABOUT US</a></li>
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
 	
 	<section class="site-section">
 		<div class="col-md-8">
 		  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active"> <img src="public/css/Images/1.png" alt="" >
                        <div class="carousel-caption">
                            <h3>
                                <bold>TERROR ATTACK IN BARCELONA</bold>
                            </h3>
                        </div>
                    </div>
                    <div class="item"> <img src="public/css/Images/2.png" alt="" >
                        <div class="carousel-caption">
                            <h3>
                                <bold>PRIME MINISTER OF NEPAL GIVING INTERVIEW AFTER RETURN FROM INDIA</bold>
                            </h3>
                        </div>
                    </div>
                    <div class="item"> <img src="public/css/Images/3.png" alt="" >
                        <div class="carousel-caption">
                            <h3>
                                <bold>FLOOD IN NEPAL 2017</bold>
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls --> 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
 		
 	    </div>
 	    <div class="col-md-3 text-center">
 	    	<h2>Sign Up for Newsletter</h2>
            <p>Sign up to receive our free newsletters!</p>
            <form action="#" method="post" name="myform" onSubmit="return validateForm()">
              <input type="text" placeholder="Name" name="fname" />
              
              <input type="email" placeholder="Email" name="email"/>
              
              <input type="submit" value="SUBMIT" />
            </form>
            
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
 	</section><!--end of section-->
 	
 	 <div class="site-main">
 	 	<div class="col-md-8">
			<h3 class="">From Around The World <input type="submit" value="More" id="more"></h3>
 	 		
 	 		<hr style="display: block; border-width: 3px; border-color: black;margin-top:0px; width: 94%;float: left;">
 	 		<div class="col-md-3">
 	 			<img src="public/css/Images/1.png">
 	 			<p style="font-weight: bold;">20<sup>th</sup> August,2017</p>
 	 			<p>Barcelona was under a terrorist attack on 19<sup>th</sup> August,2017. In this attack 10 people are dead and several are injured.</p>
 	 			<p><a href="#">Read More</a></p>
 	 		</div>
 	 		<div class="col-md-3">
 	 			<img src="public/css/Images/2.png">
 	 			<p style="font-weight: bold;">20<sup>th</sup> August,2017</p>
 	 			<p>Barcelona was under a terrorist attack on 19<sup>th</sup> August,2017. In this attack 10 people are dead and several are injured.</p>
 	 			<p><a href="#">Read More</a></p>
 	 		</div>
 	 		<div class="col-md-3">
 	 			<img src="public/css/Images/3.png">
 	 			<p style="font-weight: bold;">20<sup>th</sup> August,2017</p>
 	 			<p>Barcelona was under a terrorist attack on 19<sup>th</sup> August,2017. In this attack 10 people are dead and several are injured.</p>
 	 			<p><a href="#">Read More</a></p>
 	 		</div>
 	 	</div><!--end of col-md-8--> 	 	
 	 	
 	 	<div class="col-md-3">
 	 		
<!--
 	 			<h3 class="text-center" style="color:  #b1040e;">Latest Articles</h3>
 	 			<hr style="display: block; border-width: 3px; border-color: black;margin-top: 0px; width: 84%;float: right">
 	 			 
 	 			<ul class="latest-article">
 	 				<li id="first">
 	 				<div class="media">
 	 				<p style="font-weight: bold;">20<sup>th</sup> August,2017</p>
 	 			<p>"Terror attack in Barcelona."</p>
 	 			<p><a href="#">Read More</a></p>
						</div>
	 			   </li>
 	 			   
 	 			    <li id="second">
 	 			   <div class="media"> 
 	 			   <p style="font-weight: bold;">23<sup>rd</sup> August,2017</p>
 	 			<p>"Massive flood in terai region of Nepal."</p>
 	 			<p><a href="#">Read More</a></p>
						</div>
 	 			</li>
 	 				
 	 				<li id="third">
 	 				<div class="media"><p style="font-weight: bold;">25<sup>th</sup> August,2017</p>
 	 			<p>"Interview of Nepal's Prime Minister."</p>
 	 			<p><a href="#">Read More</a></p>
						</div>
 	 			</li>
 	 			
 	 			<li id="fourth">
 	 			<div class="media"><p style="font-weight: bold;">25<sup>th</sup> August,2017</p>
 	 			<p>"Interview of Nepal's Prime Minister."</p>
 	 			<p><a href="#">Read More</a></p>
					</div>
 	 			</li>
 	 			
 	 			</ul>
-->

	 			        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="public/css/Images/1.png" height="50px" width="60px"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Terror attack in Barcelona. </a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="public/css/Images/2.png" height="50px" width="60px"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Prime Minister of Nepal returns from India visit. </a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="public/css/Images/3.png" height="50px" width="60px"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Flood in NEPAL 2017. </a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="public/css/Images/man.png" height="50px" width="60px"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Manchester United defeated Liecester City by 2-0.</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="public/css/Images/ney.png" height="50px" width="60px"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Neymar Jr. has signed for Paris Saint Germain(PSG). </a> </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
 	 			
 	 			
 	 		
 	 	</div>
 	 	
 	 	
 	 </div><!--end of site main-->
 	 
 	 <div class="site-sports">
 	 	<div class="col-md-6">
 	 	   <h3 class="">Sports<input type="submit" value="More" id="sports"></h3>
 	 		<hr style="display: block; border-width: 3px; border-color: black;margin-top: 0px; width: 98%;float: left;">
 	 		<div class="col-md-5">
 	 			<img src="public/css/Images/man.png">
 	 			<p style="font-weight: bold;">27<sup>th</sup> August,2017</p>
 	 			<p>Manchester United defeated Liecester City by 2-0 in the premiere league earning them 9 points from first three games.</p>
 	 			<p><a href="#">Read More</a></p>
 	 		</div>
 	 		<div class="col-md-5">
 	 			<img src="public/css/Images/ney.png">
 	 			<p style="font-weight: bold;">19<sup>th</sup> August,2017</p>
 	 			<p>The unhappy man at Barcelona, Neymar Jr. has signed for Paris Saint Germain(PSG) for a record transfer fee of 222M.</p>
 	 			<p><a href="#">Read More</a></p>
 	 		</div>
 	 	</div>
 	 	
 	 	<div class="col-md-5">
			<h5><a  href="#">View More Videos</a></h5>
	 		
 	 		<video controls  type="video/mpeg">
		<source src="manchester.mp4">
	</video>
	 	<caption>
	 		<p class="text-center" style="font-weight: bold">Manchester United VS Liecester City 2-0 All Goals & Extended Highlights - Premier League 26/08/2017</p>
	 	</caption>
 	 	</div>
 	 	
 	 </div><!--end of site-sports-->
 	 
 	 <div class="site-entertainment">
 	 	<div class="col-md-12">
 	 	   <h3 class="">Entertainment</h3>
 	 	    <hr style="display: block; border-width: 3px; border-color: black;margin-top: 0px; width: 98%;">
 	 	    
 	 	</div>
 	 </div><!--end of movies-->
 	 
 	 <script src="<?php echo URL; ?>public/js/jssor.slider-22.1.8.min.js" type="text/javascript"></script>
 	  <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 810);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
 	 
 	  <style>
        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        .jssora02l.jssora02lds      (disabled)
        .jssora02r.jssora02rds      (disabled)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
        .jssora02l.jssora02lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
        .jssora02r.jssora02rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 11 css *//*.jssort11 .p            (normal).jssort11 .p:hover      (normal mouseover).jssort11 .pav          (active).jssort11 .pav:hover    (active mouseover).jssort11 .pdn          (mousedown)*/.jssort11 .p {    position: absolute;    top: 0;    left: 0;    width: 200px;    height: 69px;    background: #181818;}.jssort11 .tp {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort11 .i, .jssort11 .pav:hover .i {    position: absolute;    top: 3px;    left: 3px;    width: 60px;    height: 30px;    border: white 1px dashed;}* html .jssort11 .i {    width /**/: 62px;    height /**/: 32px;}.jssort11 .pav .i {    border: white 1px solid;}.jssort11 .t, .jssort11 .pav:hover .t {    position: absolute;    top: 3px;    left: 68px;    width: 129px;    height: 32px;    line-height: 32px;    text-align: center;    color: #fc9835;    font-size: 13px;    font-weight: 700;}.jssort11 .pav .t, .jssort11 .p:hover .t {    color: #fff;}.jssort11 .c, .jssort11 .pav:hover .c {    position: absolute;    top: 38px;    left: 3px;    width: 194px;    height: 32px;    line-height: 32px;    color: #fff;    font-size: 11px;    font-weight: 400;    overflow: hidden;}.jssort11 .pav .c, .jssort11 .p:hover .c {    color: #fc9835;}.jssort11 .t, .jssort11 .c {    transition: color 2s;    -moz-transition: color 2s;    -webkit-transition: color 2s;    -o-transition: color 2s;}.jssort11 .p:hover .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .pav:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}.jssort11 .p:hover, .jssort11 .pav:hover {    background: #333;}.jssort11 .pav, .jssort11 .p.pdn {    background: #462300;}
    </style>
 	 
 	 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:810px;height:300px;overflow:hidden;visibility:hidden;background-color:#000000;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="public/img/thrones.png" />
                <div data-u="thumb">
                    <img class="i" src="public/img/thronethumb.png" />
                    <div class="t">Game Of Thrones</div>
                    <div class="c">Game Of Thrones Season 7 Preview</div>
                </div>
            </div>
            <div>
                <img data-u="image" src="public/img/avengers.png" />
                <div data-u="thumb">
                    <img class="i" src="public/img/avengersthumb.png" />
                    <div class="t">Avengers</div>
                    <div class="c">Avengers: Infinity War</div>
                </div>
            </div>
            <div>
                <img data-u="image" src="public/img/thrones.png" />
                <div data-u="thumb">
                    <img class="i" src="public/img/thronethumb.png" />
                    <div class="t">Game Of Thrones</div>
                    <div class="c">Game Of Thrones Season 7 Preview</div>
                </div>
            </div>
            <div>
                <img data-u="image" src="public/img/avengers.png" />
                <div data-u="thumb">
                    <img class="i" src="public/img/avengersthumb.png" />
                    <div class="t">Avengers</div>
                    <div class="c">Avengers: Infinity War</div>
                </div>
            </div>
            
            
            <a data-u="any" href="http://www.jssor.com" style="display:none">List Slider</a>
            <div>
                <img data-u="image" src="public/img/thrones.png" />
                <div data-u="thumb">
                    <img class="i" src="public/img/thronethumb.png" />
                    <div class="t">Game Of Thrones</div>
                    <div class="c">Game Of Thrones Season 7 Preview</div>
                </div>
            </div>
            
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="tp"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    
<!--
	 <script type="text/javascript">
	  var images=new Array('jsimages//banner1.png','jsimages//banner2.png','jsimages//banner3.png');
var i=0;
function change_img(){
	if(i>2){
		i=0;
		img.src=images[i];
		i++;
	}
	else{
		img.src=images[i];
		i++;
	}
}
setInterval("change_img()",3000);
	 </script>
    
-->
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
<script type="text/javascript" src="<?php echo URL; ?>public/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/slick.min.js"></script> 
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.li-scroller.1.0.js"></script> 
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.newsTicker.min.js"></script> 
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.fancybox.pack.js"></script> 
<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/new.js" ></script>
	
 <script type="text/javascript">jssor_1_slider_init();</script>

 <script>
$(document).ready(function(){
		$('#modalDemo').modal('show')	;			   
						   
});
</script>
<!--
<script>
$(function(e){
	$(".dropdown").hover(function(){
		$(this).find("ul").stop().slideToggle(400);
	});
	//$("nav ul li").click(function(){$(this).find("ul").stop().slideToggle(400);});
});

</script>
-->

	<div class="bottom">
		<a class="scrollToTop" title="Click here to return to top section" data-toggle="popover" data-placement="top" data-trigger="hover"><button type="button"><i class="fa fa-arrow-circle-o-up icon"></i></button></a>
	</div>
<!--
	<script>
		$("document").ready(function(){
			$('[data-toggle="popover"]').popover();
			$('.scrollToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
		});
	</script>
-->

	
</body>
</html>
