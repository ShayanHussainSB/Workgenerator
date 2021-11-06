<?php
session_start();
include '../php/dbcon.php';
$id=$_POST['EIN'];
$name=$_POST['Name'];
$email=$_POST['Email'];
$contact=$_POST['Phone'];
$uname=$_POST['Username'];
$cname=$_POST['Cmp_Name'];
$adrs=$_POST['adrs'];
$Num_of_emp=$_POST['Num_of_emp'];
$Type_of_org=$_POST['Type_of_org'];

$img_name=$_FILES['uploadimage']['name'];
$tmp_name=$_FILES['uploadimage']['tmp_name'];
$img_type=$_FILES['uploadimage']['type'];
$img_size=$_FILES['uploadimage']['size'];
$path="../uploads/";
$folder="uploads/";

$prsnlmsg2="Info Updated Successfully.";


move_uploaded_file($tmp_name,$path.$img_name);
$query="update employer set Name='$name',Email_ID='$email',Contact='$contact',Username='$uname',Company_name='$cname',Address='$adrs',Num_of_emp='$Num_of_emp',Type_of_org='$Type_of_org',image='$folder$img_name' where EIN='$id' ";

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