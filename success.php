<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		echo "<pre>";
		print_r($_POST); 
		echo "</pre>"; 
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Success</title>
	</head>
	<body>
		<h1>Success</h1>
		<a href="index.html">Back to main page</a>
		
	</body>
</html>
