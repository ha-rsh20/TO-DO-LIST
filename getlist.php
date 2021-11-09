<html>
	<head>
		<style>
        </style>
	<head>
	<body>
		<?php

			include 'db_connect.php';

			$sql = "SELECT id, userid, list, done FROM todolist";
			$result = $mysqli->query($sql);
			$value = $_SESSION["value"];
			$check = 1;
			$login = $_SESSION['login'];
			$nlist = $_SESSION['nlist'];
			
			if($login == 1)
			{
				if ($result->num_rows > 0){
					$i = 1;
					while($row = $result->fetch_assoc()){
						$tid = $row["id"];
						$uid = $row["userid"];
						$list = $row["list"];
						$done = $row["done"];
						if($value == $uid && $done == 0)
						{
							echo "<br><b>(".$i.") ".$list."</b>";
							$check = $tid;
							$i++;
						}
					} 
				}				
				else {
					echo "0 results";
				}
				$_SESSION["check"] = $check;
			}
			else{
				echo "<br><b>(1) ".$nlist."</b>";
			}
		?>
	</body>
</html>