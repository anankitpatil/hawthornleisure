<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<title>Hawthorn Leisure | Running Your Own Pub</title>
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/foundation.css" />
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://hawthornleisure.com/preview/js/vendor/modernizr.js"></script>
<script>
/* Top Animation */
$(document).ready(function() {
    var bgArr = ["../img/run_slide_1.jpg", "../img/run_slide_2.jpg", "../img/run_slide_3.jpg"];	
	preload(bgArr);
	var i = 1;
	function backgroundSlide() {
		i++;
		
		$('.stretch').find('img').stop().fadeOut(1000, function(){
			$(this).remove();
		});
		$('.stretch').find('div').append('<img src="'+bgArr[i-1]+'" class="lower run_slide"/>');	
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
function preload(arrayOfImages) {
	$(arrayOfImages).each(function(){
		$('<img/>')[0].src = this;
	});
 }
/* End Animation */
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

<div class="run">
    <div class="stretch"><div><img src="../img/run_slide_1.jpg" class="run_slide"/></div></div>
</div>

<div class="row">
  <div class="large-12 columns con">
    <h3>Running your own pub</h3>
    <div class="row">
      <div class="large-12 columns"> 
        <div class="large-6 columns">
            <p>Welcome to an exciting new pub company, currently with a portfolio of 350 pubs across the UK. Hawthorn Leisure operates a little differently with the belief that the success of the company as a whole is driven by the success of its partners.</p>
        </div>
        <div class="large-6 columns">
            <p>We understand that each partner looking to run a pub within the Hawthorn Leisure portfolio is investing not only money, but time, hard work and dedication. We work together with you to develop a vision and create an offering which is right for your customers.</p>
        </div>
      </div>
      <div class="large-12 columns" style="margin-bottom:48px;"> 
        <div class="large-6 columns">
            <p>Running your own pub is an exciting prospect and very rewarding, and we believe support in various areas of business and financial investment could make all the difference. Boasting an experienced team of hand-picked Business Development Managers, Hawthorn Leisure is focussed on offering the required support at the right time.</p>
        </div>
        <div class="large-6 columns">
            <p>We understand that making a decision to run a pub, whether you are new to the industry or seasoned pro's is a big step. Running a Hawthorn pub would offer benefits of our new approach, continual support and the opportunity to be part of an organisation that is forging forward to become the innovators within the industry.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="large-12 columns success">
    <div class="panel">
      <h4>Hawthorn Success Factors</h4>
      <div class="large-12 columns">
      <ul>
        <li>Your success is our success</li>
        <li>Passionate and motivated partners who bring their pub to the centre of their community.</li>
        <li>Creating a vision and plan for each pub, in conjunction with our partners that develops it's full potential.</li>
        <li>Flexible agreements to suit each pub.</li>
        <li>Being focused on our pub customers.</li>
      </ul>
      </div>
      <p>If you are interested in running your own pub, please call 01902 376 078 or complete the enquiry form in the Contact Us section.</p>
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