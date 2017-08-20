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
	
	<style>
	iframe{
		width:100%;
	}
	</style>
<!--Bootstrap and Popover plugins-->
	 <script type="text/javascript" src="https://getbootstrap.com/2.0.4/assets/js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="https://getbootstrap.com/2.0.4/assets/js/bootstrap-tooltip.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
					Control Center
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="#">
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
						<a class="navbar-brand" href="#"><?php session_start();

   ?></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							 <a href="logout.php" class="btn btn-primary btn-round" >Logout</a> 	
						</ul>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">av_timer</i>
								</div>
								<div class="card-content">
									<p class="category">Pending Approvals</p>
									<h3 class="title"><?php include('badge.php');?> <small>Requests</small></h3>  <!-- Change Requests // FLAG-->
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons text-danger">warning</i> <a href="#pablo">Pending requests for resources</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">check</i>
								</div>
								<div class="card-content">
									<p class="category">Approved</p>
									<h3 class="title"><?php include('badge2.php');?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">date_range</i> Since Inception  <!-- FLAG -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="material-icons">airport_shuttle</i>
								</div>
								<div class="card-content">
									<p class="category">Ambulance Resources</p>
									<h3 class="title"><?php include('badge3.php');?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Total Estimate Availability
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">whatshot</i>
								</div>
								<div class="card-content">
									<p class="category">Fire Truck Availability</p>
									<h3 class="title"><?php include('badge4.php');?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Total estimate availability
									</div>
								</div>
							</div>
						</div>
					</div>

					

					<div class="row">
						<div class="col-lg-7 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="purple">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Directories:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons">import_contacts</i>
														Tarapur
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#messages" data-toggle="tab">
														<i class="material-icons">import_contacts</i>
														Madras
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#settings" data-toggle="tab">
														<i class="material-icons">import_contacts</i>
														Rajasthan
													<div class="ripple-container"></div></a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">
											 <table class="table table-hover">
	                                    <thead class="text">
	                                        <th>Sr.</th>
	                                    	<th>Category</th>
	                                    	<th>Contact  Person</th>
	                                    	<th>Details</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Police Control Centre</td>
	                                        	<td>John Doe</td>
	                                        	<td> 
						<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                        	<td>Hospital</td>
	                                        	<td>John Doe</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Fire Brigade</td>
	                                        	<td>John Doe</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Centre Chief</td>
	                                        	<td>John Doe</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
										</div>
										<div class="tab-pane" id="messages">
											 <table class="table table-hover">
	                                    <thead class="text">
	                                        <th>Sr.</th>
	                                    	<th>Category</th>
	                                    	<th>Contact  Person</th>
	                                    	<th>Details</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Police Control Centre</td>
	                                        	<td>John Doe2</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                        	<td>Hospital</td>
	                                        	<td>John Doe2</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Fire Brigade</td>
	                                        	<td>John Doe2</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Centre Chief</td>
	                                        	<td>John Doe2</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
										</div>
										<div class="tab-pane" id="settings">
											 <table class="table table-hover">
	                                    <thead class="text">
	                                        <th>Sr.</th>
	                                    	<th>Category</th>
	                                    	<th>Contact  Person</th>
	                                    	<th>Details</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Police Control Centre</td>
	                                        	<td>John Doe1</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                        	<td>Hospital</td>
	                                        	<td>John Doe1</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Fire Brigade</td>
	                                        	<td>John Doe1</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Centre Chief</td>
	                                        	<td>John Doe1</td>
	                                        	<td>
							<a class="btn btn-primary" href="#" data-toggle="popover" data-trigger="focus" data-content="Mob. No: 1111111111  Email Id: xyz@gmail.com">
					 		Click Here</a>
							</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Center Status</h4>
	                                <p class="category">For all locations pertaining to the DAE.</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
	                                        <th>Sr.</th>
	                                    	<th>Power Station</th>
	                                    	<th>Location</th>
	                                    	<th>Status</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Tarapur Atomic Power Station</td>
	                                        	<td>Tarapur, Maharashtra</td>
	                                        		                                        	
<td>
<?php 
include('dbcon.php');
$query="SELECT* FROM statusspot WHERE spot='tarapur'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$status=$row['status'];
echo $status;
?></td>

	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	
                                        	<td>Narora Power Station</td>

	                                        	<td>Narora, Uttar Pradesh</td>

<td>
<?php 
include('dbcon.php');
$query="SELECT* FROM statusspot WHERE spot='narora'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$status=$row['status'];
echo $status;
?></td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Rajasthan Atomic Center</td>
	                                        	<td>Rawatbhatta</td>
<td>
<?php 
include('dbcon.php');
$query="SELECT* FROM statusspot WHERE spot='rawatbhatta'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$status=$row['status'];
echo $status;
?></td>
	                                        
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Madras Atmoic center</td>
	                                        	<td>Kalpakkam</td>
	                                        	<td>
<?php 
include('dbcon.php');
$query="SELECT* FROM statusspot WHERE spot='kalpakkam'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$status=$row['status'];
echo $status;
?></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>
	<div class="row">
	<div class="col-lg-3 col-md-12">
	</div>
						<div class="col-lg-7 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="blue">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Wind Dir:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#tarapur" data-toggle="tab">
														<i class="material-icons">flag</i>
														Tarapur
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#madras" data-toggle="tab">
														<i class="material-icons">flag</i>
														Madras
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#rajashthan" data-toggle="tab">
														<i class="material-icons">flag</i>
														Rajasthan
													<div class="ripple-container"></div></a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="tarapur">
											<div class="embed-responsive embed-responsive-25by16">
  <iframe class="embed-responsive-item" src="wind.html"></iframe>
</div>
										</div>
										<div class="tab-pane" id="madras">
											<div class="embed-responsive embed-responsive-25by16">
  <iframe class="embed-responsive-item" src="windM.html"></iframe>
</div>
										</div>
										<div class="tab-pane" id="rajashthan">
											 <div class="embed-responsive embed-responsive-25by16">
  <iframe class="embed-responsive-item" src="windR.html"></iframe>
</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-12">
	</div>
	</div>
<!-- ADD FOOTER HERE -->

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

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
	<script type="text/javascript">
	$('#example').popover(trigger);
	</script>
	

</html>
