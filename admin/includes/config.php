<?php
$con=mysqli_connect("localhost","root","","homik");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();


}

// $con=mysqli_connect('Localhost', 'root', '', 'bhakyalakshmi');
// if(mysqli_connect_errno()){
// echo "Connection Fail".mysqli_connect_error();


// }



// $con=mysqli_connect('Localhost', 'icloudcsin_clouddreams', 'Cloud@2021', 'icloudcsin_quality_groups');


// // Check connection
// if ($con->connect_error) {
//   die("Connection failed: " . $con->connect_error);
// }
// //   echo "Connected successfully";
  
  
// if (!defined('MAINURL')) define('MAINURL', 'http://localhost/quality-groups/');

// $user = 'icloudcsin_clouddreams';
// $password = 'Cloud@2021';
// $db = 'icloudcsin_quality_groups';
// $host = 'Localhost';

?>
