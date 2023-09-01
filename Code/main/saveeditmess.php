<?php

include('../connect.php');


$id = $_POST['day'];
$h = $_POST['lunch'];
$b = $_POST['dinner'];

$sql = "UPDATE mess 
        SET lunch=?,dinner=?
		WHERE day=?";
$q = $db->prepare($sql);
$q->execute(array($h,$b,$id));
header("location: mess.php");

?>