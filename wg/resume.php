<!doctype html>
<html lang="en">
  
<!-- Mirrored from themerail.com/html/oficiona/resume.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:48:19 GMT -->
<?php include 'headtag.php' ?>
  <body>

  <?php include 'header.php' ?>

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Resume</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Resume</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              <form action="#">
                <input type="text" placeholder="Enter Keywords">
                <button><i data-feather="search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

error_reporting(0);
include("php/dbcon.php");
$id=$_SESSION['usercandid'];

$query = "select * from candidate_profile where user_id='$id' ";
$result=mysqli_query($conn,$query);
if($result){
  while ($row=mysqli_fetch_array($result))
   {
$skill=$row['Skills'];
$des=$row['Description'];
$cat=$row['category'];
$exp=$row['Experience'];
$sal=$row['salary'];
$status=$row['Status'];


   }
}
?>

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
              
                <div class="skill-and-profile dashboard-section">
                  <div class="skill">
                    <label>Skills:</label>
                    <a href="#"><?php echo $skill ?></a>
                   
                  </div>
                
                </div>
                <div class="about-details details-section dashboard-section">
                  <h4><i data-feather="align-left"></i>About Me</h4>
                  <p><?php echo $des ?></p>
                  <div class="information-and-contact">
                    <div class="information">
                      <h4>Information</h4>
                      <ul>
                        <li><span>Category:</span> <?php echo $cat ?></li>
                      
                        <li><span>Status:</span> <?php echo $status ?></li>
                        <li><span>Experience:</span> <?php echo $exp ?></li>
                        <li><span>Salary:</span> <?php echo $sal ?></li>
                      
                      
                       
                      </ul>
                    </div>
                  </div>
                </div>
               
                
             
               
              </div>
            
          <?php include 'sidebarcand.php';   ?>
             
            </div>
          </div>
        </div>
      </div>
    </div>

   

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
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/datePicker.js"></script>
    <script src="dashboard/js/upload-input.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>

<!-- Mirrored from themerail.com/html/oficiona/resume.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:48:19 GMT -->
</html>