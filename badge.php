<?php


include('dbcon.php');





$query="SELECT  * FROM appregister WHERE request='pending'";
$result=mysqli_query($con,$query) or die('error');
$num_rows=mysqli_num_rows($result);
echo $num_rows;
/*
$query1="SELECT  * FROM appregister WHERE request=''";
$result1=mysqli_query($con,$query1) or die('error');
$num_rows1=mysqli_num_rows($result1);

$query2="SELECT  * FROM appregister WHERE resourcetype='ambulance'";
$result2=mysqli_query($con,$query2) or die('error');
$num_rows2=mysqli_num_rows($result2);

$query3="SELECT  * FROM appregister WHERE resourcetype='firebrigade'";
$result3=mysqli_query($con,$query3) or die('error');
$num_rows3=mysqli_num_rows($result3);
*/
?>




