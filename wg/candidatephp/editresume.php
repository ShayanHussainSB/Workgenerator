<?php
session_start();
include '../php/dbcon.php';

$skills=$_POST['skills'];
$experience=$_POST['exp'];
$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);
$path= '../Resume/';
$description=$_POST['about'];
$salary=$_POST['salary'];
$category=$_POST['cate'];
$status=$_POST['status'];
$id=$_SESSION['usercandid'];
$folder="Resume/";
$filefolder="Resume/".$name;
$prsnlmsg2="Resume Updated Successfully.";


move_uploaded_file($tmp_name, $path.$name);
$query="Insert into candidate_profile values('$id','$skills','$experience','$filefolder','$description','$salary','$category','$status')";
$result=mysqli_query($conn,$query);
if($result){

	 ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../edit-resume.php";
</script>
<?php
}
else{
	echo "error";
	



}


?>