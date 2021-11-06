  <?php 
  session_start();
include('php/dbcon.php');
  $id = $_SESSION["useremp"];
  if ($id == "") {
    header("Location:index.php");
  }
  else{
  $query = "Select * From employer Where EIN = '$id'";
  $data = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($data);
}
   ?>
  <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="<?php echo $row['image'];?>" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
                    <h5><?php echo $row['Name'];?></h5>
                    <span><?php echo $row['Username'];?></span>
                  </div>
                </div>
  
                <div class="dashboard-menu">
                  <ul>
                    <li><i class="fas fa-home"></i><a href="employer-dashboard.php">Dashboard</a></li>
                    <li><i class="fas fa-user"></i><a href="employer-dashboard-edit-profile.php">Edit Profile</a></li>
                    <li><i class="fas fa-briefcase"></i><a href="employer-dashboard-manage-job.php">Manage Jobs</a></li>
                   
                   
                    <li><i class="fas fa-plus-square"></i><a href="employer-dashboard-post-job.php">Post New Job</a></li>
                 
                  </ul>
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a href="php/logout.php">Logout</a></li>
                    <li><i class="fas fa-trash-alt"></i><a href="employerphp/delete.php">Delete Profile</a></li>
                  </ul>
                  <!-- Modal -->
                  <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h4><i data-feather="trash-2"></i>Delete Account</h4>
                          <p>Are you sure! You want to delete your profile. This can't be undone!</p>
                          <form action="#">
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="buttons">
                              <button class="delete-button">Save Update</button>
                              <button class="">Cancel</button>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" checked="">
                              <label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>