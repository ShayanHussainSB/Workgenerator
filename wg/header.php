 <?php
session_start();

?>
 <header class="header-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="#"><img src="images/footerlogo.png" style="width: 190px;height: 70px" alt=""></a>
              </div>
              <div class="header-top-toggler">
                <div class="header-top-toggler-button"></div>
              </div>
              <div class="top-nav">

                  <?php 
error_reporting(0);
if($_SESSION['usernameemp']==NULL && $_SESSION['usernamecand']==NULL){}
  else{

    echo "<div class='dropdown header-top-notification'>
              <a href='#' class='notification-button'>Notifications</a>
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
            </div>";
  }
    ?>
               
 <?php 
error_reporting(0);
if($_SESSION['useremp']==NULL && $_SESSION['usercandid']==NULL){
  
  

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



               echo "<div class='dropdown header-top-account' >
                  <a href='#' class='account-button' >My Account</a>
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
                </div>";

              }
              ?>

                <select class="selectpicker select-language" data-width="fit">
                  <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                
                </select>
              </div>
            </div>
            <nav class="navbar navbar-expand-lg cp-nav-2">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="menu-item active"><a title="Home" href="index.php">Home</a></li>
                  <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="job-listing.php">Job Listing</a></li>




                   
                    
                      <!-- <li class="menu-item"><a  href="post-job.php">Post Job</a></li> -->
                    </ul>
                  </li>
                 
                    
                    
                        <?php  
                error_reporting(0);
if($_SESSION['usernamecand']==NULL){

}
else{
  echo '  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidates</a>
                    <ul  class="dropdown-menu"><li class="menu-item"><a  href="edit-resume.php">Add Resume</a></li>  </ul>
                  </li>';
}
  ?>

                  
                 
                  
                         <?php  
                error_reporting(0);
if($_SESSION['usernameemp']==NULL){

}
else{
  echo '   <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employers</a>
                    <ul  class="dropdown-menu">
                    <li class="menu-item"><a  href="employer-dashboard-post-job.php">Post a Job</a></li> </ul>
                  </li>';
}
  ?>
                    
                   
 <?php  
                error_reporting(0);
if($_SESSION['usernamecand']==NULL && $_SESSION['usernameemp']==NULL){

}
else{

  echo " <li class='menu-item dropdown'>
                    <a href='#' data-toggle='dropdown' class='dropdown-toggle' aria-haspopup='true' aria-expanded='false'>Dashboard</a>
                    <ul  class='dropdown-menu'>";

                    if($_SESSION['usernamecand']!=NULL){
 echo "<li class='menu-item dropdown'>
                        <a href='#'' data-toggle='dropdown'  class='dropdown-toggle' aria-haspopup='true' aria-expanded='false'>Candidate Dashboard</a>
                        <ul class='dropdown-menu'>
                          <li class='menu-item'><a  href='dashboard.php'>Dashboard</a></li>
                          <li class='menu-item'><a  href='dashboard-edit-profile.php'>Edit Profile</a></li>
                          <li class='menu-item'><a  href='edit-resume.php'>Add Resume</a></li>
                          <li class='menu-item'><a  href='resume.php'>Resume</a></li>
                         
                     
                          <li class='menu-item'><a  href='dashboard-applied.php'>Applied</a></li>
                        
                        </ul>
                      </li>
                         </ul>
                  </li>";
                    }

                    elseif ($_SESSION['usernameemp']!=NULL) {
                   echo "   <li class='menu-item dropdown'>
                        <a href='#' data-toggle='dropdown'  class='dropdown-toggle' aria-haspopup='true' aria-expanded='false'>Employer Dashboard</a>
                        <ul class='dropdown-menu'>
                          <li class='menu-item'><a href='employer-dashboard.php'>Employer Dashboard</a></li>
                          <li class='menu-item'><a href='employer-dashboard-edit-profile.php'>Edit Profile</a></li>
                      
                          <li class='menu-item'><a href='employer-dashboard-manage-job.php'>Manage Job</a></li>
                       
                          <li class='menu-item'><a href='employer-dashboard-post-job.php'>Post Job</a></li>
                        </ul>
                      </li>

                    </ul>
                  </li>
";
                    }
}
  ?>
                
                     
                   
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a href="about-us.php">About Us</a></li>
                      <li class="menu-item"><a href="how-it-work.php">How It Works</a></li>
                  
                    
                    </ul>
                  </li>
                  <li class="menu-item"><a href="contact.php">Contact Us</a></li>
                   <?php  
                error_reporting(0);
if($_SESSION['usernameemp']==NULL){
 
}

else{
  echo " <li class='menu-item post-job'><a href='employer-dashbaord-post-job.php'><i class='fas fa-plus'></i>Post a Job</a></li>
                </ul>";
}



  ?>
                 
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
