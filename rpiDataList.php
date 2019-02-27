<!DOCTYPE html>
<?php


//insert into temp_log(device,temp,humidity) VALUES ($device, $temp, $humidity)";



$con=mysqli_connect("localhost","testuser","test623","testdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"select * from  temp_log  order by device desc ");
while($row = mysqli_fetch_array($result))
  {
  echo $row['device']." ; " . $row['temp'];" . $row['humidity'];
  echo "<br>";
  }
mysqli_close($con);
?>
