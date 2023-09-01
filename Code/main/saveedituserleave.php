<?php

include('../connect.php');


$id = $_POST['usn'];
$a = $_POST['sname'];
$b = $_POST['mobile'];
$c = $_POST['floor'];
$d = $_POST['room'];
$e = $_POST['departuredate'];
$f = $_POST['arrivaldate'];
$g = $_POST['place'];
$h = $_POST['reason'];
$s = $_POST['file'];


$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;

if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

$sql = "UPDATE sleave 
        SET sname=?,mobile=?,floor=?,room=?,departuredate=?,arrivaldate=?,place=?,reason=?,file=?
		WHERE usn=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$s,$id));
header("location: userleave.php");

}
?>