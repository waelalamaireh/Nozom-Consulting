﻿<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dashboard - admin </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-nozom-icon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once("includes/header.php"); ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include_once("includes/sidebar.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome <?php echo htmlentities(ucfirst($_SESSION['userlogin']));?>!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body" >
									<span class="dash-widget-icon" style="color:#64B9E9"><i class="fa fa-cubes"></i></span>
									<div class="dash-widget-info">
										<h3>0</h3>
										<span>Projects</span>
									</div>
								</div>
							</div>
						</div>
						<?php 
										$sql = "SELECT id from clients";
										$query = $dbh->prepare($sql);
										$query->execute();
										$results = $query->fetchAll(PDO::FETCH_OBJ);
										$totalcount = $query->rowCount();
									?>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon" style="color:#64B9E9"><i class="fa fa-users"></i></span>
									<div class="dash-widget-info">
 										<!--<h3><?php echo $totalcount; ?></h3>-->
										<h3>0</h3>
										<span>Clients</span>
									</div>
								</div>
							</div>
						</div>
						<!--<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon" style="color:#64B9E9"><i class="fa fa-diamond"></i></span>
									<div class="dash-widget-info">
										<h3>0</h3>
										<span>Tasks</span>
									</div>
								</div>
							</div>
						</div>-->
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon" style="color:#64B9E9"><i class="fa fa-user"></i></span>
									<div class="dash-widget-info">
										<h3>0</h3>
										<span>Employees</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="card-group m-b-30">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">New Employees</span>
											</div>
											<div>
												<span class="text-success">+0%</span>
											</div>
										</div>
										<h3 class="mb-3">0</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Overall Employees 0</p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Earnings</span>
											</div>
											<div>
												<span class="text-success">+0%</span>
											</div>
										</div>
										<h3 class="mb-3">$0</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$0</span></p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Expenses</span>
											</div>
											<div>
												<span class="text-success">0%</span>
											</div>
										</div>
										<h3 class="mb-3">$0</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$0</span></p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Profit</span>
											</div>
											<div>
												<span class="text-success">0%</span>
											</div>
										</div>
										<h3 class="mb-3">$0</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$0</span></p>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					
					
					<div class="row">
						<div class="col-md-12 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Recent Projects</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Project Name </th>
													<th>Progress</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<!--<h2><a href="project-view.php">Test Project</a></h2>-->
														<h2><a href="#">Test Project</a></h2>
														<small class="block text-ellipsis">
															<!-- <span>1</span> <span class="text-muted">open tasks, </span>
															<span>9</span> <span class="text-muted">tasks completed</span> -->
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar bg-info" role="progressbar" data-toggle="tooltip" title="65%" style="width: 65%"></div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<!--<a href="projects.php">View all projects</a>-->
									<a href="#">View all projects</a>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				<!-- /Page Content -->

   </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- javascript links starts here -->
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/js/chart.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		<!-- javascript links ends here  -->
    </body>
</html>