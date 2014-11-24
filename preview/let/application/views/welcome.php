<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<title>Hawthorn Leisure | Pubs to Let</title>
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/foundation.css" />
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://hawthornleisure.com/preview/js/vendor/modernizr.js"></script>
<script>
$(document).ready(function() {
// Search Script
	$('input[name=search]').change(function() {
		if($(this).val().length >= 3) {
			$('.list').find("div:not(:containsIN(" + $(this).val() + "))").parents('.list').fadeOut(250);
			$('.list').find("div:containsIN(" + $(this).val() + ")").parents('.list').fadeIn(250);
			if( $('.list').find("div:containsIN(" + $(this).val() + ")").length == 0 ) $('.none').fadeIn(250); else $('.none').fadeOut(250);
		} else {
			$('.list').fadeIn(250);
		}
	}).keyup(function(){
		$(this).change();	
	});
	
	$('input[name=search]').focus(function() { 
		if($(this).val() == 'Search the list below') $(this).val('');
		else $(this).select();
	}).blur(function() {
		if($(this).val() == '') $(this).val('Search the list below');
	});
// End Search Script
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
<div class="contact">
  <div class="stretch">
    <div><img src="../img/contact_slide_1.jpg" class="contact_slide"/></div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns con">
    <h3>Pubs to Let</h3>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <div class="large-12 columns search">
      <div class="large-12 columns">
        <input type="text" name="search" class="radius" value="Search the list below" />
      </div>
      <div class="large-12 columns">
        <p style="text-align:left;">Search for the <strong>Name</strong>, <strong>Reference number</strong>, or the <strong>Address</strong> from the list below.</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns listwrap">
    <?php foreach ($pubs as $pub) { if($pub->draft == 1) {?>
    <div class="large-12 columns list">
      <div class="large-2 columns">
        <div class="crop"><img src="http://hawthornleisure.com/admin/uploads/<?php echo dirname( $pub->image_link_1 ) . '/thumb/' . basename( $pub->image_link_1 ); ?>" /> </div>
      </div>
      <div class="large-3 columns" style="padding-left:18px;"> <a href="http://hawthornleisure.com/preview/let/show/<?php echo $pub->id; ?>"><?php echo $pub->name; ?></a><br />
        <p><?php echo $pub->address_line_1; ?><br />
          <?php echo $pub->address_line_2; ?><br />
          <?php echo $pub->address_line_3; ?><br />
          <strong class="postcode"><?php echo $pub->postcode; ?></strong></p>
      </div>
      <div class="large-3 columns desc">
        <p><?php echo substr($pub->description, 0, 140) . '...'; ?></p>
      </div>
      <div class="large-4 columns more">
        <p> Status: <strong>
          <?php if($pub->status == 1) echo 'To Let'; else echo 'Refurbishment Planned'; ?>
          </strong><br />
          Agreement type: <strong>
          <?php if($pub->agreement == 1) echo 'Franchise'; else if($pub->agreement == 2) echo 'Lease'; else echo 'Tenancy'; ?>
          </strong><br />
          Required Investment: <strong><?php echo $pub->investment; ?></strong><br />
          Rent (if applicable): <strong><?php echo $pub->rent; ?></strong><br />
        </p>
      </div>
    </div>
    <?php } } ?>
  </div>
  <div class="large-12 columns none" style="display:none;">
    <p>There are no results to display.</p>
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
