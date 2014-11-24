<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<title>Hawthorn Leisure | Contact Us</title>
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/foundation.css" />
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://hawthornleisure.com/preview/js/vendor/modernizr.js"></script>
<script>
$(document).ready(function() {
// Contact Script
	$('textarea[name=message]').focus(function() { 
		if($(this).val() == 'Enter your Message') $(this).val('');
	}).blur(function() {
		if($(this).val() == '') $(this).val('Enter your Message');
	});
// End Contact Script
// Form Submission
$('#contact').validate({
  rules: {
   name: {
    minlength: 2,
    required: true
   },
   email: {
    required: true,
    email: true
   },
   message: {
    minlength: 2,
    required: true
   }
  },
  highlight: function(element) {
   $(element).closest('.control-group').removeClass('success').addClass('error');
  },
  success: function(element) {
   element.text('OK!').addClass('valid').closest('.control-group').removeClass('error').addClass('success');
  }, 
  
  submitHandler: function( form ) {
       
        $.ajax({
            url : 'http://hawthornleisure.com/admin/pubs/contact',
            data : $('#contact').serialize(),
            type: "POST",
            success : function(data){
             $("#contact").hide('slow');
             $('.cf').html(data);
            }
        })
        return false;
     }
  
 });

// End Form Submission
/* Top Animation */
    var bgArr = ["../img/contact_slide_1.jpg", "../img/contact_slide_2.jpg", "../img/contact_slide_3.jpg"];
	
	preload(bgArr);

	var i = 1;
	function backgroundSlide() {
		i++;
		
		$('.stretch').find('img').stop().fadeOut(1000, function(){
			$(this).remove();
		});
		$('.stretch').find('div').append('<img src="'+bgArr[i-1]+'" class="lower contact_slide"/>');	
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
/* End Animation */
/* Align Numbers */
	var one = $('.cont .one:eq(0)');
	var no = $('.cont .columns.no:eq(0)');
	if($(document).width() <= 640) {
		no.remove();
		$('.cont').prepend('<div class="large-12 columns resp"><div class="large-4 columns one">'+one.html()+'</div><div class="large-4 columns no">'+no.html()+'</div></div>');
	}
});
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

<div class="contact">
    <div class="stretch"><div><img src="../img/contact_slide_2.jpg" class="contact_slide"/></div></div>
</div>

<div class="row">
  <div class="large-12 columns con">
    <h3>Hawthorn Leisure Contacts</h3>
    <div class="large-12 columns">
      <div class="row cont">
        <div class="large-12 columns">
          <div class="large-4 columns one">
            <p>General Enquiries</p>
            <p>Pubs To Let</p>
            <p>Property Helpdesk</p>
            <p>Credit Control</p>
            <p>Electronic Invoicing</p>
            <p>Licensing Support</p>
            <p style="margin-top:24px;">Pelican Consortia Purchasing</p>
          </div>
          <div class="large-4 columns no">
            <p>01373 828 719</p>
            <p>01902 376 078</p>
            <p>0845 565 0232</p>
            <p>01373 828 719</p>
            <p>01373 828 719</p>
            <p>01179 177 612</p>
            <p style="line-height:96px;">01252 705 222</p>
          </div>
          <div class="large-4 columns ml">
            <p><a href="mailto:enquiries@hawthornleisure.com">enquiries@hawthornleisure.com</a></p>
            <p><a href="mailto:enquiries@hawthornleisure.com;mariefoy@findmypub.com">enquiries@hawthornleisure.com</a></p>
            <p><a href="mailto:property@hawthornleisure.com">property@hawthornleisure.com</a></p>
            <p><a href="mailto:creditcontrol@hawthornleisure.com">creditcontrol@hawthornleisure.com</a></p>
            <p><a href="mailto:creditcontrol@hawthornleisure.com">creditcontrol@hawthornleisure.com</a></p>
            <p><a href="mailto:licensing@hawthornleisure.com">licensing@hawthornleisure.com</a></p>
            <a href="http://www.pelicanprocurement.co.uk/#ContactUsForm" class="small radius button" target="_blank" style="margin-top:24px;width:240px;">Contact Pelican</a>
          </div>
        </div>
        <div class="large-12 columns matt">
              <div class="large-4 columns one">
                  <p><strong>Matthew Clark Sales</strong></p>
                  <p>Telesales</p>
                  <p>Customer Service</p>
                  <p style="margin-top:24px;">After Sales Service</p>
                </div>
                <div class="large-4 columns no">
                  <p>&nbsp;</p>
                  <p>0844 844 8112</p>
                  <p>0344 844 8113</p>
                  <p style="margin-top:24px;">0844 822 3910</p>
                </div>
                <div class="large-4 columns ml">
                <a href="http://www.users.itradenetwork.co.uk/hawthorns" class="small radius button" target="_blank" style="margin-top:18px;width:240px;margin-top:90px;"">Order Online</a>                 
            </div>         
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="large-12 columns con">
    <h3>Leave us a message</h3>
  </div>
  <div class="large-6 columns">
    <div class="large-12 columns map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2496.743576321959!2d-2.1831572!3d51.260630500000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4873d6a111e16f63%3A0xcd979cb1759898e3!2sWestbury%2C+Wiltshire+BA13+3DR%2C+UK!5e0!3m2!1sen!2s!4v1407144879319" width="470" height="378" frameborder="0" style="border:0"></iframe>
    </div>
    <div class="large-12 columns mapad" style="padding:0;">
    <p>Hawthorn Leisure<br />
    Westbury Office<br />
    Angel Mill<br />
    Edward Street<br />
    Westbury<br />
    Wiltshire<br />
    BA13 3DR</p>
    </div>
  </div>
  <div class="large-6 columns cform">
    <div class="large-12 columns">
      <div class="row">
        <div class="large-12 columns cf radius panel">
          <form class="contact" id="contact">
            <div class="row">
              <div class="large-12 columns">
                <label>Name
                  <input type="text" id="name" placeholder="Enter Name" class="name radius" name="name" />
                </label>
              </div>
              <div class="large-12 columns">
                <label>Email
                  <input type="email" id="email" placeholder="Enter Email" class="email radius" name="email" />
                </label>
              </div>
              <div class="large-12 columns">
                <label>Message
                  <textarea placeholder="Enter your message" class="message radius" name="message" id="message"></textarea>
                </label>
              </div>
              <input type="submit" class="small radius button" value="Submit">
            </div>
          </form>
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
<script src="http://hawthornleisure.com/preview/js/jquery.validate.min.js"></script>
<script>
$(document).foundation();
</script>
</body>
</html>
