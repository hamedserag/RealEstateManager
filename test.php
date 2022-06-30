<?php 
include('includes/config.php');
$date = date("Y-m-d");
$name = 'hamed';
$value = 110;
$reciever = 'hamed';

$query = mysqli_query($con, "INSERT INTO `payments`(`Rname`, `date`, `Value`, `PaidMonths`, `reciever`) VALUES ('$name','$date','$value',2,'$reciever')");
if($query){
    echo("success");
}else{
    echo("fail");
}