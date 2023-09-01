<?php
session_start();
include('../connect.php');
$a = $_POST['sname'];
$k = $_POST['usn'];
$e = $_POST['bfast'];
$id = date('dmY') . $k;

$result = $db->prepare("SELECT * FROM breakfast where orderid=$id");
$result->execute();

if ($result->fetch()) {
    echo "<script>alert('Your order already exists ! Order id : $id');
    window.location.href='usermess.php'</script>";
    // header("location: usermess.php");
} else {
    $sql = "INSERT INTO breakfast (sname,usn,orderid,bfast) VALUES (:a,:k,:i,:e)";
    $q = $db->prepare($sql);
    $q->execute(array(':a' => $a, ':k' => $k, ':i' => $id, ':e' => $e));
    echo "<script>alert('Breakfast ordered successfully..! Order id : $id');
    window.location.href='usermess.php'</script>";
    // header("location: usermess.php");

}

?>