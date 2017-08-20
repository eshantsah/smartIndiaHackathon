<?php


include('dbcon.php');






$query2="SELECT  * FROM appregister WHERE resourcetype='Medical'";
$result2=mysqli_query($con,$query2) or die('error');
$num_rows2=mysqli_num_rows($result2);
echo $num_rows2;
/*
$query3="SELECT  * FROM appregister WHERE resourcetype='firebrigade'";
$result3=mysqli_query($con,$query3) or die('error');
$num_rows3=mysqli_num_rows($result3);
*/
?>



