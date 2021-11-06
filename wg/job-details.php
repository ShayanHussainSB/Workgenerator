

<!doctype html>
<html lang="en">
  
<!-- Mirrored from themerail.com/html/oficiona/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:46:31 GMT -->
<?php include 'headtag.php' ?>
  <body>

  <?php include 'header.php' ?>


<?php
session_start();
include('php/dbcon.php');
$id=$_GET['job_id'];

$_SESSION['idd']=$id;

$query="select * from jobs where job_id='$id' ";
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

  }
}
?>


<?php
$query2 = "Select * From jobs where job_id='$id'";
  $result2 = mysqli_query($conn,$query2);
  if($result2){
  while ($row2=mysqli_fetch_array($result2))
   {
    $ein=$row2['EIN'];
   }
 }
 ?>


 <?php
$query3 = "Select * From employer where EIN='$ein'";
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



    <!-- Candidates Details -->
    <div class="alice-bg padding-top-60 section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="job-listing-details">
              <div class="job-title-and-info">
                <div class="title">
                  <div class="thumb">
                    <img src="<?php echo $img; ?>" class="img-fluid" alt="">
                  </div>
                  <div class="title-body">
                    <h4><?php echo $title; ?></h4>
                    <div class="info">
                      <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $company; ?></a></span>
                   
                      <span class="job-type full-time"><a href="#"><i data-feather="clock"></i><?php echo $status; ?></a></span>
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <?php  
                error_reporting(0);
if($_SESSION['usernamecand']==NULL){


}
else{
        echo "<a class='apply' data-toggle='modal' data-target='#exampleModalLong' href='#'>Apply Now</a>" ;
  
}
  ?>
                
          


<?php

error_reporting(0);
include("php/dbcon.php");
$id=$_SESSION['usercandid'];

$query = "select * from candidate where user_id='$id' ";
$result=mysqli_query($conn,$query);
if($result){
  while ($row=mysqli_fetch_array($result))
   {
$name=$row['name'];
$username=$row['username'];
$email=$row['email'];
$contact=$row['Contact'];
$path=$row['images'];
   }
}

?>

  
                <!----------MODAL------->
                 
  <div class="account-entry">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i data-feather="user"></i>Apply Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="candidatephp/appapply.php" method="post">
                  <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control" name="name" value="<?php  echo $name ?>" required>
                  </div>
                  
 <div class="form-group">
                    <input type="email" placeholder="Email" class="form-control"  value="<?php  echo $email ?>" name="email" required>
                  </div>


                  <div class="form-group">
                    <input type="text" placeholder="Contact Number" class="form-control" value="<?php  echo $contact ?>"   name="num" required>
                  </div>

                    <div class="form-group">
                    <input type="text" placeholder="Your Message.." class="form-control" name="msg" required>
                  </div>


                 
                 
              
                  <button class="button primary-bg btn-block">Submit Application</button>
                </form>
              
              </div>
            </div>
          </div>
        </div>
      
      </div>


             

             <!----------END MODAL----------->   
                












                </div>
              </div>
              <div class="details-information section-padding-60">
                <div class="row">
                  <div class="col-xl-7 col-lg-8">
                    <div class="description details-section">
                      <h4><i data-feather="align-left"></i>Job Description</h4>
                      <p><?php echo $des; ?> </p>
                    </div>
                   
                   
                    
                  
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-4">
                    <div class="information-and-share">
                      <div class="job-summary">
                        <h4>Job Summary</h4>
                        <ul>
                         
                          <li><span>Vacancy:</span> <?php echo $vacancy; ?></li>
                          <li><span>Employment Status:</span> <?php echo $status; ?></li>
                          <li><span>Experience:</span> <?php echo $exp; ?></li>
                         
                          <li><span>Salary:</span><?php echo $salary; ?></li>
                        
                        </ul>
                      </div>
                      
                      
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-7 col-lg-8">
                  <div class="company-information details-section">
                    <h4><i data-feather="briefcase"></i>About the Company</h4>
                    <ul>
                      <li><span>Company Name:</span> <?php echo $company; ?></li>
                      <li><span>Address:</span> <?php echo $address; ?></li>
                       <li><span>Company Email:</span> <?php echo $email; ?></li>
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Candidates Details End -->

   

    <!-- Call to Action -->
    
    <!-- Call to Action End -->

    <!-- Footer -->
   <?php include 'footer.php' ?>
    <!-- Footer End -->


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

<!-- Mirrored from themerail.com/html/oficiona/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:46:31 GMT -->
</html>