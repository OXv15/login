<?php 
	// directories to cunter file
	$dir = 'count/count_island.dat';
	$get_count_value = file_get_contents($dir);
	function lock(){
		global $get_count_value;
		if ($get_count_value >129 || $get_count_value == 130) {
			echo "php/restrict.php";
		}else{
			echo "php/register_mainland_1.php";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<title>Codeweek | registration form</title>
</head>
<body>
	<style type="text/css">.reg_submit_btn:focus{ outline:none; }</style>
	<link rel="stylesheet" type="text/css" href="assets/css/codeweek.min.css">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="vendor/dropdown/css/style.css">
    <link rel="stylesheet" href="vendor/socicon/css/styles.css">
	<div class="form_top_div" style="box-shadow: 0px 1px 10px #000;"><img src="assets/imgs/logowh.png"></div>
	<div class="justify-content-center p-2 my-auto d-flex">
	  	<form class="bg-white reg_form" method="POST" action="<?php lock(); ?>">
	    	<div class="tuck"></div>
		  	<div class=" p-3">
		  		<p class=" text-left form_title fa-2x pt-2 pb-3">Student Registration</p>
			  	<div id="pointer"><h4>Mainland 1st Batch Oracle Academy Data Science Bootcamp for Secondary Schools</h4></div>
			    <div class="group">      
			      <input type="text" name="firstname" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>First Name <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="text" name="lastname" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Last Name <i class="text-danger">*</i></label>
			    </div>

			    <div class="group">      
			      <input type="email" name="email" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Email <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="number" name="age" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Age <i class="text-danger">*</i></label>
			    </div>
			      
			    
			    <div class="group">      
			      <select name="gender" required>
			      	<option></option>
			      	<option>Male</option>
			      	<option>Female</option>
			      </select>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Gender <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="text" name="parentname" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Parent/Guardian Name <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="text" name="parentoccupation" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Parent/Guardian Occupation <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="text" name="parentaddress" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Parent/Guardian Address <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="number" name="phone" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Phone Number <i class="text-danger">*</i></label>
			    </div>

			    <div class="group">      
			      <select name="programmetype" required>
			      	<option></option>
			      	<option>Wificombact Academy</option>
			      	<option>Private School</option>
			      	<option>Public School</option>
			      </select>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Programme Type <i class="text-danger">*</i></label>
			    </div>

			    <div id="pointer2">
			    	<h4>
			    		Notice: <p>Please make sure all fields are properly filled before submitting this form.</p>
			    	</h4>
			    </div>
			 	<button type="submit" name="submit" class="text-white btn mt-3" style="background: rgb(0, 174, 239);">SUBMIT FORM</button>
			    <p class="text-muted text-center pt-5">Thanks for your time. Form by Wificombact@2018.</p><img class="justify-content-center my-auto d-flex rounded-circle" style="width: 80px;height: 80px;" src="assets/imgs/logo.jpeg">
		  	</div>
	  	</form>
	</div>
</body>
</html>
<style type="text/css">