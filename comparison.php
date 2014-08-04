<?php
	$locations = array (
		0 => "New York",
		1 => "NY",
		2 => "Pennsylvania",
		3 => "PA",
		4 => "Rhode Island",
		5 => "RI",
		6 => "Maryland",
		7 => "MD",
		8 => "Virginia",
		9 => "VA",
		10 => "District of Columbia",
		11 => "Washington",
		12 => "D.C.",
		13 => "DC",
		14 => "D.C",
		15 => "West Virginia",
		16 => "WV",
		17 => "Delaware",
		18 => "DE",
		19 => "New Jersey",
		20 => "NJ",
		21 => "Y1NA"
	);

//Get all notifications
//For each notifcation
	//For each key in $locations
	//Look for matching value
	//If match, add this notification's URL and matched value (e.g. "D.C." to stack
	//If no match, continue
//If there are matches,
	//email URL, matched values as a list to matt@antym.com

//?doc=F14PS00849&agency=DOI

$url = "https://www.fedconnect.net/fedconnect/?doc=F14PS00849&agency=DOI";

$page_source=file_get_contents($url);

//For each key in $locations
$count = 0;

foreach ($locations as $location) {
	if (strpos($page_source, $location)) {
	    echo "Found " . $location . " in " . $url . ". <br>";
	    $count++;
	    echo "Count is: " . $count . ". <br>";
	}
	else {
		echo "Not found. <br>";
	}
}
?>


