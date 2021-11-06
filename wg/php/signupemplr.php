<?php
  include('dbcon.php');
  $name = $_POST['name'];
  $email = $_POST['email'];
   $uname = $_POST['uname'];
  
  $contact = $_POST['contact'];
  $pass = $_POST['password'];

   $company = $_POST['comp_name'];
    $address = $_POST['address'];

    $numofemp = $_POST['numofemp'];
    $type = $_POST['typeoforg'];
    
  $prsnlmsg="Thankyou, ".$name.". You Are Registered";
$prsnlmsg2="Email Already Exist!";
  $prsnlmsg3="Username Already Exist!";

$checkemail="select * from employer";
$result2=mysqli_query($conn,$checkemail);


  if($row=mysqli_fetch_array($result2)){
  
} 
  
  if($email==$row['Email_ID']  ){
  
  ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../index.php";
</script>
<?php
}

elseif($uname==$row['Username']){?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg3  ?>";
  alert(sendmsg);
   window.location.href = "../index.php";
</script>
<?php
}

else{
   $query = "insert into employer values(NULL,'$name','$email','$contact','$uname','$pass','$company','$address','$numofemp','$type',NULL)";
            $result = mysqli_query($conn,$query);
            if($result)
            {
               ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg   ?>";
  alert(sendmsg);
   window.location.href = "../index.php";
</script>
<?php
            }
            else
            {
                echo "query error";
            }
      mysqli_close($conn);
}

  
  	
    
	         
  	
 
?>