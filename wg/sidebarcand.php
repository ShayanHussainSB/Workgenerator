<?php
session_start();
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
$path=$row['images'];

   }
}




?>



<div class="dashboard-sidebar">
                <div class="user-info">
                  <div class="thumb">
                    <img src="<?php echo $path; ?>" class="img-fluid" alt="">
                  </div>
                  <div class="user-body">
                    <h5><?php echo $name; ?></h5>
                    <span><?php echo $username; ?></span>
                  </div>
                </div>
  <div class="dashboard-menu">
                  <ul>
                    <li ><i class="fas fa-home"></i><a href="dashboard.php">Dashboard</a></li>
                    <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.php">Edit Profile</a></li>
                    <li><i class="fas fa-file-alt"></i><a href="resume.php">Resume</a></li>
                    <li><i class="fas fa-edit"></i><a href="edit-resume.php">Add Resume</a></li>
                 
                    <li><i class="fas fa-check-square"></i><a href="dashboard-applied.php">Applied Job</a></li>
                  
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a href="php/logout.php">Logout</a></li>

                    <li><i class="fas fa-trash-alt"></i><a href="candidatephp/dltprofile.php">Delete Profile</a></li>
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