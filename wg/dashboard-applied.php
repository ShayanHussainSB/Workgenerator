


<!doctype html>
<html lang="en">
  
<!-- Mirrored from themerail.com/html/oficiona/dashboard-applied.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:48:19 GMT -->
<?php include 'headtag.php' ?>
  <body>

 <?php include 'header.php' ?>



    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Candidate Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Candidate Dashboard</li>
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
    <!-- Breadcrumb End -->



    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <div class="dashboard-applied">

                  <?php

error_reporting(0);
include("../php/dbcon.php");
$id=$_SESSION['usercandid'];

$query = "SELECT COUNT(application_id) as total FROM applications where user_id='$id'  ";

$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);


  



?>




 




                  <h4 class="apply-title"><?php echo $data['total']; ?> Job Applied</h4>
                  <div class="dashboard-apply-area">

<?php

error_reporting(0);
include("php/dbcon.php");
$id=$_SESSION['usercandid'];

$query = "select * from applications where user_id='$id' ";
$result=mysqli_query($conn,$query);
if($result){
  while ($row=mysqli_fetch_array($result))
   {
$jobid=$row['job_id'];
   }
 }

$query2 = "select * from jobs where job_id='$jobid' ";
$result2=mysqli_query($conn,$query2);
if($result2){
  while ($row=mysqli_fetch_array($result2))
   {
    $title=$row['Title'];
    $status=$row['status'];
    $images=$row['images'];

?>
 <div class="dashboard-apply-area">


                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="<?php echo $images ?>" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="#"><?php echo $title ?></a></h4>
                          <div class="info">
                           
                            <span class="job-type full-time"><a href="#"><i data-feather="clock"></i><?php echo $status ?></a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
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

<!-- Mirrored from themerail.com/html/oficiona/dashboard-applied.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:48:19 GMT -->
</html>