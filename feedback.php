<?php
include('databaseconnection.php');
        
$name = $_POST['name'];

$email = $_POST['email'];

$feedback = $_POST['fb'];
$time = date('Y-m-d H:i:s');

$sql = "insert into `feedback`(`Name`,`Email`,`Comment`,`timeOfIns`) values ('$name', '$email', '$feedback','$time ');";

if($con->query($sql)==TRUE){
    echo "<script type='text/javascript'>alert('Thanks for your feedback')</script>";
}
else{
    echo "Error: ". $sql . "<br>" . $con->error;
}
$con->close();
?>