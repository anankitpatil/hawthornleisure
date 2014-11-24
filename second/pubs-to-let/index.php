<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Hawthorn Leisure | Pubs to Let</title>
<?php include("../header.php"); ?>
<div class="container" id="fullpage">
  <section class="one">
    <div class="wrapper"> </div>
      <div class="slide-container">
        <figure><img src="http://hawthornleisure.com/second/img/let-1.jpg" style="width:100%;" /></figure>
        <figure><img src="http://hawthornleisure.com/second/img/let-2.jpg" /></figure>
        <figure><img src="http://hawthornleisure.com/second/img/let-3.jpg" /></figure>
        <div class="content">
          <h2>Welcome to Hawthorn Leisure</h2>
          <div class="line"></div>
          <p>Welcome to a new world of hospitality. Where innovation meets experience. We are endeavouring to create something new and unique within the industry.</p>
          <a href="#" onClick="$.fn.fullpage.moveSectionDown();" class="scroll-down smooth"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" xml:space="preserve"><polyline fill="none" class="smooth" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="2.9,23.9 30,44 56.5,23.9 "/></svg></a>
        </div><div class="content">
          <h2>A wide variety of pubs across the UK</h2>
          <div class="line"></div>
          <p>A pub company that supports their partners individually to develop the best offer for their pub.</p>
          <a href="#" onClick="$.fn.fullpage.moveSectionDown();" class="scroll-down smooth"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" xml:space="preserve"><polyline fill="none" class="smooth" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="2.9,23.9 30,44 56.5,23.9 "/></svg></a>
        </div><div class="content">
          <h2>Join us for great business opportunities</h2>
          <div class="line"></div>
          <p>Be part of the evolution with our unique operating models. We will be with you every step of the way.</p>
          <a href="#" onClick="$.fn.fullpage.moveSectionDown();" class="scroll-down smooth"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" xml:space="preserve"><polyline fill="none" class="smooth" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="2.9,23.9 30,44 56.5,23.9 "/></svg></a>
        </div>
      </div>
    <div class="slide-toggle">
      <ul>
        <li><i class="fa fa-circle-o"></i></li>
        <li><i class="fa fa-circle"></i></li>
        <li><i class="fa fa-circle"></i></li>
      </ul>
    </div>
  </section>
  <section class="two">
    <div class="map-container"><div class="map" id="gmap_canvas"></div></div>
    <div class="side">
      <a href="#" class="side-toggle smooth"><i class="fa fa-angle-right fa-3x smooth"></i></a><div class="search-content">
      	  <p>Explore the map to find a Pub in the area of your choice.</p>
          <p>If you know the <b>name</b> or the <b>address</b> of the Pub you're looking for, you can also search for it below.</p>
          <input type="text" id="search" class="mapsearch" autocomplete="off">
          <a href="#" class="clear smooth"><i class="fa fa-times-circle fa-lg"></i></a>
          <h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
          <ul id="results"></ul>
          <p style="font-size: 12px;font-style:italic">Search by <b>street name</b>, <b>post code</b> or <b>county</b>.</p>
      </div>
    </div>
      <?php
		$connection = mysql_connect('hawthorndatabase.db.11710107.hostedresource.com', 'hawthorndatabase', 'Va6748g2ko@');
		mysql_select_db('hawthorndatabase', $connection);
			
		$data = mysql_query('SELECT * FROM pubs') or die(mysql_error());
		while($pubs = mysql_fetch_array($data)) {
			echo '<div id="address" style="display:none">';
			echo $pubs['address_line_1'] . ', ';  
			echo $pubs['address_line_2'] . ', '; 
			if($pubs['address_line_3']) echo $pubs['address_line_3'] . ', '; 
			echo $pubs['postcode']; 
			echo '</div>';
			echo '<div id="image" style="display:none" num="' . $pubs['id'] . '">' . $pubs['image_link_1'] . '</div>';
			echo '<div id="name" style="display:none">' . $pubs['name'] . '</div>';
			echo '<div id="ref" style="display:none">' . $pubs['reference_number'] . '</div>';
			echo '<div id="desc" style="display:none">' . $pubs['description'] . '</div>';
	    } ?>
        <div class="orange-bar">&copy; Hawthorn Leisure, Westbury Office, Angel Mill, Edward Street, Westbury, Wiltshire, <b>BA13 3DR</b></div>
  </section>
</div>
</body>
</html>