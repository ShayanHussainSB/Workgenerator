<!doctype html>
<html lang="en">
<?php include 'headtag.php'; ?>

  <body>

    <?php include 'header.php';  ?>
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
                <form action="employerphp/postjob.php" method="post" class="dashboard-form job-post-form" enctype="multipart/form-data">
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="user-check"></i>Post A Job</h4>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Job Title</label>
                      <div class="col-md-9">
                        <input type="text" required="" class="form-control" name="title" placeholder="Your job title here">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Job Category</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <select class="form-control" required="" name="category">
                                <option selected="" disabled="">Select Category</option>
                                <option>Accounting / Finance</option>
                                <option>Health Care</option>
                                <option>Garments / Textile</option>
                                <option>Telecommunication</option>
                                <option>Engineering and Technology</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                        
                      
                         
                        
                        </div>
                      </div>
                    </div>
                  
                   
                   
                   
                    <div class="row">
                      <label class="col-md-3 col-form-label">Job Salary</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" required="" name="salary" class="form-control" placeholder="Salary" name="">
                            </div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>

  <div class="row">
                      <label class="col-md-3 col-form-label">Job Experience</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" required="" name="experience" class="form-control" placeholder="Experience">
                            </div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>



                     <div class="row">
                      <label class="col-md-3 col-form-label">Job Skills</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" required="" name="skills" class="form-control" placeholder="Skills">
                            </div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>


                      <div class="row">
                      <label class="col-md-3 col-form-label">Job Role</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" required="" name="role" class="form-control" placeholder="Role">
                            </div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>

                      <div class="row">
                      <label class="col-md-3 col-form-label">Job Description</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" required="" name="description" class="form-control" placeholder="Description">
                            </div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>


 <div class="row">
                      <label class="col-md-3 col-form-label">Status</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" required="" name="status" class="form-control" placeholder="Status">
                            </div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>


                     <div class="row">
                      <label class="col-md-3 col-form-label">Image</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="file"  name="upload" required>
                            </div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>

                  
                    <br>
                  
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">Post Your Job</button>
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

   

   <?php include 'footer.php';  ?>

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
    <script src="assets/js/html5-simple-date-input-polyfill.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/datePicker.js"></script>
    <script src="dashboard/js/upload-input.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>

  </body>

<!-- Mirrored from themerail.com/html/oficiona/employer-dashboard-post-job.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:47:03 GMT -->
</html>