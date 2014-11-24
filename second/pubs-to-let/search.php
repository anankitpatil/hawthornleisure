<?php
/************************************************
	The Search PHP File
************************************************/


/************************************************
	MySQL Connect
************************************************/

// Credentials
$dbhost = "hawthorndatabase.db.11710107.hostedresource.com";
$dbname = "hawthorndatabase";
$dbuser = "hawthorndatabase";
$dbpass = "Va6748g2ko@";

//	Connection
global $tutorial_db;

$tutorial_db = new mysqli();
$tutorial_db->connect($dbhost, $dbuser, $dbpass, $dbname);
$tutorial_db->set_charset("utf8");

//	Check Connection
if ($tutorial_db->connect_errno) {
    printf("Connect failed: %s\n", $tutorial_db->connect_error);
    exit();
}

/************************************************
	Search Functionality
************************************************/

// Define Output HTML Formating
$html = '';
$html .= '<li class="result">';
$html .= '<a href="#" class="indexOfThis">';
$html .= '<figure><img src="../../admin/uploads/imageString" /></figure>';
$html .= '<div class="disp">';
$html .= '<h3>nameString</h3>';
$html .= '<p>addressString</p>';
$html .= '<h4>postString</h4>';
$html .= '</div>';
$html .= '</a>';
$html .= '</li>';

// Get Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
$search_string = $tutorial_db->real_escape_string($search_string);

// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	// Build Query
	$query = 'SELECT * FROM pubs WHERE name LIKE "%'.$search_string.'%" OR reference_number LIKE "%'.$search_string.'%" OR address_line_1 LIKE "%'.$search_string.'%" OR address_line_2 LIKE "%'.$search_string.'%" OR address_line_3 LIKE "%'.$search_string.'%" OR postcode LIKE "%'.$search_string.'%"';

	// Do Search
	$result = $tutorial_db->query($query);
	while($results = $result->fetch_array()) {
		$result_array[] = $results;
	}

	// Check If We Have Results
	if (isset($result_array)) {
		$c = 0;
		foreach ($result_array as $result) {

			// Format Output Strings And Hightlight Matches
			$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['name']);			
			$display_address = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['address_line_1'] . ', <br />' . $result['address_line_2'] . ', <br />' . $result['address_line_3']);
			$display_post = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['postcode']);
			$display_image = $result['image_link_1'];

			$output = str_replace('nameString', $display_name, $html);
			$output = str_replace('addressString', $display_address, $output);
			$output = str_replace('postString', $display_post, $output);
			$output = str_replace('imageString', $display_image, $output);
			$output = str_replace('indexOfThis', $result['id'], $output);
			
			$c++;

			// Output
			echo($output);
		}
	}else{

		// Format No Results Output
		$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
		$output = str_replace('addressString', '', $output);
		$output = str_replace('postString', 'Sorry :(', $output);

		// Output
		echo($output);
	}
}


/*
// Build Function List (Insert All Functions Into DB - From PHP)

// Compile Functions Array
$functions = get_defined_functions();
$functions = $functions['internal'];

// Loop, Format and Insert
foreach ($functions as $function) {
	$function_name = str_replace("_", " ", $function);
	$function_name = ucwords($function_name);

	$query = '';
	$query = 'INSERT INTO search SET id = "", function = "'.$function.'", name = "'.$function_name.'"';

	$tutorial_db->query($query);
}
*/
?>