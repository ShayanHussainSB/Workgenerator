<?php
session_start();
include '../php/dbcon.php';
$id=$_SESSION['usercandid'];
$prsnlmsg2="Profile Deleted Successfully.";

$query="delete from candidate where user_id='$id' ";
$result=mysqli_query($conn,$query);

if($result){
	 ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../index.php";
</script>
<?php
session_destroy();
}

?>