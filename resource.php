<!doctype html>
<?php session_start();?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>DAE Crisis Management :: Crisis Crossm</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

<style type="text/css">

table{
width:100%;
border-collapse:collapse;
box-shadow:5px 5px 5px gray;
border-radius:5px;
}

th, td {
padding: 8px;
text-align:left;
border-bottom: 1px solid #ddd;
}

th{
background: -webkit-linear-gradient(left, #a945bb ,#8e25aa ); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(right, #a945bb ,#8e25aa); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(right,#a945bb ,#8e25aa); /* For Firefox 3.6 to 15 */
background: linear-gradient(to right,#a945bb ,#8e25aa ); /* Standard syntax (must be last) */
color:white;
}

tr:hover{
background-color:lightgray;
}

</style>
</head>


<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="dashboard.php" class="simple-text">
					Control Centre
				</a>
			</div>

	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li>
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="#">
	                        <i class="material-icons">data_usage</i>
	                        <p>Resource Allocation</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="history.php">
	                        <i class="material-icons">history</i>
	                        <p>History</p>
	                    </a>
	                </li>
	               
	               
	                <li>
	                    <a href="maps2.html">
	                        <i class="material-icons">location_on</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="../examples/index.php">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
					
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Resource Allocation</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<a href="logout.php" class="btn btn-primary btn-round" input >Logout</a>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Allocate Resources </h4>
	                                <p class="category">Select appropriate parameters for the crisis.</p>
	                            </div>
	                            <div class="card-content">

		                           <form method="post">
										<input type="hidden" name="submitted" value="true" />
										<div class="row">

											<div class="col-md-12">
												 <label><h5>Crisis Level:</h5><label>
												 <select class="form-control" name="levels">
														<option value="select">SELECT</option>
														<option value="Level1">Level 1</option>
														<option value="Level2">Level 2</option>
														<option value="Level3">Level 3</option>
												 </select>
												 <br><br>
											</div>
											<div class="col-md-3">
												<label><h5>Resource type:</h5></label><br>
												<input type="checkbox" value="Medical" name="1" >Medical</input><br>
												<input type="checkbox" value="Lawn Enforcement" name="1">Law Enforcement</input><br>
												<input type="checkbox" value="Fire Brigade" name="1">fire brigade</input><br>
												<input type="checkbox" value="Chemical Assets" name="1">Chemical Assets</input>
											</div>

												<div class="col-md-2">
												 <label><h5>Crisis Scale</h5><label>
												 <select class="form-control" name="scale">
														<option value="select">select</option>
														<option value="Plant Level">Plant Level</option>
														<option value="Site Level">Site Level</option>
														<option value="Offsite Level">Offsite Level</option>
												 </select>
											</div>

											<div class="col-md-2">
												 <label><h5>status:</h5><label>
												 <select class="form-control" name="status">
														<option value="select">Select</option>
														<option value="Available">Available</option>
														<option value="Not Available">Not Available</option>
														<option value="Busy">Busy</option>
												 </select>
											</div>

											<div class="col-md-2">
												 <label><h5>city:</h5></label>
												 <input class="form-control" type="text" name="city" ></div>

											<div class="col-md-2">
								 				 <label> <h5>crisis spot:</h5></label>
												 <select class="form-control" name="spot">
												 		 <option value="select">select</option>
												 		 <option value="Tarapur">TARAPUR</option>
												 		 <option value="Isro">ISRO</option>
												 </select>
											</div>
										
											<div class="submit_button">
											
												<br><br>
												<input type="submit" class="btn btn-primary btn-round"  />
														</div>
													</div>
											
	                    					</form>



<?php




if(isset($_POST['submitted'])){

include('dbcon.php');
$levels=$_POST['levels'];


if($levels=="Level1")
{
$query="SELECT  * FROM appregister INNER JOIN location ON appregister.email=location.email 
		WHERE status='Available'AND city='mumbai'  AND request='' 
		  OR
		resourcetype='Medical' OR 
		resourcetype='fire brigade' LIMIT 4";
$result=mysqli_query($con,$query) or die('error');


}

else if($levels=="Level2")
{
$query="SELECT  * FROM appregister INNER JOIN location ON appregister.email=location.email 
		WHERE status='Available'AND city='mumbai'  AND request='' 
		  OR
		resourcetype='Medical' OR 
		resourcetype='fire brigade' LIMIT 8";
$result=mysqli_query($con,$query) or die('error');

  

}


else if($levels=="Level3")
{
$query="SELECT  * FROM appregister INNER JOIN location ON appregister.email=location.email 
		WHERE status='Available'AND city='mumbai'  AND request='' 
		  OR
		resourcetype='Medical' OR 
		resourcetype='fire brigade' LIMIT 8";
$result=mysqli_query($con,$query) or die('error');

  

}






else{


$medical=$_POST['1'];

$lawenforcement=$_POST['1'];

$firebrigade=$_POST['1'];
$chemicalassets=$_POST['1'];



$status=$_POST['status'];
$city=$_POST['city'];
$spot=$_POST['spot'];
$scale=$_POST['scale'];

$_SESSION['uscale']=$scale;
$_SESSION['uspot']=$spot;
if($spot=="tarapur")
{
$lat=19.8649;
$long=72.6850;
}
$query="SELECT  * FROM appregister INNER JOIN location ON appregister.email=location.email 
		WHERE status='$status'AND city='$city'  AND request='' 
		  OR
		resourcetype='$medical'OR resourcetype='$lawenforcement' OR 
		resourcetype='$firebrigade'OR resourcetype='$chemicalassets'";
$result=mysqli_query($con,$query) or die('error');

  
}


$num_rows=mysqli_num_rows($result);
echo"<br>";
echo "<h3><center><b>".$num_rows . "rows found"."</h3></center><b>";
echo"<br>";
echo"<table>";
echo"<tr>  <th>Name</th> <th>Email</th> <th>mobile no</th><th> Resource Type</th>  <</tr>";



while ($row = mysqli_fetch_assoc($result))
  
{
echo"<tr><td>";
echo $row['name'];
echo"</td><td>";

echo $row['email'];
echo"</td><td>";

echo $row['mobileno'];
echo"</td><td>";

echo $row['resourcetype'];
echo"</td></td></tr>";







}
echo"</table>";
$lat=0;
$long=0;
?>

<html>
<body>
<form method="post">
<br><br>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8"><center><input type=
"submit" name="submit2"value="notify" class="btn btn-primary btn-round" class="button"></center></div>
<div class="col-md-2"></div>
</div>
</form>
<?php





}
?>

</body>
</html>

<?php

$admin=$_SESSION['uname'];

if(isset($_POST['submit2'])){
include('dbcon.php');
$spot1=$_SESSION['uspot'];
$scale1=$_SESSION['uscale'];
if($scale1=="Offsite Level")
{
	echo"done";
}

date_default_timezone_set('Asia/Kolkata');

$date= date("Y-m-d");


$query2="UPDATE `statusspot` SET `status`='unsafe' ".<i class="material-icons">warning</i>."
' WHERE spot='$spot1'";
$result2=mysqli_query($con,$query2) or die('error');

 echo$admin;
$query3="INSERT INTO `history`( `adminname`, `atomiccenter`, `timestamp`) VALUES ('$admin','$spot1','$date')";

$result3=mysqli_query($con,$query3) or die('error');


}
?>
	                            
	                </div>
	            </div>
	        </div>		
	    </div>
	</div>



</body>
<script>
function myFunction() {
    confirm("Press a button!");
}
</script>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
