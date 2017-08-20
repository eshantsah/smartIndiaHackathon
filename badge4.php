<?php


include('dbcon.php');






$query3="SELECT  * FROM appregister WHERE resourcetype='Fire Brigade'";
$result3=mysqli_query($con,$query3) or die('error');
$num_rows3=mysqli_num_rows($result3);
echo$num_rows3;
?>

