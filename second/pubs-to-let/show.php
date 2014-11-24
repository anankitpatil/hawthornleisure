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