<?php
    include('databaseconnection.php');
        
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['fb'];

$sql = "INSERT INTO `feedback` (`Name`, `Email`, `Feedback`) VALUES ('$name', '$email', '$feedback');";

$res=mysql_query($con,$sql);
if(mysqli_num_rows($res)>0){
    while( $row=mysqli_fetch_assoc($res))
    {
         echo "Thanks for your feedback";
    }
}
?>