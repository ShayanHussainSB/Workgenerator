<?php
session_start();

?>

<!doctype html>
<html lang="en">
  
<!-- Mirrored from themerail.com/html/oficiona/home-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:39:11 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Work Generator</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/et-line.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/plyr.css" />
    <link rel="stylesheet" href="assets/css/flag.css" />
    <link rel="stylesheet" href="assets/css/slick.css" /> 
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.nstSlider.min.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon2.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">


    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-xl absolute-nav transparent-nav cp-nav navbar-light bg-light fluid-nav">
        <a class="navbar-brand" href="index.php"> 
          <img src="images/logo4.png" style="width: 190px" alt="">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
          <ul class="navbar-nav ml-auto main-nav">
            <li class="menu-item active"><a title="Home" href="index.php">Home</a></li>
            <li class="menu-item dropdown">
              <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
              <ul  class="dropdown-menu">
                <li class="menu-item"><a href="job-listing.php">Job Listing</a></li>
               
               
                <?php  
                error_reporting(0);
if($_SESSION['usernameemp']==NULL){

}
else{
  echo " ";
}
                 ?>
               
              </ul>
            </li>
          
             
               
  <?php  
                error_reporting(0);
if($_SESSION['usernameemp']==NULL){

}
else{

echo "   <li class='menu-item dropdown'>
              <a title='' href='#' data-toggle='dropdown' class='dropdown-toggle' aria-haspopup='true' aria-expanded='false'>Employer</a>
              <ul  class='dropdown-menu'><li class='menu-item'><a href='employer-dashboard.php'>Dashboard</a></li><li class='menu-item'><a href='employer-dashboard-edit-profile.php'>Edit Profile</a></li><li class='menu-item'><a href='employer-dashboard-manage-job.php'>Manage Job</a></li>
               <li class='menu-item'><a href='employer-dashboard-post-job.php'>Post Job</a></li> </ul>
            </li> ";
}

?>

              
             
           
                
              
 <?php  
                error_reporting(0);
if($_SESSION['usernamecand']==NULL){

}
else{
  echo "  <li class='menu-item dropdown'>
              <a title='' href='#' data-toggle='dropdown' class='dropdown-toggle' aria-haspopup='true' aria-expanded='false'>Candidate</a>
              <ul  class='dropdown-menu'><li class='menu-item'><a href='dashboard.php'>Dashboard</a></li>
                <li class='menu-item'><a href='dashboard-edit-profile.php'>Edit Profile</a></li>
           
                <li class='menu-item'><a href='resume.php'>Resume</a></li>
                <li class='menu-item'><a href='edit-resume.php'>Add Resume</a></li>
               
                <li class='menu-item'><a href='dashboard-applied.php'>Applied</a></li></ul>
            </li>";
}
  ?>


               
              
               
              
            <li class="menu-item dropdown">
              <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pages</a>
              <ul  class="dropdown-menu">
                <li class="menu-item"><a href="about-us.php">About Us</a></li>
              
                <li class="menu-item"><a href="contact.php">Contact Us</a></li>
               
                <li class="menu-item"><a href="how-it-work.php">How It Works</a></li>
             
              </ul>
            </li>
             <?php  
                error_reporting(0);
if($_SESSION['usernameemp']==NULL){

}
else{
  echo "<li class='menu-item post-job'><a title='Title' href='employer-dashboard-post-job.php'><i class='fas fa-plus'></i>Post a Job</a></li>";
}
  ?>
            
          </ul>
          <ul class="navbar-nav ml-auto account-nav">

              <?php 
error_reporting(0);
if($_SESSION['usernameemp']==NULL && $_SESSION['usernamecand']==NULL){}
  else{
echo "
 <li class='dropdown menu-item header-top-notification'>
              <a href='#' class='notification-button'></a>
              <div class='notification-card'>
                <div class='notification-head'>
                  <span>Notifications</span>
                  <a href='#'>Mark all as read</a>
                </div>
                <div class='notification-body'>
                  <a href='home-2.php' class='notification-list'>
                    <i class='fas fa-bolt'></i>
                    <p>Your Resume Updated!</p>
                    <span class='time'>5 hours ago</span>
                  </a>
                 
                </div>
                <div class='notification-footer'>
                  <a href='#'>See all notification</a>
                </div>
              </div>
            </li>
";
  }
  ?>
           
            <?php 
