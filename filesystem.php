<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
 if($_GET['Pro_id']){
	$Pro_id = $_GET['Pro_id'];
	$sql = "SELECT * FROM projects where Pro_id = '$Pro_id'";
	$query = $dbh->prepare($sql);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	if($query->rowCount() > 0)
	{
	foreach($results as $row)
	{
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
        <title>Project files - admin </title>
		
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
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
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
                            <h3 class="page-title"><?php echo $row->Pro_Name; ?></h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="projects.php">Project</a></li>
                                <li class="breadcrumb-item active"><a href="project-view.php?Pro_id=<?= $row->Pro_id;?>"><?php echo $row->Pro_Name; ?></a></li>
                                <li class="breadcrumb-item active"><?php echo $row->Pro_Name; ?> files</li>
                            </ul>
                        </div>
                        <!-- <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#edit_project"><i class="fa fa-plus"></i> Edit Project</a>
                            <a href="task-board.php" class="btn btn-white float-right m-r-10" data-toggle="tooltip" title="Task Board"><i class="fa fa-bars"></i></a>
                        </div> -->
                    </div>
                </div>
                <!-- /Page Header -->
<div class="">
    <div align="right">
    <button type="button" name="create_folder" id="create_folder" class="btn btn-success">Create</button>
    </div>
    <br />
    <div class="table-responsive" id="folder_table">
    </div>
    </div>
    </body>
    </html>
    <?php
    if(isset($_POST['addfoldernew'])){
        if($_GET['ProName']){
            $ProName = $_GET['ProName'];
            $Pro_id = $_GET['Pro_id'];
            $folder_name = $_POST['folder_name'];
            $path = "Files Managment/" . $ProName . "/" . $folder_name;
            mkdir($path, 0777, true);
            echo "<script>window.location.href='filesystem.php?Pro_id=".$Pro_id."';</script>";
        }
    }
    
    ?>

    <div id="folderModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><span id="change_title">Create Folder</span></h4>
    </div>
    <div class="modal-body">
        <form action="filesystem.php?ProName=<?= $row->Pro_Name; ?>&Pro_id=<?= $Pro_id; ?>" method="post">
    <lable for="folder_name">Enter Folder Name</lable>
    <input type="text" name="folder_name" id="folder_name" class="form-control" />
    <br />
    <input type="submit" name="addfoldernew" class="btn btn-info" value="Create" />
    </form>
    <!-- <input type="hidden" name="action" id="action" />
    <input type="hidden" name="old_name" id="old_name" />
    <input type="button" name="folder_button" id="folder_button" class="btn btn-info" value="Create" /> -->

    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
    <div id="uploadModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Upload File</h4>
    </div>
    <div class="modal-body">
    <form method="post" id="upload_form" enctype='multipart/form-data'>
    <p>Select Image
    <input type="file" name="upload_file" /></p>
    <br />
    <input type="hidden" name="hidden_folder_name" id="hidden_folder_name" />
    <input type="submit" name="upload_button" class="btn btn-info" value="Upload" />
    </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>

    <div id="filelistModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <!-- <h4 class="modal-title">File List</h4> -->
    </div>
    <div class="modal-body" id="file_list">

    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
</div>

<script>
$(document).ready(function(){
 
 load_folder_list();
 
 function load_folder_list()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php?ProName=<?= $row->Pro_Name; ?>",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#folder_table').html(data);
   }
  });
 }
 

 $(document).on('click', '#create_folder', function(){
  $('#action').val("create");
  $('#folder_name').val('');
  $('#folder_button').val('Create');
  $('#folderModal').modal('show');
  $('#old_name').val('');
  $('#change_title').text("Create Folder");
 });
 


 $(document).on('click', '#folder_button', function(){
  var folder_name = $('#folder_name').val();
  var old_name = $('#old_name').val();
  var action = $('#action').val();
  if(folder_name != '')
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{folder_name:folder_name, old_name:old_name, action:action},
    success:function(data)
    {
     $('#folderModal').modal('hide');
     load_folder_list();
    //  alert(data);
    }
   });
  }
  else
  {
   alert("Enter Folder Name");
  }
 });


 
 $(document).on("click", ".update", function(){
  var folder_name = $(this).data("name");
  $('#old_name').val(folder_name);
  $('#folder_name').val(folder_name);
  $('#action').val("change");
  $('#folderModal').modal("show");
  $('#folder_button').val('Update');
  $('#change_title').text("Change Folder Name");
 });
 



 $(document).on("click", ".delete", function(){
  var folder_name = $(this).data("name");
  var action = "delete";
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{folder_name:folder_name, action:action},
    success:function(data)
    {
     load_folder_list();
    //  alert(data);
    }
   });
  }
 });


 
 $(document).on('click', '.upload', function(){
  var folder_name = $(this).data("name");
  $('#hidden_folder_name').val(folder_name);
  $('#uploadModal').modal('show');
 });
 
 $('#upload_form').on('submit', function(){
  $.ajax({
   url:"upload.php",
   method:"POST",
   data: new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   success: function(data)
   { 
    load_folder_list();
    // alert(data);
   }
  });
 });
 


 $(document).on('click', '.view_files', function(){
  var folder_name = $(this).data("name");
  var action = "fetch_files";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action, folder_name:folder_name},
   success:function(data)
   {
    $('#file_list').html(data);
    $('#filelistModal').modal('show');
   }
  });
 });
 
 $(document).on('click', '.remove_file', function(){
  var path = $(this).attr("id");
  var action = "remove_file";
  if(confirm("Are you sure you want to remove this file?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{path:path, action:action},
    success:function(data)
    {
    //  alert(data);
     $('#filelistModal').modal('hide');
     load_folder_list();
    }
   });
  }
 });

$(document).on('blur', '.change_file_name', function(){
  var folder_name = $(this).data("folder_name");
  var old_file_name = $(this).data("file_name");
  var new_file_name = $(this).text();
  var action = "change_file_name";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{folder_name:folder_name, old_file_name:old_file_name, new_file_name:new_file_name, action:action},
   success:function(data)
   {
    // alert(data);
   }
  });
 });
 
});
</script>
</div>
</div>
</div>

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
		
		<!-- Task JS -->
		<script src="assets/js/task.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
</body>
<?php
    }
}
 }

?>