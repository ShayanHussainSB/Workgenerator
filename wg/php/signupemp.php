<?php
  include('dbcon.php');
  $name = $_POST['name'];
  $email = $_POST['email'];
   $uname = $_POST['uname'];
  
  $phone = $_POST['phone'];
  $pass = $_POST['password'];
  $prsnlmsg="Thankyou, ".$name.". You Are Registered";
  $prsnlmsg2="Email Already Exist!";
  $prsnlmsg3="Username Already Exist!";

$checkemail="select * from candidate";
$result2=mysqli_query($conn,$checkemail);


  if($row=mysqli_fetch_array($result2)){
  
} 
  
  if($email==$row['email']  ){
  
  ?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg2  ?>";
  alert(sendmsg);
   window.location.href = "../index.php";
</script>
<?php
}

elseif($uname==$row['username']){?>
<script type="text/javascript">
  var sendmsg="<?php echo $prsnlmsg3  ?>";
  alert(sendmsg);
   window.location.href = "../index.php";
</script>
<?php
}

else{
 $query = "insert into candidate values(NULL,'$name','$email','$phone','$uname','$pass',NULL)";
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