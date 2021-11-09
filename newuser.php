<?php
 include "db_connect.php";
 
 $sql = "SELECT user_id, user_name, user_pass FROM users";
 $result = $mysqli->query($sql);
 
 $new_username = $_POST["newusername"]; 
 $new_password = $_POST["newpassword"];
 $x = strcmp($new_username,"");
 $y = strcmp($new_password,"");
 if($x!=0 && $y!=0){
	 while($row = $result->fetch_assoc()) {
		 $k = strcmp($new_username,$row["user_name"]);
		 if($k==0)
		 {
			 break;
		 }
	 }
	 if($k==0){
		 echo"Username already taken";
	 }
	 else if($k!=0){
		 $sql = "INSERT INTO users (user_id, user_name, user_pass) 	VALUES(NULL, '$new_username', '$new_password')";
         $result = $mysqli->query($sql);
         echo "Sucessfullly Signed Up! <br> Login here";
		 include "login.html";
     }		 
 }
 else if($x==0 && $y!=0){
	echo"Invalid Username"; 
 }
 else if($y==0 && $x!=0){
	echo"Invalid Password"; 
 }
?>