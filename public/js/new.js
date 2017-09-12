// JavaScript Document
//for banner images
	  var images=new Array('public/jsimages//banner1.png','public/jsimages//banner2.png','public/jsimages//banner3.png');
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
//end of banner images	
    

//nav deopdown
$(function(e){
	$(".dropdown").hover(function(){
		$(this).find("ul").stop().slideToggle(400);
	});
	//$("nav ul li").click(function(){$(this).find("ul").stop().slideToggle(400);});
});
//end of nav dropdown


//scroll up
$("document").ready(function(){
			$('[data-toggle="popover"]').popover();
			$('.scrollToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
		});
//end of scroll up

