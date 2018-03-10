<?php
// Start session to send  error or success messages to succes or error pages
session_start();
// Setting users variables
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$parentname = $_POST['parentname'];
$parentoccupation = $_POST['parentoccupation'];
$parentaddress = $_POST['parentaddress'];
$phone = $_POST['phone'];
$programmetype = $_POST['programmetype'];
$submit = $_POST['submit'];

// Validating the form accordingly
// Checking if the age is less than or equal to 0
if ($age < 1) {
	$_SESSION['message'] = "Please use a valid AGE (1-9) " ."<strong>" .$age ."</strong>" ." is invalid";
	header("location: failure.php");
}elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
	$_SESSION['message'] = "Please use a valid EMAIL (test@test.com) " ."<strong>" .$email ."</strong>" ." is invalid";
	header("location: failure.php");
}elseif (strlen($phone) < 10) {
	$_SESSION['message'] = "Please use a valid NUMBER (11 digits) " ."<strong>" .$phone ."</strong>" ." is invalid";
	header("location: failure.php");
} else{
	// Sending the form to a mail
    $to      = 'iyiolaosuagwu@gmail.com';
    $subject = 'Registration for:' .$firstname ." " .$lastname;
    $message_body = "Registration to Mainland 1st Batch Oracle Academy Data Science Bootcamp for Secondary Schools \n";
    $message_body .= "Registration details: \n";
    $message_body .= "Firstname: " .$firstname ."\n";
    $message_body .= "Lastname: " .$lastname ."\n";
    $message_body .= "Email: " .$email ."\n";
    $message_body .= "Age: " .$age ."\n";
    $message_body .= "Gender: " .$gender ."\n";
    $message_body .= "Parent/Guardian Name: " .$parentname ."\n";
    $message_body .= "Parent/Guardian Occupation: " .$parentoccupation ."\n";
    $message_body .= "Parent/Guardian Address: " .$parentaddress ."\n";
    $message_body .= "Phone: " .$phone ."\n";
    $message_body .= "Programme Type: " .$programmetype ."\n";

    mail( $to, $subject, $message_body );
    // count mainland users
    include 'counter.php';count_mainland_1();
    // After sending mail heading to the success page
	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['message'] = "Your form was submmited successfully";
	header('location: success.php');
}

?>