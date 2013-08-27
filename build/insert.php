<?php
$dbHost     = 'localhost';
$dbUser     = 'root';
$dbPassword = 'test';
$dbDatabase = 'test';

$con = mysqli_connect($dbHost, $dbUser, $dbPassword,$dbDatabase);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql = "INSERT INTO names (name, description) VALUES ('$_POST[name]','$_POST[description]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Thank you, your response has been recorded.";

mysqli_close($con)
?>

<?php
/*
$dbHost     = 'localhost';
$dbUser     = 'root';
$dbPassword = 'root';
$dbDatabase = 'test';

$con = mysqli_connect($dbHost, $dbUser, $dbPassword,$dbDatabase);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql = "INSERT INTO table_test (post) VALUES ('$_POST[post]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Thank you, your response has been recorded.";

mysqli_close($con)
*/
?>