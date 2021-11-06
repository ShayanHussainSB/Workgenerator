<?php
session_start();
include '../php/dbcon.php';
$id = $_SESSION['useremp'];
$name=$_POST['title'];
$category=$_POST['category'];
$salary=$_POST['salary'];
$exp=$_POST['experience'];
$skills=$_POST['skills'];
$role=$_POST['role'];
$des=$_POST['description'];
$status=$_POST['status'];


$img_name=$_FILES['upload']['name'];
$tmp_name=$_FILES['upload']['tmp_name'];
$img_type=$_FILES['upload']['type'];
$img_size=$_FILES['upload']['size'];
$path="../jobsimg/";
$folder="jobsimg/";

$prsnlmsg2="Job Posted Successfully.";



move_uploaded_file($tmp_name,$path.$img_name);

$query="Insert into jobs values(NULL,'$name','$category','$salary','$skills','$exp','$role','$des','$id','$folder$img_name','$status')";

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