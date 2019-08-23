<?php
$con=new mysqli("localhost","root","","genysys");
$result=$con->query("SELECT * FROM studentprofile
WHERE name='Rehan'");

foreach ($result as $value)
{  echo'name';
	echo $value['name'];
	echo $value['ID'];
}
?>