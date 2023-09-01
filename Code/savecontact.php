<?php
session_start();
include('connect.php');
$k = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['message'];

$sql = "INSERT INTO contact (Name,Email,Message) VALUES (:k,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':k'=>$k,':b'=>$b,':c'=>$c));

echo "<script>alert('Thank you for filling this form. We will get back to you as soon as possible...!');
    window.location.href='contact.php'</script>";

	
?>