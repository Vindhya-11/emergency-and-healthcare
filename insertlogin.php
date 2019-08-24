<?php
	$Name = filter_input(INPUT_POST,'Name');
	$Password = filter_input(INPUT_POST,'Password');
	
if (!empty($Name)){
if (!empty($Password)){	
	
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "file1";

$conn1 = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql1 = "INSERT INTO patient(Name, Password)
values ('".$Name."','".$Password."')";
if($conn1->query($sql1)){
	echo $Name." has been added.";
	echo 'login successfull';
	echo '<a href="dashboard.html">Go to Dashboard</a>';

}
else{
	echo "Error: ". $sql1 ."". $conn1->error;
}

}
else{
echo "Password should not be empty";
die();
}
}

else{
echo "Username should not be empty";
die();
}
$conn1->close();
?>
