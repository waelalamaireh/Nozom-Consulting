<?php 
	session_start();
	error_reporting(0);
	include_once('includes/config.php');
	include_once("includes/functions.php");
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}elseif (isset($_GET['delid'])) {
		$rid=intval($_GET['delid']);
	  $sql="DELETE from projects where Pro_id=:rid";
	  $query=$dbh->prepare($sql);
	  $query->bindParam(':rid',$rid,PDO::PARAM_STR);
	  $query->execute();
	   echo "<script>alert('Project Type Deleted Successfully');</script>"; 
	}
 ?>
 <!-- <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=<Document_URL>" > </iframe> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Projects - admin </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-nozom-icon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Summernote CSS -->
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">
		
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
            <?php include_once("includes/header.php");?>
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
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Projects</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Projects</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_project"><i class="fa fa-plus"></i> Add Project</a>
								<div class="view-icons">
									<a href="projects.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<!-- <a href="project-list.php" class="list-view btn btn-link"><i class="fa fa-bars"></i></a> -->
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<!-- <div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Project Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Select Roll</option>
									<option>Web Developer</option>
									<option>Web Designer</option>
									<option>Android Developer</option>
									<option>Ios Developer</option>
								</select>
								<label class="focus-label">Designation</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div> -->
					<!-- Search Filter -->



					<div class="row">
					<?php
										$sql = "SELECT * FROM projects";
										$query = $dbh->prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $row)
										{
									?>
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a> -->
											<a class="dropdown-item" href="#?id=5" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
									<div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
									            <h4 class="project-title" style="width:210px; height:30px;"><a href="project-view.php?Pro_id=<?php echo htmlentities($row->Pro_id); ?>" class="" style=""> <?php echo htmlentities($row->Pro_Name); ?> </a></h4>
									        </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group" style="text-align:right;margin-right:10px;">
									            <h4 class="project-title"><span style="color:white;padding:3px 8px 3px 8px;border-radius:10px;font-size:15px;font-weight:normal; background-color:gray;" class="col-sm-4"><?php echo $row->Pro_type; ?></span></h4>
									        </div>
                                        </div>
                                    </div>
									<!--<small class="block text-ellipsis m-b-15">
										<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
									</small>-->
									<p class="text-muted">
									<?php //echo htmlentities($row->Pro_desc); ?>
									</p>
									<div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Priority
                                                </label>
                                                <?php if($row->Pro_priority == "High"){?>
                                                    <div class="bg-danger" style="color:white;padding:3px 8px 3px 8px;border-radius:10px;"> <?php echo htmlentities($row->Pro_priority); ?> </div>
                                                <?php }elseif($row->Pro_priority == "Medium"){?>
                                                    <div class="bg-warning" style="color:white;padding:3px 8px 3px 8px;border-radius:10px;"> <?php echo htmlentities($row->Pro_priority); ?> </div>
                                                <?php }else{?>
                                                    <div class="bg-success" style="color:white;padding:3px 8px 3px 8px;border-radius:10px;"> <?php echo htmlentities($row->Pro_priority); ?> </div>
                                                 <?php }?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Status
                                                </label>
                                                <?php if($row->Pro_status == "In progress"){?>
                                                    <div class="bg-info" style="color:white;padding:3px 8px 3px 8px;border-radius:10px;"> <?php echo htmlentities($row->Pro_status); ?></div>
                                                <?php }else{?>
                                                     <div class="bg-success" style="color:white;padding:3px 8px 3px 8px;border-radius:10px;"> <?php echo htmlentities($row->Pro_status); ?></div>
                                                <?php }?>
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Deadline
                                                </label>
                                                <div class="text-muted"> <?php echo htmlentities($row->Pro_end); ?> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Duration
                                                </label>
                                                <div class="text-muted"> <?php echo htmlentities($row->Pro_duration); ?> Month</div>
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-sm-6">
											<div class="project-members m-b-15">
												<div>Project Manager</div>
												<ul class="team-members">
													<li>
														<a href="#Profile" data-toggle="tooltip" title="Wael Alamaireh"><img alt="" src="assets/img/profiles/wael.jpg"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="project-members m-b-15">
												<div>Client</div>
												<ul class="team-members">
													<li>
														<a href="#Profile" data-toggle="tooltip" title="Wael Alamaireh"><img alt="" src="assets/img/profiles/wael.jpg"></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="Wael Alamaireh"><img alt="" src="assets/img/profiles/wael.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Wael Alamaireh"><img alt="" src="assets/img/profiles/wael.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Wael Alamaireh"><img alt="" src="assets/img/profiles/wael.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Wael Alamaireh"><img alt="" src="assets/img/profiles/wael.jpg"></a>
											</li>
											

											<!-- <li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li> -->
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
						</div>

							<?php $cnt +=1;
    }
    }
     ?>
					</div>

                </div>
				<!-- /Page Content -->
				
				<!-- Create Project Modal -->
				<?php include_once("includes/modals/projects/add.php");?>
				<!-- /Create Project Modal -->
				
				<!-- Edit Project Modal -->
				<?php include_once("includes/modals/projects/edit.php"); ?>
				<!-- /Edit Project Modal -->
				
				<!-- Delete Project Modal -->
				<?php include_once("includes/modals/projects/delete.php"); ?>
				<!-- /Delete Project Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Summernote JS -->
		<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
    </body></html>