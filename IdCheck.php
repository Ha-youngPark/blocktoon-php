<?php
$con=mysqli_connect("localhost","root","1234","test");
 
if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con, 'set names utf8');

$userId = $_GET['userId'];
$result = mysqli_query($con,"select EXISTS (select * from test where userId='$userId') as success");
$row = mysqli_fetch_array($result);
$data = $row[0];
 
if($data){
//$json_data = json_encode($data, JSON_UNESCAPED_UNICODE);
//echo $json_data;
echo $data;
}
mysqli_close($con);

?>