<?php
session_start();
error_reporting(0);
include("../php/dbcon.php");
$id=$_SESSION['usercandid'];

$query = "SELECT COUNT(application_id) as total FROM applications where user_id='$id'  ";

$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);


	



?>