error_reporting(0);
if($_SESSION['usernameemp']==NULL && $_SESSION['usernamecand']==NULL){
  echo "   <li class='menu-item login-popup'><button title='Title' type='button' data-toggle='modal' data-target='#exampleModalLong'>Login</button></li>
            <li class='menu-item login-popup'><button title='Title' type='button' data-toggle='modal' data-target='#exampleModalLong2'>Registration</button></li>     "; 
  

}
else{


error_reporting(0);
include("php/dbcon.php");
$id1=$_SESSION['usercandid'];
$id2=$_SESSION['useremp'];
$query1 = "select * from candidate where user_id='$id1' ";
$query2 = "select * from employer where EIN='$id2' ";
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
if($result1){
  while ($row=mysqli_fetch_array($result1))
   {
$name=$row['name'];
$username=$row['username'];
$email=$row['email'];
$img=$row['images'];
   }
}




if($result2){
while ($row2=mysqli_fetch_array($result2))
   {
$name1=$row2['Name'];
$username1=$row2['Username'];
$email1=$row2['Email_ID'];
$img1=$row2['image'];
}
}



  

  echo "    <div class='dropdown header-top-account' style='margin-left:20px;'>
                  <a href='#'' class='account-button' style='color:white'>My Account</a>
                  <div class='account-card'>
                    <div class='header-top-account-info'>
                      <a href='#' class='account-thumb'>
                        <img src='".$img1.$img."' class='img-fluid' alt='NO IMAGE'>
                      </a>
                      <div class='account-body'>
                        <h5><a href='#'>".$name1.$name."</a></h5>
                        <span class='mail'>".$email1.$email."</span>
                      </div>
                    </div>
                    <ul class='account-item-list'>
                     
                      <li><a href='php/logout.php'><span class='ti-power-off'></span>Log Out</a></li>
                    </ul>
                  </div>
                </div>   ";
  
}

              ?>
           

          </ul> 
        </div>
      </nav>
      <!-- Modal -->
      <div class="account-entry">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i data-feather="user"></i>Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="php/login.php" method="post">
                  <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control" name="uname" required>
                  </div>
                  
                  <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" name="pass" required>
                  </div>
                  <div class="form-group">
                   <select class="form-control" name="type">
                     <option>Type</option>
                     <option>Candidate</option>
                     <option>Employer</option>
                   </select>
                  </div>
                  <div class="more-option">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Remember Me
                      </label>
                    </div>
                   
                  </div>
                  <button class="button primary-bg btn-block">Login</button>
                </form>
              
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i data-feather="edit"></i>Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="account-type">
                  <a href="#" class="candidate-acc" data-toggle="modal" data-target="#candimodal" data-dismiss="modal"><i data-feather="user"></i>Candidate</a>
                  <a href="#" class="employer-acc" data-toggle="modal" data-target="#empmodal" data-dismiss="modal"><i data-feather="briefcase"></i>Employer</a>
                </div>
             
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->




<!---------------CANDIDATE MODAL-------------->


<div class="account-entry">
  <div class="modal fade" id="candimodal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i data-feather="edit"></i> Candidate Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              
                <form action="php/signupemp.php" method="post">
                   <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control" name="name" style="height:34px" required>
                  </div>

                  <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control" name="uname" style="height:34px" required>
                  </div>
                  <div class="form-group">
                    <input type="email" placeholder="Email Address" class="form-control" name="email" style="height:34px" required>
                  </div>
                   <div class="form-group">
                    <input type="text" placeholder="Number" class="form-control" name="phone" style="height:34px" required>
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" name="password" style="height:34px" required>
                  </div>
                  

                  <div class="more-option terms">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" required>
                      <label class="form-check-label" for="defaultCheck2">
                        I accept the <a href="#">terms & conditions</a>
                      </label>
                    </div>
                  </div>
                  <input type="submit" class="button primary-bg btn-block" name="btn" value="Register" required>
                </form>
              
              </div>
            </div>
          </div>
        </div>

</div>
<!-----------END--------------->


<!---------------CANDIDATE MODAL-------------->


