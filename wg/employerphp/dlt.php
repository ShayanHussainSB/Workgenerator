<?php
include('../php/dbcon.php');
$id=$_GET['job_id'];
$query="delete from jobs where job_id='$id' ";
$result=mysqli_query($conn,$query);
$prsnlmsg="Job Deleted Sucessfully!";


if($result){
	
	header("location:../employer-dashboard-manage-job.php");



}

?>