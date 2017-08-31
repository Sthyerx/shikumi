<?php
	include 'concept\\config.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<a class="linkbox" href="/dashboard/"> To Dashboard </a>
	<a class="linkbox" href="/concept/"> To Concept Page </a>
	<h1> News </h1>
	<p> No news :( </p>
	
	<div class="animatedBlock">Lorem</div>
	<div class="outerBox"><div class="innerBox"></div></div>
	
	<?php
			
		if($db->connect_error) {
			die("Connect failed: " . $db->connect_error);
		}
		
		echo "Connected successfully";
	?>
</body>


