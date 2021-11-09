<?php
 session_start();
?>
<html>
    <head>
        <style>
        </style>
    </head>
    <body>
        <?php
			include 'db_connect.php';

			$sql = "SELECT id, userid, list, done FROM todolist";
			$result = $mysqli->query($sql);
			$value =  $_SESSION["value"];
			$equal = 0;
			$login = $_SESSION["login"];
			
			$newlist = $_GET["newlist"];
			$z = strcmp($newlist,"");
			if($login == 1)
			{
				while($row = $result->fetch_assoc()){
					$i = strcmp($newlist,$row["list"]);
					$j = strcmp($value,$row["userid"]);
					if($i==0 && $j==0){
						$equal=1;
						break;
					}
					else if($i!=0 && $j==0){
						$equal=0;
					}
					else{
						$equal=2;
					}
				}
				if($equal==1 && $z!=0){
					echo '<script>alert("Exist already! Do not need to add.")</script>';
				}
				else if($equal!=1 && $z!=0){
					if($_SESSION["login"]!=1)
					{
						$value = 1;
					}
					$sql = "INSERT INTO todolist (id, userid, list, done) 	VALUES(NULL, '$value', '$newlist', 0)";
					$result = $mysqli->query($sql);
					echo '<script>alert("New task added successfully!")</script>';
				}
				else if($z==0){
					echo '<script>alert("Empty task!")</script>';
				}
				include 'todoremLogout.php';
			}
			else
			{
				$_SESSION["nlist"] = $newlist;
				include 'todorem.php';
			}
		?>
        
	</body>
</html>