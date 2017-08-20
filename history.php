<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>DAE Crisis Management :: Crisis Cross</title>

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
background-color:lightgray;}
center{
color:purple;

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
	                <li>
	                    <a href="resource.php">
	                        <i class="material-icons">data_usage</i>
	                        <p>Resource Allocation</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="#">
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
						<a class="navbar-brand" href="#">History</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							 <a href="logout.php" class="btn btn-primary btn-round" input >Logout</a>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Crisis History</h4>
	                                <p class="category">View History Of Past Crisis'</p>
	                            </div>
	                            <div class="card-content table-responsive">



<?php


include('dbcon.php');



$query="SELECT  * FROM history";
$result=mysqli_query($con,$query) or die('error');





$num_rows=mysqli_num_rows($result);
echo"<br>";
echo "<h3><center><b>".$num_rows . " Entries Found"."</h3></center><b>";
echo"<br>";
echo"<table>";
echo"<tr>  <th>ID</th> <th>Admin name</th><th>Atomic Center</th> <th>Date of Entry</th><th>Description</th>  </tr>";



while ($row = mysqli_fetch_assoc($result))
  
{
echo"<tr><td>";
echo $row['id'];
echo"</td><td>";

echo $row['adminname'];
echo"</td><td>";


echo $row['atomiccenter'];
echo"</td><td>";

echo $row['timestamp'];
echo"</td><td>";




echo $row['description'];
echo"</td></td></tr>";



}
echo"</table>";
$lat=0;
$long=0;
?>
    
	                </div>
	            </div>
	        </div>
	    </div> 
	</div>

</body>

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
