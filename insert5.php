<?php
  $Name = filter_input(INPUT_POST,'Name');
 $Email_id = filter_input(INPUT_POST, 'Email_id');
 $Dob = filter_input(INPUT_POST, 'Dob');
 $Phone = filter_input(INPUT_POST, 'Phone');
 $Aadhar_number = filter_input(INPUT_POST, 'Aadhar_number');
 $Address = filter_input(INPUT_POST, 'Address');
 $Gender = filter_input(INPUT_POST, 'Gender');
 $Password = filter_input(INPUT_POST, 'Password');
 $Confirm_password = filter_input(INPUT_POST, 'Confirm_password');
 
 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "file1";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO patient1(Name, Email_id, Dob, Phone, Aadhar_number, Address, Gender, Password, Confirm_password)
values ('".$Name."','".$Email_id."','".$Dob."','".$Phone."','".$Aadhar_number."','".$Address."','".$Gender."','".$Password."','".$Confirm_password."')";
if($conn->query($sql)){
	echo $Name." has been added.";
	//echo 'Go back to login page';
echo '<a href="login.html"> Go back to login page</a>';
}
else{
	echo "Error: ". $sql ."". $conn->error;
}
$conn->close();

?>\
