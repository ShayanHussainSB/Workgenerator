<?php 
session_start();
  include("dbcon.php");

  $uname = $_POST["uname"];
  $pass = $_POST["pass"];
$type = $_POST["type"];
 
  $prsnlmsg2="Incorrect Email And Password";

if($type=="Candidate"){
  
  	$query = "Select * From candidate Where username = '$uname' And password = '$pass'";
  	$qry = mysqli_query($conn,$query);
  
  	$total = mysqli_num_rows($qry);
  	if ($total == 1){
  		 while ($row=mysqli_fetch_array($qry))
   {
    $_SESSION['usercandid'] = $row["user_id"];
         $_SESSION['usernamecand'] = $row["username"];
          $_SESSION['namecand'] = $row["name"];
           $_SESSION['emailcand'] = $row["email"];
            $_SESSION['contactcand'] = $row["Contact"];
             $_SESSION['passcand'] = $row["password"];

  }
       
        header('location: ../index.php');
  	}
  	else{
  	 ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../index.php";
</script>
<?php
  	}
}

elseif ($type=="Employer") {
  $query = "Select * From employer Where Username = '$uname' And Password = '$pass'";
    $qry = mysqli_query($conn,$query);
   
    $total = mysqli_num_rows($qry);
    if ($total == 1){
        while ($row=mysqli_fetch_array($qry))
   {
         $_SESSION['useremp'] = $row["EIN"];
         $_SESSION['usernameemp'] = $row["Username"];
           $_SESSION['emailemp'] = $row["Email_ID"];
       }
        header('location: ../index.php');
    }
    else{
     ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../index.php";
</script>
<?php
    }
}
 
  ?>