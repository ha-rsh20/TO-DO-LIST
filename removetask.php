<?php
 session_start();
?>
<?php
	include 'db_connect.php';
	
	$login = $_SESSION["login"];
	
	if($login == 1)
	{
		$id = $_SESSION["check"];

		$sql = "DELETE FROM todolist WHERE id = $id";
		$result = $mysqli->query($sql);
		include 'todoremLogout.php';
	}
	else
	{
		$_SESSION["nlist"] = 0;
		include 'todorem.php';
	}
?>