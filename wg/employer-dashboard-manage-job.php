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
                 <div class="manage-job-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Job Title</th>
                        <th>Applications</th>
                        <th>Status</th>
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
 








<?php 
  session_start();
  include('php/dbcon.php');
  $id = $_SESSION["useremp"];
  $query = "Select * From jobs Where EIN = '$id'";
  $result = mysqli_query($conn,$query);

  if($result){
  while ($row=mysqli_fetch_array($result))
   {
    $jobid=$row['job_id'];
    $query2 = "SELECT COUNT(application_id) as total FROM applications where job_id='$jobid'  ";

$result2=mysqli_query($conn,$query2);
$data=mysqli_fetch_assoc($result2);

?>
  
               


                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#"><?php echo $row['Title']; ?></a></h5>
                          <div class="info">
                            <span class="job-type temporary"><a href="#"><i data-feather="clock"></i><?php echo $row['status']; ?></a></span>
                          </div>
                        </td>
                        <td class="application"><a href="#"><?php echo $data['total']; ?> Application(s)</a></td>
                        <td class="status"><?php echo $row['status']; ?></td>
                        <td class="action">
                          <?php    echo "<a class='remove' title='Delete' href='employerphp/dlt.php?job_id=".$jobid."'><i data-feather='trash-2'></i></a>" ?>
                      
                          
                        </td>
                      </tr>


             

<?php
   }
}
 
   ?>




            
                    </tbody>
                  </table>
                </div>
           </div>
                <?php include 'sidebaremp.php' ?>
            
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
</html>