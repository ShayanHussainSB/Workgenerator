<?php
session_start();
error_reporting(0);
include '../php/dbcon.php';
$cpass=$_POST['cpass'];
$newpass=$_POST['newpass'];
$id=$_SESSION['usercandid'];
$pass=$_SESSION['passcand'];
$prsnlmsg2="Password Updated Successfully";

$prsnlmsg3="Current Password is Incorrect!";
$query="update candidate set password='$newpass' where user_id='$id' ";

$result=mysqli_query($conn,$query);

if($result){
	?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../dashboard-edit-profile.php";
</script>
<?php
}

else
{
	?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg3  ?>";
  alert(sendmsg);
   window.location.href = "../dashboard-edit-profile.php";
</script>
<?php
}

?>