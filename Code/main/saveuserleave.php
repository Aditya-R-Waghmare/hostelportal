<?php
session_start();
include('../connect.php');
$a = $_POST['sname'];
$k = $_POST['usn'];
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

$sql = "INSERT INTO sleave (sname,usn,mobile,floor,room,departuredate,arrivaldate,place,reason,file) VALUES (:a,:k,:b,:c,:d,:e,:f,:g,:h,:s)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':s'=>$file_name_new));
header("location: userleave.php");

}
?>