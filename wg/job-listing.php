<!doctype html>
<html lang="en">
  
<?php include 'headtag.php' ?>
  <body>

  <?php include 'header.php' ?>

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Job Listing</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Job Listing</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Job Listing -->
    <div class="alice-bg section-padding-bottom">
      <div class="container">
        <div class="row no-gutters">
          <div class="col">
            <div class="job-listing-container">
              <div class="filtered-job-listing-wrapper">
                <div class="job-view-controller-wrapper">
                  <div class="job-view-controller">
                    <div class="controller list active">
                      <i data-feather="menu"></i>
                    </div>
                    <div class="controller grid">
                      <i data-feather="grid"></i>
                    </div>
                   
                  </div>
                 
                </div>
                <div class="job-filter-result">

                  <?php 
  session_start();
  include('php/dbcon.php');
  
  $query = "Select * From jobs";
  $result = mysqli_query($conn,$query);

  if($result){
  while ($row=mysqli_fetch_array($result))
   {
$jobid= $row['job_id'];

 
 $query2 = "Select * From jobs where job_id='$jobid'";
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
   
   }
 }     
?>

                  <div class="job-list">
                    <div class="thumb">
                      <a href="#">
                        <img src="<?php echo $row['images']; ?> " class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="#"><?php echo $row['Title']; ?> </a></h4>
                        <div class="info">

                         
                          <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $company ?></a></span>
                     
                          <span class="job-type temporary"><a href="#"><i data-feather="clock"></i><?php echo $row['status']; ?> </a></span>
                        </div>
                      </div>
                      <div class="more">
                        <div class="buttons">

  <?php  
                error_reporting(0);
if($_SESSION['usernamecand']==NULL){


}
else{
        echo "<a class='button'  href='job-details.php?job_id=".$jobid."'>Apply Now</a>" ;
  
}
  ?>













                          
                          
                        </div>
                       
                      </div>
                    </div>
                  </div>
                 
                 
                 <?php }} ?>
                
                 
                </div>
             
              </div>
              <div class="job-filter-wrapper">
                <div class="selected-options same-pad">
                  <div class="selection-title">
                    <h4>You Selected</h4>
                    <a href="#">Clear All</a>
                  </div>
                  <ul class="filtered-options">
                  </ul>
                </div>
                <div class="col-md-12">
                <img src="images/footerlogo.png" style="width: 190px;height: 70px; margin-top:50px;" alt="">       
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Job Listing End -->

   

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

<!-- Mirrored from themerail.com/html/oficiona/job-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:46:29 GMT -->
</html>