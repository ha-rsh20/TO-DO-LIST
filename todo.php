<?php
 include 'db_connect.php';

 $sql = "SELECT id, userid, list, done FROM todolist";
 $result = $mysqli->query($sql);
 
 $newlist = $_GET["newlist"];
 $z = strcmp($newlist,"");
 if($z!=0)
 {
    $sql = "INSERT INTO todolist (id, userid, list, done) 	VALUES(NULL, 1, '$newlist', 0)";
    $result = $mysqli->query($sql);
    echo "Sucessfully added!";
 }
 else
 {
     echo "Something went wrong!";
 }
 unset($sql);
 include 'getalllist.php';
?>