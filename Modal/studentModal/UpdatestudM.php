

                <div class="modal fade" id="edit_<?php echo $stud["s_id"]; ?>" tabindex="-1">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                 <h5 class="modal-title">Large Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             


               <div class="card">
             <div class="modal-body">
         

              <!-- No Labels Form -->
              <form class="row g-3" action="Modal/studentModal/functions/updatestudF.php" method="post" enctype="multipart/form-data">


              <input type="hidden" name ="id" value="<?php echo $stud["s_id"]; ?>" >

                <div class="col-md-6">
                  <input type="text" class="form-control" name="fname" value="<?php echo $stud["firstname"]; ?>">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="lname" value="<?php echo $stud["lastname"]; ?>">
                </div>

                <div class="col-6">
                  <input type="text" class="form-control" name="address" value="<?php echo $stud["s_address"]; ?>">
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" value="<?php echo $stud["email"]; ?>">
                </div>

                <div class="col-md-6">
                  <!-- <input type="text" class="form-control" placeholder="Gender"> -->

                  <select id="inputState" name="gender" class="form-select">
                    <option value="<?php echo $stud["gender"]; ?>"><?php echo $stud["gender"]; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>

                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="department" value="<?php echo $stud["department"]; ?>">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="yearlevel" value="<?php echo $stud["yearlevel"]; ?>">
                </div>

                <div class="col-md-6">
                  <input type="date" class="form-control" name="birthdate" value="<?php echo $stud["birthdate"]; ?>">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="status" value="<?php echo $stud["status"]; ?>">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="schoolyear" value="<?php echo $stud["schoolyear"]; ?>">
                </div>
           
              
              
                <div class="modal-footer">
                 
                  <button type="submit" class="btn btn-primary" name ="submit">Save </button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>
       



                  </div>
                </div>
              </div><!-- End Large Modal-->

