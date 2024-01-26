

 <div class="modal fade" id="addstudModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Large Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
             


                    <div class="card">
            <div class="modal-body">
         

              <!-- No Labels Form -->
              <form class="row g-3" action="Modal/studentModal/functions/addstudF.php" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="fname" placeholder="First Name">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="lname" placeholder="Last Name">
                </div>

                <div class="col-6">
                  <input type="text" class="form-control" name="address" placeholder="Address">
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="col-md-6">
                  <!-- <input type="text" class="form-control" placeholder="Gender"> -->

                  <select id="inputState" name="gender" class="form-select">
                    <option selected disabled>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>

                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="department" placeholder="Department">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="yearlevel" placeholder="Year Level">
                </div>

                <div class="col-md-6">
                  <input type="date" class="form-control" name="birthdate" placeholder="Birthdate">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="status" placeholder="Status">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="schoolyear" placeholder="School Year">
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

