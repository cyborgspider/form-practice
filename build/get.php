<?php
$dbHost     = 'localhost';
$dbUser     = 'root';
$dbPassword = 'test';
$dbDatabase = 'wedding_guests';

$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbDatabase);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT name,guests,guest_names FROM guests";
if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    $results[] = array(
      'name' => $row[0],
      'guests' => $row[1],
      'guest_names' => $row[2]
     );    
    }
  // Free result set
  $json = json_encode($results);
}
echo $json;


mysqli_close($con);
?>
