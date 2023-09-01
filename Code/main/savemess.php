<?php
session_start();
include('../connect.php');
$a = $_POST['day'];
$b = $_POST['lunch'];
$d= $_POST['dinner'];



$sql = "INSERT INTO mess (day,lunch,dinner) VALUES (:a,:b,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':d'=>$d));
header("location: mess.php");

	
?>