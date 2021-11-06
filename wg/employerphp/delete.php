
<?php
session_start();
include '../php/dbcon.php';
$id=$_SESSION['useremp'];
$prsnlmsg2="Profile Deleted Successfully.";

$query="Delete  From employer Where EIN = '$id'";
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