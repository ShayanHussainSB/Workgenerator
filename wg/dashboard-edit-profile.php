<!doctype html>
<html lang="en">
  
<!-- Mirrored from themerail.com/html/oficiona/dashboard-edit-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:48:19 GMT -->
<?php include 'headtag.php' ?>
  <body>

  <?php include 'header.php' ?>
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

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Candidates Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Candidates Dashboard</li>
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
                <form action="candidatephp/profileedit.php" method="post" class="dashboard-form" enctype="multipart/form-data">
                  <div class="dashboard-section upload-profile-photo">
                    <div class="update-photo">
                      <img class="image" src="<?php echo $path; ?>" alt="">
                    </div>
                    <div class="file-upload">            
                      <input type="file" name="upload" class="file-input">Change Avatar
                    </div>
                  </div>
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="user-check"></i>Basic Info</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Full Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" placeholder="Full Name" value="<?php echo $name; ?>" required>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" placeholder="email@example.com" value="<?php echo $email; ?>" required>
                      </div>
                    </div>

  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Contact</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="contact" placeholder="+55 123 4563 4643" value="<?php echo $contact; ?>" required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="uname" placeholder="@username" value="<?php echo $username; ?>" required>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input  type="submit" class="button" value="Save Changes">
                      </div>
                    </div>
                   </div>
                  
                  
                   </form>
                   <form action="candidatephp/passchange.php" method="post" class="dashboard-form">

                  
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="lock"></i>Change Password</h4>
                  
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >New Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="newpass" class="form-control" placeholder="New Password">
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <input type= "submit" class="button" value="Submit">
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

<!-- Mirrored from themerail.com/html/oficiona/dashboard-edit-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:48:19 GMT -->
</html>