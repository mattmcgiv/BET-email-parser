<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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

//?doc=F14PS00849&agency=DOI

$url = "";

$page_source=file_get_contents($url);
?>

<div id="dom-target" style="display: none;">
    <?php 
        echo htmlspecialchars($page_source);
    ?>
</div>

<script type="text/javascript">
	var div = document.getElementById("dom-target");
	$(document).ready(function(){
		console.log($( "p:contains('237310-Highway')" ));
	});
</script>


