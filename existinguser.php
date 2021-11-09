<?php
 session_start();
?>
<?php
 include "db_connect.php";

 $sql = "SELECT user_id, user_name, user_pass FROM users";
 $result = $mysqli->query($sql);

 $username = $_POST['username'];
 $password = $_POST['password'];
 $pass = 0;
 $name = 0;
 
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    //echo "User id: " . $row["user_id"]. ", Username: " . $row["user_name"]. ",User Password: " . $row["user_pass"]. "<br>";
	$i = strcmp($username,$row["user_name"]);
	$j = strcmp($password,$row["user_pass"]);
	if($i==0 && $j==0){
		$name=1;
		$pass=1;
		$k = $row["user_id"];
		break;
	}
	else if($i==0 && $j!=0){
		$pass=0;
	    $name=1;
	}
  }
  if($pass==1 && $name==1)
  {
	include "todoremLogout.php";
  }
  else if($pass==0 && $name!=0){
      echo "Password incorrect!";
  }
  else {
	  echo "Username or Password incorrect!";
  }  
 } else {
   echo "0 results";
 }
 $_SESSION["value"] = $k;
 $_SESSION["login"] = 1;
?>