<div class="account-entry">
  <div class="modal fade" id="empmodal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i data-feather="edit"></i> Employer Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <form action="php/signupemplr.php" method="post">
                   <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control" style="height:13px" name="name" required>
                  </div>
                    <div class="form-group">
                    <input type="email" placeholder="Email Address" class="form-control" style="height:13px" name="email" required>
                  </div>
                   <div class="form-group">
                    <input type="text" placeholder="Contact" class="form-control" style="height:13px" name="contact" required>
                  </div>
                   <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control" style="height:13px" name="uname" required>
                  </div>
                   <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" style="height:13px" name="password" required> 
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Company Name" class="form-control" style="height:13px" name="comp_name" required>
                  </div> 
                
                  <div class="form-group">
                    <input type="text" placeholder="Address" class="form-control" style="height:13px" name="address" required>
                  </div>
                   <div class="form-group">
                    <input type="text" placeholder="Number of Employees" class="form-control" style="height:13px" name="numofemp" required>
                  </div>
                   <div class="form-group">
                    <input type="text" placeholder="Type of Organization" class="form-control" style="height:13px" name="typeoforg" required>
                  </div>
                  
                  <div class="more-option terms">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" style="height:13px">
                      <label class="form-check-label" for="defaultCheck2">
                        I accept the <a href="#">terms & conditions</a>
                      </label>
                    </div>
                  </div>
                   <input type="submit" class="button primary-bg btn-block" name="btn" value="Register">
                </form>
             
              </div>
            </div>
          </div>
        </div>

</div>
<!-----------END--------------->


<?php

error_reporting(0);
include("php/dbcon.php");


$query = "SELECT COUNT(job_id) as total FROM jobs";

$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);


  



?>




            
    <!-- Banner -->
    <div class="banner banner-1 banner-1-bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="banner-content">
              <h1><?php  echo $data['total'];   ?> Job Listed</h1>
              <p>Create free account to find thousands Jobs, Employment & Career Opportunities around you!</p>
               <?php  
                error_reporting(0);
if( $_SESSION['usernamecand']==NULL){

}
else{
echo " <a href='edit-resume.php' class='button'>Upload Resume</a>";

}
  ?>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->

    <!-- Search and Filter -->
    <div class="searchAndFilter-wrapper">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="searchAndFilter-block">
              <div class="searchAndFilter">
                <form action="#" class="search-form">
                  <input type="text" placeholder="Enter Keywords" style="margin-left: 200px;">
                  
                  <select class="selectpicker" id="search-category">
                    <option value="" selected>Accounting / Finance</option>
                    <option value="real-state">Health Care</option>
                    <option value="vehicales">Garments / Textile</option>
                    <option value="electronics">Engineering and Technology</option>
                    <option value="beauty">Telecommunication</option>
                   
                  </select>
                  <button class="button primary-bg" ><i class="fas fa-search"></i><a href="job-listing.php">Search Job</a></button>
                </form>
                <div class="filter-categories">
                  <h4>Job Category</h4>
                  <ul>
                    <li><a href="job-listing.php"><i data-feather="bar-chart-2"></i>Accounting / Finance </a></li>
                   
                    <li><a href="job-listing.php"><i data-feather="briefcase"></i>Health Care </a></li>
                   
                    <li><a href="job-listing.php"><i data-feather="command"></i>Garments / Textile </a></li>
                  
                    <li><a href="job-listing.php"><i data-feather="headphones"></i>Engineering and Technology </a></li>
                    <li><a href="job-listing.php"><i data-feather="radio"></i>Telecommunication </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Search and Filter End -->

    <!-- Jobs -->
    <div class="section-padding-bottom alice-bg">
      <div class="container">
        <div class="row">
          <div class="col">
            <ul class="nav nav-tabs job-tab" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent Job</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="feature-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">Feature Job</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                <div class="row">
               
                   
                    
<?php
session_start();
include('php/dbcon.php');



