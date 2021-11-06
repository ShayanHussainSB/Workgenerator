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
              <h1>Employer Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employer Dashboard</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <div class="dashboard-section user-statistic-block">


                   <?php

error_reporting(0);
include("../php/dbcon.php");
$id=$_SESSION['useremp'];

$query = "SELECT COUNT(job_id) as total FROM jobs where EIN='$id'  ";

$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);


  



?>
                  <div class="user-statistic">
                    <i data-feather="command"></i>




                    <h3><?php echo $data['total']; ?></h3>
                    <span>Total Job Posted</span>
                  </div>
                
                  
                </div>
                <div class="dashboard-section dashboard-view-chart">
                  <canvas id="view-chart" width="400" height="200"></canvas>
                </div>
                <div class="dashboard-section dashboard-recent-activity">
                  <h4 class="title">Recent Activity</h4>
                  <div class="activity-list">
                    <i class="fas fa-bolt"></i>
                    <div class="content">
                      <h5>Your Resume Updated!</h5>
                      <span class="time">5 hours ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-arrow-circle-down"></i>
                    <div class="content">
                      <h5>Someone downloaded your resume.</h5>
                      <span class="time">11 hours ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-check-square"></i>
                    <div class="content">
                      <h5>You applied for Project Manager @homeland</h5>
                      <span class="time">11 hours ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-check-square"></i>
                    <div class="content">
                      <h5>You applied for Project Manager @homeland</h5>
                      <span class="time">5 hours ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-user"></i>
                    <div class="content">
                      <h5>You changed password successfuly</h5>
                      <span class="time">2 days ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-heart"></i>
                    <div class="content">
                      <h5>Someone bookmarked you</h5>
                      <span class="time">3 days ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                </div>
              </div>
          
<?php include 'sidebaremp.php'; ?>


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

<!-- Mirrored from themerail.com/html/oficiona/employer-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:46:39 GMT -->
</html>