<?php
session_start();
include '../php/dbcon.php';
$name=$_POST['name'];
$uname=$_POST['uname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$id=$_SESSION['usercandid'];

$img_name=$_FILES['upload']['name'];
$tmp_name=$_FILES['upload']['tmp_name'];
$img_type=$_FILES['upload']['type'];
$img_size=$_FILES['upload']['size'];
$path="../candidateimg/";
$folder="candidateimg/";

$prsnlmsg2="Info Updated Successfully.";

move_uploaded_file($tmp_name, $path.$img_name);
$query="update candidate set name='$name',email='$email',Contact='$contact',username='$uname',images='$folder$img_name' where user_id='$id' ";

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
else{
	echo "error";
}

?>