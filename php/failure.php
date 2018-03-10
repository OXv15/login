<?php
// strating session to reciev posted messages stored as sessions 
session_start();
// redring the sessions as variables for easier use
if (isset($_SESSION['message'])) {
	$msg = $_SESSION['message'];
}else{
	$msg = "Unkonwn error";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<title>Codeweek | Failure</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="../assets/css/codeweek.min.css">
	<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../vendor/dropdown/css/style.css">
    <link rel="stylesheet" href="../vendor/socicon/css/styles.css">
	<div class="form_top_div"></div>
	<div class="justify-content-center p-2 my-auto d-flex">
	  	<div class="bg-white reg_form">
	    	<div class="tuck"></div>
		  	<div class="p-3">
		  		<p class="text-center form_title fa-2x pt-2">Student Registration</p>
		  		<div class="justify-content-center my-auto -d-flex text-center">
		  			<img width="220px" height="220px" class="img-responsive" src="../assets/imgs/failmark.jpg">
			  		<strong><h2 style="text-transform: uppercase;">Form Error</h2></strong>
			  		<p class="text-danger"><b><?php echo $msg; ?></b></p>
			  		<p><a href="javascript:history.back()">Back to form</a></p>
		  		</div>
		  	</div>
	  	</div>
	</div>
</body>
</html>