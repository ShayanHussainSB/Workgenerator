<!doctype html>
<html lang="en">
  
<!-- Mirrored from themerail.com/html/oficiona/edit-resume.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:48:19 GMT -->
<?php include 'headtag.php' ?>
  <body>

  <?php include 'header.php' ?>





    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Add Resume</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Resume</li>
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
               <br><br><br>
<?php
error_reporting(0);
include("php/dbcon.php");
$id=$_SESSION['usercandid'];

$query = "select * from candidate_profile where user_id='$id' ";
$result=mysqli_query($conn,$query);
if($result){
  while ($row=mysqli_fetch_array($result))
   {

$cat=$row['category'];
$status=$row['Status'];


   }
}
?>


                  <form action="candidatephp/editresume.php" method="post"  enctype="multipart/form-data">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><b>Write Yourself</b></label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" name="about" placeholder="Write Yourself" required></textarea>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><b>Category</b></label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="cate" required >
                                <option selected="" disabled>Select Category</option>
                                <option>Accounting / Finance</option>
                                <option>Health Care</option>
                                <option>Garments / Textile</option>
                                <option>Telecommunication</option>
                                <option>Engineering and Technology</option>
                              </select>
                                </div>
                              </div>
                             
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><b>Status</b></label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="status" placeholder="Full Time" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><b>Experience</b></label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="exp" placeholder="3 Year" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><b>Salary Range</b></label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  name="salary" placeholder="30k - 40k" required>
                                </div>
                              </div>
                                 <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><b>Skills</b></label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="skills" placeholder="HTML | CSS" required>
                                </div>
                              </div>

 <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><b>Resume</b></label>
                                <div class="col-sm-9">
                                  <input type="file" name="file" required >
                                </div>
                              </div>

                              


                             
                <br>
                              
                              
                             
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button  type="submit" class="button" <?php  

if($cat!=NULL && $status!=NULL){
  echo "disabled";

}
                                     ?>>Save Changes</button>

                                     <?php  

if($cat!=NULL && $status!=NULL){
  echo "<span style='color:red'>You Have Already Added Resume!</span>";
}
  ?>
                                 
                                  </div>
                                </div>
                              </div>
                            </form>
                
              
               
               
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

<!-- Mirrored from themerail.com/html/oficiona/edit-resume.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:48:19 GMT -->
</html>