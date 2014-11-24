<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<title>Hawthorn Leisure | Home</title>
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/foundation.css" />
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://hawthornleisure.com/preview/js/vendor/modernizr.js"></script>
<script>
/* Top Animation */
$(document).ready(function() {
    var bgArr = ["img/start_slide_3.jpg", "img/start_slide_2.jpg", "img/start_slide_1.jpg"];
	var txArr = ["Join us for great business opportunities.", "A wide variety of pubs across the UK.", "Welcome to Hawthorn Leisure"];
	var pArr = ["Be part of the evolution with our unique operating models. We will be with you every step of the way.", "A pub company that supports their partners individually to develop the best offer for their pub.", " We are endeavouring to create something new and unique within the industry."];
	
	preload(bgArr);

	var i = 1;
	
	function backgroundSlide() {
		
		i++;
		
		$('.stretch').find('.imag').stop().fadeOut(1000, function(){
			$(this).remove();
		});
		$('.stretch').append('<div class="imag over" style="display:none;"><img src="'+bgArr[i-1]+'" class="start_slide"/></div>');
		if(i == 2) { $('.over').css('border-color', 'white'); } else { $('.over').css('border-color', '#CC6600'); }
		$('.over').stop().fadeIn(1000, function(){ $(this).removeClass('over'); });
		
		
		$('.stretch').stop().find('.stub').fadeOut(1000, function(){
			$(this).remove();
		});
		$('.stretch').append('<div class="stub lower"><div class="animate"><h3>'+txArr[i-1]+'</h3><p>'+pArr[i-1]+'</p></div></div>');
		if(i == 2) {
			$('.lower').find('.animate').css('background-color', 'white');
			$('.lower').find('h3').css('color', '#220639');
			$('.lower').find('p').css('color', '#220639');
		} else {
			$('.lower').find('.animate').css('background-color', '#CC6600');
			$('.lower').find('h3').css('color', 'white');
			$('.lower').find('p').css('color', 'white');
		}
		if($(document).width() > 1024) {
			if(i == 2 || i == 3) {
				$('.lower').css({'top': '378px', 'margin-left': '528px'});
			} else {
				$('.lower').css({'top': '204px', 'margin-left': '120px'});
			}
		}
		$('.lower').stop().fadeIn(1000, function(){ $(this).removeClass('lower'); });
		
		$('.cir').find('.ac').removeClass('ac');
		$('.cir').find('li:eq('+(i-1)+')').addClass('ac');
		
		if (i == bgArr.length) i = 0;
		
	}
	
	$('.cir').find('li').click(function(){
		i = $(this).index();
		backgroundSlide();
		clearInterval(interval);
		interval = setInterval(backgroundSlide, 5000);
	});
	
	var interval = setInterval(backgroundSlide, 5000);
	$(window).focus(function() {
		if (!interval)
			interval = setInterval(backgroundSlide, 5000);
	});
	$(window).blur(function() {
		clearInterval(interval);
		interval = 0;
	});
	
	/* Touch Dropdown */
	$('.has-dropdown:after').on("click", function (e) {
        e.preventDefault();
    });
});
/* End Animation */
function preload(arrayOfImages) {
	$('http://hawthornleisure.com/admin/preview/'.arrayOfImages).each(function(){
		$('<img/>')[0].src = this;
	});
 }
</script>
</head>
<body>
<div class="bar">
  <nav class="top-bar expanded" data-topbar>
    <ul class="title-area respond" style="margin:0 auto;">
      <li class="name"> <a href="http://hawthornleisure.com/preview" class="logo"><img src="http://hawthornleisure.com/preview/img/logo_text.png"/></a> </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>&nbsp;</span></a></li>
    </ul>
    <section class="top-bar-section">
      <div class="row">
        <div class="columns not_respond"> <a href="http://hawthornleisure.com/preview" class="logo"><img src="http://hawthornleisure.com/preview/img/logo.png"/></a> </div>
        <ul class="columns">
          <li><a href="http://hawthornleisure.com/preview">Home</a></li>
          <li class="has-dropdown"><a href="http://hawthornleisure.com/preview/about-us">About Us</a>
            <ul class="dropdown">
              <li><a href="http://hawthornleisure.com/preview/hawthorn-principles">The Hawthorn Principles</a></li>
            </ul>
          </li>
          <li><a href="http://hawthornleisure.com/preview/run-your-own-pub">Running your own Pub</a></li>
          <li><a href="http://hawthornleisure.com/preview/buying-club">Buying Club</a></li>
          <li><a href="http://hawthornleisure.com/preview/let">Pubs to Let</a></li>
          <li><a href="http://hawthornleisure.com/preview/contact-us">Contact Us</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="shadow"> </div>
      </div>
    </section>
  </nav>
</div>

<div class="start">
  <div class="stretch">
    <div class="imag"> <img src="img/start_slide_3.jpg" class="start_slide"/> </div>
    <div class="stub">
      <div class="animate">
        <h3>Welcome to Hawthorn Leisure</h3>
        <p>Welcome to a new world of hospitality.</p>
      </div>
    </div>
    <div class="cir"><ul><li class="ac"></li><li></li><li></li></ul></div>
  </div>
</div>

<div class="row">
  <div class="large-12 columns con">
    <h3>Where innovation meets experience to create a new world in hospitality.</h3>
    <div class="row">
      <div class="large-12 columns circles">
        <div class="large-4 columns"> <img src="http://hawthornleisure.com/preview/img/start_1.jpg" />
          <div class="large-12 columns tx">
            <p>Hawthorn Leisure offers flexible solutions to its partners and works together to gain the very best results from each and every pub.</p>
          </div>
        </div>
        <div class="large-4 columns"> <img src="http://hawthornleisure.com/preview/img/start_2.jpg" />
          <div class="large-12 columns tx">
            <p>A new company growing in an already established industry, Hawthorn Leisure brings a dynamic and flexible approach with its unique operating models.</p>
          </div>
        </div>
        <div class="large-4 columns"> <img src="http://hawthornleisure.com/preview/img/start_3.jpg" />
          <div class="large-12 columns tx">
            <p>Operating 350 pubs throughout the UK, the business is set to grow rapidly offering a wide choice of pubs for aspiring pub operators.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="row">
    <div class="large-12 columns tree">
      <div class="large-6 columns">
        <p>Hawthorn Leisure<br />
          Westbury Office<br />
          Angel Mill, Edward Street,<br/>
          Westbury, Wiltshire<br/>
          BA13 3DR</p>
      </div>
      <div class="large-6 columns"> </div>
    </div>
  </div>
</div>
<div class="ground">
  <ul class="large-12 columns">
    <li><a href="http://hawthornleisure.com/preview">Home</a></li>
    <li><a href="http://hawthornleisure.com/preview/about-us">About Us</a></li>
    <li><a href="http://hawthornleisure.com/preview/hawthorn-principles">The Hawthorn Principles</a></li>
    <li><a href="http://hawthornleisure.com/preview/run-your-own-pub">Running your own Pub</a></li>
    <li><a href="http://hawthornleisure.com/preview/buying-club">Buying Club</a></li>
    <li><a href="http://hawthornleisure.com/preview/let">Pubs to Let</a></li>
    <li><a href="http://hawthornleisure.com/preview/contact-us">Contact Us</a></li>
  </ul>
</div>
<script src="http://hawthornleisure.com/preview/js/foundation/foundation.js"></script> 
<script src="http://hawthornleisure.com/preview/js/foundation/foundation.topbar.js"></script> 
<script>
$(document).foundation();
</script>
</body>
</html>
