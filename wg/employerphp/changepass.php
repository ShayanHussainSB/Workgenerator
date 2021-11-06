<?php
session_start();
include '../php/dbcon.php';
$id=$_SESSION["useremp"];
$cpass=$_POST['cpass'];
$npass=$_POST['npass'];
$prsnlmsg2="Password Updated Successfully.";



$query="update employer set Password = '$npass' where EIN='$id'";

$result=mysqli_query($conn,$query);
if($result){
	 ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../employer-dashboard-edit-profile.php";
</script>
<?php
}
else{
	echo "error";
}

?>