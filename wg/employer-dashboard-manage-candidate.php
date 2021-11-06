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
                <div class="manage-candidate-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Job Title</th>
                        <th>Status</th>
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="dashboard/images/user-1.jpg" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">Lula Wallace</a></h5>
                            <div class="info">
                              <span class="designation"><a href="#"><i data-feather="check-square"></i>Senior UI / UX Designer</a></span>
                              <span class="location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            </div>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="#" class="inbox"><i data-feather="mail"></i></a>
                          <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="dashboard/images/user-2.jpg" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">Hertha A. Sullivan</a></h5>
                            <div class="info">
                              <span class="designation"><a href="#"><i data-feather="check-square"></i>Senior UI / UX Designer</a></span>
                              <span class="location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            </div>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="#" class="inbox"><i data-feather="mail"></i></a>
                          <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="dashboard/images/user-3.jpg" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">David Johnston</a></h5>
                            <div class="info">
                              <span class="designation"><a href="#"><i data-feather="check-square"></i>Senior UI / UX Designer</a></span>
                              <span class="location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            </div>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="#" class="inbox"><i data-feather="mail"></i></a>
                          <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="dashboard/images/user-4.jpg" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">Robert Hayes</a></h5>
                            <div class="info">
                              <span class="designation"><a href="#"><i data-feather="check-square"></i>Senior UI / UX Designer</a></span>
                              <span class="location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            </div>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="#" class="inbox"><i data-feather="mail"></i></a>
                          <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="pagination-list text-center">
                    <nav class="navigation pagination">
                      <div class="nav-links">
                        <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                        <a class="page-numbers" href="#">1</a>
                        <span aria-current="page" class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                      </div>
                    </nav>                
                  </div>
                </div>
              </div>
              <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="dashboard/images/company-logo.png" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
                    <h5>Degoin</h5>
                    <span>@username</span>
                  </div>
                </div>
                <div class="profile-progress">
                  <div class="progress-item">
                    <div class="progress-head">
                      <p class="progress-on">Profile</p>
                    </div>
                    <div class="progress-body">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                      </div>
                      <p class="progress-to">70%</p>
                    </div>
                  </div>
                </div>
                 <?php include 'sidebaremp.php' ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="call-to-action-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="call-to-action-2">
              <div class="call-to-action-content">
                <h2>For Find Your Dream Job or Candidate</h2>
                <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
              </div>
              <div class="call-to-action-button">
                <a href="add-resume.php" class="button">Add Resume</a>
                <span>Or</span>
                <a href="post-job.php" class="button">Post A Job</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/datePicker.js"></script>
    <script src="dashboard/js/upload-input.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>

<!-- Mirrored from themerail.com/html/oficiona/employer-dashboard-manage-candidate.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 21:46:58 GMT -->
</html>