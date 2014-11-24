<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<title>Hawthorn Leisure | About Us</title>
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/foundation.css" />
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://hawthornleisure.com/preview/js/vendor/modernizr.js"></script>
<script>
/* Top Animation  */
$(document).ready(function() {
    var bgArr = ["../img/about_slide_2.jpg", "../img/about_slide_1.jpg", "../img/about_slide_3.jpg"];
	preload(bgArr);
	var i = 1;
	function backgroundSlide() {
		i++;
		
		$('.stretch').find('img').stop().fadeOut(1000, function(){
			$(this).remove();
		});
		$('.stretch').find('div').append('<img src="'+bgArr[i-1]+'" class="lower about_slide"/>');	
		$('.lower').stop().fadeIn(1000, function(){ $(this).removeClass('lower'); });
		
		if (i == bgArr.length) i = 0;
	}
	var interval = setInterval(backgroundSlide, 5000);
	$(window).focus(function() {
		if (!interval)
			interval = setInterval(backgroundSlide, 5000);
	});
	$(window).blur(function() {
		clearInterval(interval);
		interval = 0;
	});
});
/* End Animation */
function preload(arrayOfImages) {
	$(arrayOfImages).each(function(){
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

<div class="about">
    <div class="stretch"><div><img src="../img/about_slide_2.jpg" class="about_slide"/></div></div>
</div>

<div class="row">
  <div class="large-12 columns con">
    <h3>About Us</h3>
    <div class="large-6 columns">
      <p>Hawthorn Leisure is a new and innovative pub company which was formed in 2013 to acquire, invest in and support pubs across the UK.</p>
      <p>Our strategy is to work closely with our partners, providing management support and capital investment to help them drive growth and maximise the potential of their pubs.</p>
    </div>
    <div class="large-6 columns">
      <p>Hawthorn Leisure owns a diverse range of over 350 pubs across the UK comprising everything from local / traditional community pubs to country inns and high-street pubs.</p>
      <p>Our pubs are primarily operated by licensed partners who benefit from extensive support from Hawthorn Leisure in the form of management focus, capital investment, extensive product range, training and infrastructure.</p>
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
