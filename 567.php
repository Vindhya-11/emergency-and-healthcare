<?php
include_once('connection2.php');
$query="select * from studentprofile";
$result=mysql_query($query);
?>
<html>
<head>
<title></title>
<head>
<body>
<?php
while($rows=mysql_fetch_assoc($result))
{
?>
<?php echo $rows.[ID]; ?>
<?php
}
?>
</body>
</html>
