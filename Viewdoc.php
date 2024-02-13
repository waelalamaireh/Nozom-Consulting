<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
 if($_GET['Path']){
	$Path = $_GET['Path'];
// 	$sql = "SELECT * FROM projects where Pro_id = '$Pro_id'";
// 	$query = $dbh->prepare($sql);
// 	$query->execute();
// 	$results=$query->fetchAll(PDO::FETCH_OBJ);
// 	if($query->rowCount() > 0)
// 	{
// 	foreach($results as $row)
// 	{
 ?>

<!DOCTYPE html>
<html lang="ar">
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
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
                <iframe src="https://docs.google.com/gview?url=http://ieee802.org/secmail/docIZSEwEqHFr.doc&embedded=true" frameborder="0">
</iframe>
                <!-- <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=https://www.codexworld.com/files/55.docx' width='100%' height='650px' frameborder='0'></iframe> -->
                <?php

// require_once 'vendor/autoload.php';

// use PhpOffice/PhpWord/src/PhpWrd/IOFactory;
// use PhpOffice\PhpWord\src\PhpWrd\Settings;

// // Path to the .docx file
// $docFile = '55.docx';

// // Read the .docx file
// $phpWord = IOFactory::load($docFile);

// // Convert the .docx content to HTML
// $phpWordWriter = IOFactory::createWriter($phpWord, 'HTML');

// // Capture the HTML output
// ob_start();
// $phpWordWriter->save('php://output');
// $htmlOutput = ob_get_contents();
// ob_end_clean();

// // Display the HTML content
// echo $htmlOutput;
?>

                <!-- <div id="word-content">جاري تحميل المحتوى...</div> -->

                <script>
                    // fetch('55.docx')
                    //     .then(response => response.text())
                    //     .then(text => {
                    //         document.getElementById('word-content').innerHTML = text;
                    //     });
                </script>


                <?php
                // require 'AutoLoad.php';
                // spl_autoload_register( 'AutoLoad::run' );
                // AutoLoad::setPath( array( '55.docx', 'to', 'files' ) );
                // AutoLoad::setExtension( 'class.php' );
                // $source = "55.docx";
                // $phpWord = \PhpOffice\PhpWord\IOFactory::load($source);
                
                // $text = ''; // سيتم تخزين النص هنا
                // foreach ($phpWord->getSections() as $section) {
                //     foreach ($section->getElements() as $element) {
                //         if (method_exists($element, 'getText')) {
                //             $text .= $element->getText() . "<br/>";
                //         }
                //     }
                // }
                
                // echo $text;
                
                ?>
                <!-- <iframe src="https://nozomtechsa.sharepoint.com/:x:/r/sites/NCVCProjectQiyas/_layouts/15/doc2.aspx?sourcedoc=%7B1A4BA5BA-034F-4FC3-9F28-D8C56180B2DE%7D&file=NCVC%20PROJECT%20STATUS%20REPORT.xlsx&action=default&mobileredirect=true&DefaultItemOpen=1&ct=1707813820477&wdOrigin=OFFICECOM-WEB.MAIN.REC&cid=54e61b1d-25e4-48e8-8cba-082167cb688d&wdPreviousSessionSrc=HarmonyWeb&wdPreviousSession=59c13e50-de12-4f77-82d9-f584f1cb925e"
                 width="100%"
                height="650p×"
                frameborder="0"></iframe><br /> -->
                <!-- /Page Header -->
                <!-- <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=plp.xlsx' ></iframe>   -->
                <!-- <embed src="https://codeat21.com/<?//= $Path;?>" type="application/pdf" width="100%" height="477px" /> -->
                <!-- <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=<?//= $Path;?>" width="100%" height="650px" frameborder="0"></iframe> -->
                    <!-- <embed 
                    src="https://view.officeapps.live.com/op/view.aspx?src=<?//= $Path;?>" 
                    frameborder="0" 
                    width="100%" height="650px" frameborder="0"></embed> -->
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
// }
//  }

?>