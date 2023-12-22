<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin:*');
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();

$sql="Select * from brands";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}else{
      echo json_encode(array('message'=> 'no record found', 'status'=>false));
}


?>