$query="select * from jobs order by job_id DESC LIMIT 6 ";
$result=mysqli_query($conn,$query);
if($result){
  while ($row=mysqli_fetch_array($result))
   {
  
$img=$row['images'];
$title=$row['Title'];
$des=$row['description'];
$status=$row['status'];
$skills=$row['Skills'];
$salary=$row['Salary'];
$exp=$row['Experience'];
$userid=$row['EIN'];


$query3 = "Select * From employer where EIN='$userid'";
  $result3 = mysqli_query($conn,$query3);
  if($result3){
  while ($row3=mysqli_fetch_array($result3))
   {
    $company=$row3['Company_name'];
     $vacancy=$row3['Num_of_emp'];
   $email=$row3['Email_ID'];
   $address=$row3['Address'];
   
   }
 }     
?>
   <div class="col-lg-6">

  <div class="job-list half-grid">
                      <div class="thumb">
                        <a href="#">
                          <img src="<?php echo $img  ?>" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a><?php echo $title  ?></a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $company  ?></a></span>
                           
                            <span class="job-type part-time"><a href="#"><i data-feather="clock"></i><?php echo $status  ?></a></span>
                          </div>
                        </div>
                     
                      </div>
                    </div>
                      </div>
                    
<?php

  }
}
?>









                    
                    
                   
                
                 
                </div>
              </div>
              <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature-tab">
                <div class="row">
                
                  
                   


                   


  <?php
session_start();
include('php/dbcon.php');



$query="select * from jobs order by job_id DESC LIMIT 10 ";
$result=mysqli_query($conn,$query);
if($result){
  while ($row=mysqli_fetch_array($result))
   {
  
$img=$row['images'];
$title=$row['Title'];
$des=$row['description'];
$status=$row['status'];
$skills=$row['Skills'];
$salary=$row['Salary'];
$exp=$row['Experience'];
$userid=$row['EIN'];


$query3 = "Select * From employer where EIN='$userid'";
  $result3 = mysqli_query($conn,$query3);
  if($result3){
  while ($row3=mysqli_fetch_array($result3))
   {
    $company=$row3['Company_name'];
     $vacancy=$row3['Num_of_emp'];
   $email=$row3['Email_ID'];
   $address=$row3['Address'];
   
   }
 }     
?>
  <div class="col-lg-6">
  <div class="job-list half-grid">
                      <div class="thumb">
                        <a href="#">
                          <img src="<?php echo $img  ?>" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a><?php echo $title  ?></a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $company  ?></a></span>
                           
                            <span class="job-type part-time"><a href="#"><i data-feather="clock"></i><?php echo $status  ?></a></span>
                          </div>
                        </div>
                     
                      </div>
                    </div>
                     </div>
                    
<?php

  }
}
?>

                   
                   




                  
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jobs End -->
    
    <!-- Fun Facts -->
    <div class="padding-top-90 padding-bottom-60 fact-bg">
      <div class="container">
        <div class="row fact-items">
          <div class="col-md-3 col-sm-6">
            <div class="fact">
              <div class="fact-icon">
                <i data-feather="briefcase"></i>
              </div>


                   <?php

error_reporting(0);
include("php/dbcon.php");


$query1 = "SELECT COUNT(job_id) as total1 FROM jobs   ";

$result1=mysqli_query($conn,$query1);
$data1=mysqli_fetch_assoc($result1);


  



?>




                   <?php

error_reporting(0);
include("php/dbcon.php");


$query2 = "SELECT COUNT(user_id) as total2 FROM candidate   ";

$result2=mysqli_query($conn,$query2);
$data2=mysqli_fetch_assoc($result2);


  



?>




                   <?php

error_reporting(0);
include("php/dbcon.php");


$query3 = "SELECT COUNT(Resume) as total3 FROM candidate_profile  ";

$result3=mysqli_query($conn,$query3);
$data3=mysqli_fetch_assoc($result3);


  



?>




                   <?php

error_reporting(0);
include("php/dbcon.php");


$query4 = "SELECT COUNT(EIN) as total4 FROM employer  ";

$result4=mysqli_query($conn,$query4);
$data4=mysqli_fetch_assoc($result4);


  



