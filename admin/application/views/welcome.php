<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<title>Hawthorn Leisure | Adminstration Area</title>
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/foundation.css" />
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://hawthornleisure.com/preview/js/vendor/modernizr.js"></script>
<script>
$(document).ready(function() {
	
	// Search Script
	$('input[name=search]').change(function() {
			$('.switch').find("div:not(:containsIN(" + $(this).val() + "))").parents('.switch').fadeOut(250);
			$('.switch').find("div:containsIN(" + $(this).val() + ")").parents('.switch').fadeIn(250);
			if( $('.switch').find("div:containsIN(" + $(this).val() + ")").length == 0 ) $('.none').fadeIn(250); else $('.none').fadeOut(250);
			if($(this).val() == '') $('.switch').fadeIn(250);
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
  <div class="large-12 columns titlea">
    <h2>Hawthorn Leisure : Manager</h2>
    <a class="small radius button logoutb" href="http://hawthornleisure.com/admin/auth/logout">Logout</a> </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <p class="details">Welcome to the Hawthorne Leisure Pub Manager.</p>
  </div>
  <div class="large-12 columns">
    <div class="columns" style="border:1px solid #CC6600;padding:24px;border-radius:3px;margin-bottom:24px;">
      <div class="details large-8 medium-8 columns" style="line-height:22px;font-weight:400;">You are logged in as <strong><?php echo $username; ?></strong>.  Edit/Delete a pub below or search by <strong>Criteria</strong> click the <strong>Column Title</strong> containing the criteria and then begin searching. </div>
      <div class="details large-4 medium-4 columns addpub"> <a class="small radius button" href="http://hawthornleisure.com/admin/pubs/add">Add a new Pub</a> </div>
    </div>
  </div>
  <div class="large-12 columns">
    <div class="large-6">
      <input type="text" name="search" class="radius sort_input" value="Search the list below" />
    </div>
    <div class="panel columns topshelf" style="margin-bottom:0;padding: 0 20px;">
      <h5 style="color:#CC6600;">
        <div class="large-7 columns table_sort" style="line-height:48px;">Name</div>
        <div class="large-2 columns table_sort" style="line-height:48px;border-left:1px solid #DBDBDB;" data="ref">Reference no.</div>
        <div class="large-1 columns table_sort" style="line-height:48px;border-left:1px solid #DBDBDB;" data="post">Area</div>
        <div class="large-2 columns" style="line-height:48px;border-left:1px solid #DBDBDB;">Date modified</div>
      </h5>
    </div>
  </div>
  <?php foreach ($pubs as $pub) { ?>
  <div class="large-12 columns switch">
    <div class="panel columns" style="border-top:0;margin:0;line-height:23px;background:none;">
      <div class="large-3 columns name"> <?php echo $pub->name; ?> </div>
      <div class="large-4 columns"> <a href="http://hawthornleisure.com/admin/pubs/ed/<?php echo $pub->id; ?>" class="small radius button" style="margin:0; padding:4px 8px;">Edit</a> <a href="http://hawthornleisure.com/admin/pubs/delete_pub/<?php  echo $pub->id; ?>" class="small radius button delb">Delete</a>
        <?php if($pub->draft == 0) { ?>
        <a href="http://hawthornleisure.com/admin/pubs/visible/<?php  echo $pub->id; ?>" class="small radius button showb">Show</a> <a href="http://hawthornleisure.com/admin/pubs/show/<?php  echo $pub->id; ?>" class="small radius button preb" target="_blank">Preview</a>
        <?php } else { ?>
        <a href="http://hawthornleisure.com/admin/pubs/visible/<?php  echo $pub->id; ?>" class="small radius button hideb">Hide</a> <a class="small radius button preb_">Preview</a>
        <?php } ?>
      </div>
      <div class="large-2 columns ref" style="text-align:center;"> <?php echo $pub->reference_number; ?> </div>
      <div class="large-1 columns post" style="text-align:center;font-weight:300;padding-left:0;padding-right:0;"> <?php echo $pub->postcode; ?> </div>
      <div class="large-2 columns date" style="text-align:center;"> <?php echo substr($pub->date_modified, 0, 10); ?> </div>
    </div>
  </div>
  <?php } ?>
  <div class="large-12 columns none" style="display:none;">
    <p>There are no results to display.</p>
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
