<?php
 session_start();
?>
<?php
	include 'db_connect.php';

	$sql = "SELECT id, userid, list, done FROM todolist";
	$result = $mysqli->query($sql);

	$id = $_GET["done"];
	$checkid = 0;
	$result1 = 0;
	$value = $_SESSION["value"];
	$login = $_SESSION['login'];
	
	if($login==1)
	{
		while($row = $result->fetch_assoc()){
			$tid = $row["id"];
			$uid = $row["userid"];
			$list = $row["list"];
			$done = $row["done"];
			if($value == $uid && $done == 0)
			{
				$checkid++;
				if($id == $checkid)
				{
					$result1 = 1;
					break;
				}
			}
		}
		if($result1 == 1)
		{
			$sql = "UPDATE todolist SET done=1 WHERE id = $tid";
			$result = $mysqli->query($sql);
			echo '<script>alert("Task Added to Done!")</script>';
		}
		else
		{
			echo '<script>alert("Task Cannot be added!\nThis maybe due to invalid number or no task to add!")</script>';
		}
		include 'todoremLogout.php';
	}
	else
	{
		include 'todorem.php';
	}
?>