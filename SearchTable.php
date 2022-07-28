<<?php 
include conn.php;
function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

if (isset($_POST[BloodGP]){
    $bg=validate($_POST[BloodGP]);
}
$sql=:"select *from bloodBank where Btype=$bg";

$result=($con,$sql);

$row = mysqli_fetch_assoc($result);

$_SESSION[$bg]=$row[$bg];






 ?>