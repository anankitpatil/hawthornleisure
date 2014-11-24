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
	var bgArr = [];
    $('.stretch img').each(function() {
		if($(this).width == 0) {
		  $(this).remove();
		} else {
		  bgArr.push($(this).attr('src'));
		  if($(this).hasClass('vis')) $(this).remove();	
		}
	});
	
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
	
	$('.backb').click(function(){
		window.close();
	});
});
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
<div class="row">
  <div class="large-12"> <a href="http://hawthornleisure.com/preview/let" class="backb">&lt;&lt; Back</a> </div>
</div>
<div class="show">
  <div class="stretch">
    <div>
      <?php if($pub['image_link_1'] != '0') { ?>
      <img src="http://hawthornleisure.com/admin/uploads<?php echo $pub['image_link_1']; ?>" class="show_slide" /> <img src="http://hawthornleisure.com/admin/uploads<?php echo $pub['image_link_2']; ?>" class="vis" /> <img src="http://hawthornleisure.com/admin/uploads<?php echo $pub['image_link_3']; ?>" class="vis" /> <img src="http://hawthornleisure.com/admin/uploads<?php echo $pub['image_link_4']; ?>" class="vis" /> <img src="http://hawthornleisure.com/admin/uploads<?php echo $pub['image_link_5']; ?>" class="vis" />
      <?php } else { ?>
      <div class="large-12 columns" style="text-align:center;border:none;margin:128px auto;">There are no images to display.</div>
      <?php } ?>
    </div>
  </div>
</div>
<!--<div class="row">
  <div class="large-12 columns">
    <div class="large-12 columns panel" style="padding-bottom:0;">
      <div class="large-6 columns">
        <div class="large-4 columns"><a href="http://hawthornleisure.com/admin/pubs/delete_pub/<?php  //echo $pub['id']; ?>" class="small radius button delb" style="padding:8px 18px;">Delete</a></div>
        <div class="large-8 columns" style="line-height:34px;">Delete this entry.</div>
      </div>
      <div class="large-6 columns">
        <div class="large-4 columns"><a href="http://hawthornleisure.com/admin/pubs/visible/<?php //echo $pub['id']; ?>" class="small radius button showb" style="padding:8px 18px;">Show</a></div>
        <div class="large-8 columns" style="line-height:34px;">Make this entry visible.</div>
      </div>
    </div>
  </div>
</div> -->
<div class="row">
  <div class="large-12 columns abandon">
    <div class="large-6 columns">
      <h3 style="line-height:53px;"><?php echo $pub['name']; ?></h3>
    </div>
    <div class="large-6 columns"> <a href="http://hawthornleisure.com/admin/uploads<?php echo $pub['image_link_6']; ?>" target="_blank" class="small radius button" style="margin:0.625rem 0;" />Download Complete Specifications</a> </div>
  </div>
  <div class="large-12 columns" style="border-bottom:1px solid #CACACA;padding-bottom:24px;">
    <div class="large-4 columns accent">
      <h5>Complete Address:</h5>
      <p><?php echo $pub['address_line_1']; ?><br />
        <?php echo $pub['address_line_2']; ?><br />
        <?php echo $pub['address_line_3']; ?><br />
        <strong><?php echo $pub['postcode']; ?></strong></p>
    </div>
    <div class="large-4 columns accent">
      <h5>Letting Conditions:</h5>
      <p>Required Investment: <strong><?php echo $pub['investment']; ?></strong><br />
        Rent (If Applicable): <strong><?php echo $pub['rent']; ?></strong><br />
        Status: <strong>
        <?php if($pub['status'] == 1) { echo 'To Let'; } else { echo 'Refurbishment Planned'; } ?>
        </strong><br />
        Agreement Type: <strong>
        <?php if($pub['agreement'] == 1) { echo 'Franchise'; } elseif($pub['agreement'] == 2) { echo 'Lease'; } else { echo 'Tenancy'; } ?>
        </strong><br />
      </p>
    </div>
    <div class="large-4 columns accent">
      <h5>Other Details:</h5>
      <p>Reference no.: <strong><?php echo $pub['reference_number']; ?></strong></p>
    </div>
  </div>
  <div class="large-12 columns feat">
    <div class="large-12 columns">
      <h5>Features</h5>
      <div class="large-3 columns">
        <div class="featin <?php if($pub['feat_beer'] == 1) echo 'yes' ?>">Beer Garden</div>
        <div class="featin <?php if($pub['feat_external'] == 1) echo 'yes' ?>">External Drinking Area</div>
        <div class="featin <?php if($pub['feat_catering'] == 1) echo 'yes' ?>">Catering Kitchen</div>
      </div>
      <div class="large-3 columns">
        <div class="featin <?php if($pub['feat_function'] == 1) echo 'yes' ?>">Function Room</div>
        <div class="featin <?php if($pub['feat_team'] == 1) echo 'yes' ?>">Team Games</div>
        <div class="featin <?php if($pub['feat_pool'] == 1) echo 'yes' ?>">Pool Area</div>
      </div>
      <div class="large-3 columns">
        <div class="featin <?php if($pub['feat_car'] == 1) echo 'yes' ?>">Car Park</div>
        <div class="featin <?php if($pub['feat_restaurant'] == 1) echo 'yes' ?>">Restaurant / Dining</div>
        <div class="featin <?php if($pub['feat_sky'] == 1) echo 'yes' ?>">Sky Sports</div>
      </div>
      <div class="large-3 columns">
        <div class="featin <?php if($pub['feat_live'] == 1) echo 'yes' ?>">Live Music</div>
        <div class="featin <?php if($pub['feat_letting'] == 1) echo 'yes' ?>">Letting Rooms</div>
        <div class="featin <?php if($pub['feat_smoking'] == 1) echo 'yes' ?>">Smoking</div>
      </div>
    </div>
  </div>
  <div class="large-12 columns">
    <div class="large-6 columns crip">
      <h5>Description:</h5>
      <div class="large-12 columns">
        <p><?php echo nl2br($pub['description']); ?></p>
      </div>
    </div>
    <div class="large-6 columns crip">
      <h5>Property Features:</h5>
      <div class="large-12 columns">
        <p><?php echo nl2br($pub['property_features']); ?></p>
      </div>
    </div>
  </div>
  <div class="large-12 columns">
    <div class="large-6 columns crip">
      <h5>About the Investment:</h5>
      <div class="large-12 columns">
        <p><?php echo nl2br($pub['investment_desc']); ?></p>
      </div>
    </div>
    <div class="large-6 columns crip">
      <h5>Trading Style:</h5>
      <div class="large-12 columns">
        <p><?php echo nl2br($pub['trading_style']); ?></p>
      </div>
    </div>
  </div>
  <div class="large-12 columns">
    <div class="large-6 columns crip">
      <h5>Accomodation Details:</h5>
      <div class="large-12 columns">
        <p><?php echo nl2br($pub['accomodation']); ?></p>
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