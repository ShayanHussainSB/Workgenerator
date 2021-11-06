<!doctype html>
<html lang="en">
<?php include 'headtag.php' ?>
  <body>

 <?php include 'header.php' ?>
  <?php 
  session_start();
include('php/dbcon.php');
  $id = $_SESSION["useremp"];
  $query = "Select * From employer Where EIN = '$id'";
  $data = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($data);
   ?>
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
                <form action="employerphp/profileedit.php" method="post" class="dashboard-form" enctype="multipart/form-data">
                  <div class="dashboard-section upload-profile-photo">
                    <div class="update-photo">
                      <img class="image" src="<?php echo $row['image'];?>" alt="">
                    </div>
                    <div class="file-upload">            
                      <input type="file" class="file-input" name="uploadimage" required="">Change Avatar
                    </div>
                  </div>
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="user-check"></i>Basic Info</h4>
                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">EIN</label>
                      <div class="col-sm-9">
                        <input type="text" name="EIN" class="form-control" placeholder="EIN" value="<?php echo $row['EIN'];?>" readonly>
                      </div>
                    </div>
  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" required="" name="Name" class="form-control" placeholder="Name" value="<?php echo $row['Name'];?>">
                      </div>
                    </div>

                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Address</label>
                      <div class="col-sm-9">
                        <input type="text" required="" name="Email" class="form-control" placeholder="email@example.com" value="<?php echo $row['Email_ID'];?>">
                      </div>
                    </div>

                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="text" required="" name="Phone" class="form-control" placeholder="+55 123 4563 4643" value="<?php echo $row['Contact'];?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" required="" name="Username" class="form-control" placeholder="@username" value="<?php echo $row['Username'];?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Company Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="Cmp_Name"  required=""  class="form-control" placeholder="Company Name" value="<?php echo $row['Company_name'];?>">
                      </div>
                    </div>
                    
                  
                  
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <input type="text" required="" name="adrs" class="form-control" placeholder="Address" value="<?php echo $row['Address'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Number Of Employees</label>
                      <div class="col-sm-9">
                        <input type="text" required="" name="Num_of_emp" class="form-control" placeholder="Number Of Emp" value="<?php echo $row['Num_of_emp'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Type Of Organziation</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" required="" name="Type_of_org" placeholder="Type Of Organziation"><?php echo $row['Type_of_org'];?></textarea>
                      </div>
                    </div>
                       <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <button class="button" name="btn">Save Changes</button>
                      </div>
                    </div>
                  </div>
                 </form>

                 <form action="employerphp/changepass.php" method="post" class="dashboard-form">
                 
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="lock"></i>Change Password</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">New Password</label>
                      <div class="col-sm-9">
                        <input type="password" required="" name="npass" class="form-control" placeholder="New Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <button class="button" name="passbtn">Update</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
             
                <?php include 'sidebaremp.php' ?>
             
            </div>
          </div>
        </div>
      </div>
    </div>

   
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

<!-- Mirrored from themerail.com/html/oficiona/employer-dashboard-edit-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:46:39 GMT -->
</html>