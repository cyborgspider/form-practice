<?php
$dbHost     = 'localhost';
$dbUser     = 'root';
$dbPassword = 'root';
$dbDatabase = 'test';
$tableName  = 'names';

$con = mysqli_connect($dbHost, $dbUser, $dbPassword);
$dbs = mysqli_select_db($dbDatabase, $con);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysql_query("SELECT * FROM $tableName");
$array = mysql_fetch_row($result)

echo json_encode($array);

?>