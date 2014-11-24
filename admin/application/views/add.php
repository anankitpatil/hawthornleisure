<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<title>Hawthorn Leisure | Add a new Pub</title>
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/foundation.css" />
<link rel="stylesheet" href="http://hawthornleisure.com/preview/css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://hawthornleisure.com/preview/js/vendor/modernizr.js"></script>
<script>
    $( document ).ready(function() {
        $('.delete_button').click(function() {
            $(this).parent().siblings('.old-image').hide();
            $(this).parent().siblings('.old-link').removeClass('medium-4').addClass('medium-10');
            $(this).parent().siblings('.old-link').find('.delete_show').replaceWith('<input type="file" name="'+$(this).attr('data')+'" value="" style="margin:0;" />');
            $(this).parent().siblings('.old-link').find('.delete_hide').hide();
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
<div class="large-12">
<a href="http://hawthornleisure.com/admin" class="backb">&lt;&lt; Back</a>
</div>
</div>
<div class="row">
      <div class="large-12 columns titlea">
    <h2>Add a new Pub</h2>
  </div>
    </div>
</div>
<div class="row">
<form action="<?php echo base_url();?>pubs/add_pub" method="post" enctype="multipart/form-data">
      <div class="large-6 columns">
    <label>Name of Pub: </label>
    <input type = 'text' name='name'>
    <label>Status: </label>
    <select name='status'>
          <option value="1">To Let</option>
          <option value="2">Refurbishment Planned</option>
        </select>
    <h5 style="margin:20px 0 8px;">Features Checkbox:</h5>
    <div class="large-12 medium-12 columns" style="border:1px solid #CCC;padding:24px 0 12px 0;margin-bottom:20px;">
          <div class="large-6 medium-6 columns">
        <input type = 'checkbox' name='feat_beer'>
        <label>Beer Garden</label>
        <br/>
        <input type = 'checkbox' name='feat_external' value='0'>
        <label>External Drinking Area</label>
        <br/>
        <input type = 'checkbox' name='feat_catering' value='0'>
        <label>Catering Kitchen</label>
        <br/>
        <input type = 'checkbox' name='feat_function' value='0'>
        <label>Function Room</label>
        <br/>
        <input type = 'checkbox' name='feat_team' value='0'>
        <label>Team Games</label>
        <br/>
        <input type = 'checkbox' name='feat_pool' value='0'>
        <label>Pool Area</label>
      </div>
          <div class="large-6 medium-6 columns">
        <input type = 'checkbox' name='feat_car' value='0'>
        <label>Car Park</label>
        <br/>
        <input type = 'checkbox' name='feat_restaurant' value='0'>
        <label>Restaurant/Dining</label>
        <br/>
        <input type = 'checkbox' name='feat_sky' value='0'>
        <label>Sky Sports</label>
        <br/>
        <input type = 'checkbox' name='feat_live' value='0'>
        <label>Live Music</label>
        <br/>
        <input type = 'checkbox' name='feat_letting' value='0'>
        <label>Letting Rooms</label>
        <br/>
        <input type = 'checkbox' name='feat_smoking' value='0'>
        <label>Smoking</label>
      </div>
        </div>
    <label>Description: </label>
    <textarea placeholder='' name='description'></textarea>
    <label>About the Investment: </label>
    <textarea placeholder='' name='investment_desc'></textarea>
          <div class="large-6 columns" style="padding-left:0;">
        <label>Required Investment: </label>
        <input type = 'text' name='investment'>
      </div>
          <div class="large-6 columns" style="padding-right:0;">
        <label>Rent: </label>
        <input type = 'text' name='rent'>
      </div>
    <h5 style="margin:108px 0 8px;">Image Upload:</h5>
    <div class="large-12 medium-12 columns" style="border:1px solid #CCC;padding:24px 24px 8px 24px;margin-bottom:200px;">
          <input type="file" name="image_link_1" />
          <input type="file" name="image_link_2" />
          <input type="file" name="image_link_3" />
          <input type="file" name="image_link_4" />
          <input type="file" name="image_link_5" />
        </div>
  </div>
      <div class="large-6 columns">
    <label>Reference Number: </label>
    <input type = 'text' name='reference_number'>
    <label>Address (1): </label>
    <input type = 'text' name='address_line_1'>
    <label>Address (2): </label>
    <input type = 'text' name='address_line_2'>
    <label>Address (3): </label>
    <input type = 'text' name='address_line_3'>
    <label>Postcode: </label>
    <input type = 'text' name='postcode'>
    <label>Property Features: </label>
    <textarea placeholder='' name='property_features'></textarea>
    <label>Trading Style: </label>
    <textarea placeholder='' name='trading_style'></textarea>
    <label>Accomodation Details: </label>
    <textarea placeholder='' name='accomodation'></textarea>
    <label>Agreement Type: </label>
    <select name='agreement'>
          <option value="1">Franchise</option>
          <option value="2">Lease</option>
          <option value="3">Tenancy</option>
        </select>
    <h5 style="margin:18px 0 8px;">PDF Upload:</h5>
    <div class="large-12 medium-12 columns" style="border:1px solid #CCC;padding:24px 24px 8px 24px;margin-bottom:20px;">
          <label>PDF Upload: </label>
          <input type="file" name="image_link_6" />
        </div>
    <div class="large-12 medium-12 columns" style="border:1px solid #CCC;padding:24px 24px 8px 24px;margin-bottom:200px;">
    <div class="large-4 medium-4 columns">
          <input type="submit" class="small radius button">
          </div>
             <div class="large-4 medium-4 columns">
          <a href="http://hawthornleisure.com/admin" class="small radius button" style="background:#AAA;">Cancel</a>
          </div>
          <div class="large-4 medium-4 columns panel" style="padding:12px;font-size:14px;line-height:18px;">
          User: <strong><?php echo $username; ?></strong>
          </div>
        </div>
  </div>
      </div>
    </form>
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
