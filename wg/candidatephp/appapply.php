<?php
session_start();
include '../php/dbcon.php';

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['num'];
$id=$_SESSION['usercandid'];
$msg=$_POST['msg'];
$jobid=$_SESSION['idd'];
$prsnlmsg2="Application Submited Successfully.";

$query3 = "Select * From candidate_profile where user_id='$id'";
  $result3 = mysqli_query($conn,$query3);
  if($result3){
  	while ($row3=mysqli_fetch_array($result3)) {
  	$resume=$row3['Resume'];
  	}
  }



$query="Insert into applications values(NULL,'$id','$name','$contact','$email','$msg','$resume','$jobid')";

$result=mysqli_query($conn,$query);
if($result){

	 ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../job-listing.php";
</script>
<?php
}
else{
	echo "error";
	



}



?>