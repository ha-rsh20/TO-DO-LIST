<?php
	session_start();
?>
<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	</head>
	<body>
		<?php
			$_SESSION["value"] = 0;
			$_SESSION["login"] = 0;

			include "db_connect.php";
			include "todorem.php";
 
			$mysqli->close();
		?>
	</body>
</html>