?>





              <p class="fact-number"><span class="count" data-form="0" data-to="<?php  echo $data1['total1'];  ?>"></span></p>
              <p class="fact-name">Live Jobs</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="fact">
              <div class="fact-icon">
                <i data-feather="users"></i> 
              </div>
              <p class="fact-number"><span class="count" data-form="0" data-to="<?php  echo $data2['total2'];  ?>"></span></p>
              <p class="fact-name">Candidate</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="fact">
              <div class="fact-icon">
                <i data-feather="file-text"></i>
              </div>
              <p class="fact-number"><span class="count" data-form="0" data-to="<?php  echo $data3['total3'];  ?>"></span></p>
              <p class="fact-name">Resume</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="fact">
              <div class="fact-icon">
                <i data-feather="award"></i>
              </div>
              <p class="fact-number"><span class="count" data-form="0" data-to="<?php  echo $data4['total4'];  ?>"></span></p>
              <p class="fact-name">Companies</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fun Facts End -->

    <!-- Registration Box -->
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="call-to-action-box candidate-box">
              <div class="icon">
                <img src="images/register-box/1.png" alt="">
              </div>
              <span>Are You</span>
              <h3>Candidate?</h3>
              <a href="#" data-toggle="modal" data-target="#candimodal">Register Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="call-to-action-box employer-register">
              <div class="icon">
                <img src="images/register-box/2.png" alt="">
              </div>
              <span>Are You</span>
              <h3>Employer?</h3>
              <a href="#" data-toggle="modal" data-target="#empmodal">Register Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration Box End -->

    <!-- Modal -->
    <div class="account-entry">
      <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><i data-feather="edit"></i>Registration</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="account-type">
                <a href="#" class="candidate-acc"><i data-feather="user"></i>Candidate</a>
                <a href="#" class="employer-acc active"><i data-feather="briefcase"></i>Employer</a>
              </div>
             
           
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonial -->
    <div class="section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="testimonial">
              <div class="testimonial-quote">
                <img src="images/testimonial/quote.png" class="img-fluid" alt="">
              </div>
              <div class="testimonial-for">
                <div class="testimonial-item">
                  <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob One”</p>
                  <h5>Maria Marlin @ Google</h5>
                </div>
                <div class="testimonial-item">
                  <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Two”</p>
                  <h5>Laura Harper @ Amazon</h5>
                </div>
                <div class="testimonial-item">
                  <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Three”</p>
                  <h5>John Doe @ Envato</h5>
                </div>
                <div class="testimonial-item">
                  <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Four”</p>
                  <h5>Jenny Doe @ Dribbble</h5>
                </div>
                <div class="testimonial-item">
                  <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Five”</p>
                  <h5>Michle Clark @ Apple</h5>
                </div>
                <div class="testimonial-item">
                  <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Two”</p>
                  <h5>Laura Harper @ Amazon</h5>
                </div>
                <div class="testimonial-item">
                  <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Three”</p>
                  <h5>John Doe @ Envato</h5>
                </div>
              </div>
              <div class="testimonial-nav">
                <div class="commenter-thumb">
                  <img src="images/testimonial/thumb-1.jpg" class="img-fluid commenter" alt="">
                  <img src="images/testimonial/1.png" class="comapnyLogo" alt="">
                </div>
                <div class="commenter-thumb">
                  <img src="images/testimonial/thumb-2.jpg" class="img-fluid commenter" alt="">
                  <img src="images/testimonial/2.png" class="comapnyLogo" alt="">
                </div>
                <div class="commenter-thumb">
                  <img src="images/testimonial/thumb-3.jpg" class="img-fluid commenter" alt="">
                  <img src="images/testimonial/3.png" class="comapnyLogo" alt="">
                </div>
                <div class="commenter-thumb">
                  <img src="images/testimonial/thumb-4.jpg" class="img-fluid commenter" alt="">
                  <img src="images/testimonial/4.png" class="comapnyLogo" alt="">
                </div>
                <div class="commenter-thumb">
                  <img src="images/testimonial/thumb-5.jpg" class="img-fluid commenter" alt="">
                  <img src="images/testimonial/5.png" class="comapnyLogo" alt="">
                </div>
                <div class="commenter-thumb">
                  <img src="images/testimonial/thumb-2.jpg" class="img-fluid commenter" alt="">
                  <img src="images/testimonial/2.png" class="comapnyLogo" alt="">
                </div>
                <div class="commenter-thumb">
                  <img src="images/testimonial/thumb-3.jpg" class="img-fluid commenter" alt="">
                  <img src="images/testimonial/3.png" class="comapnyLogo" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- NewsLetter -->
   
    <!-- NewsLetter End -->

   <?php include 'footer.php';  ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.nstSlider.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/visible.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/tinymce.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="js/custom.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>

<!-- Mirrored from themerail.com/html/oficiona/home-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:40:16 GMT -->
</html>