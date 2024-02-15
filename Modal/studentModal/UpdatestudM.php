

                <div class="modal fade" id="edit_<?php echo $stud["s_id"]; ?>" tabindex="-1">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                 <h5 class="modal-title">Update Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             


               <div class="card">
             <div class="modal-body">
         
              <form class="row g-3 needs-validation" novalidate action="Modal/studentModal/functions/updatestudF.php" method="post" enctype="multipart/form-data">

              <input type="hidden" name ="id" value="<?php echo $stud["s_id"]; ?>" >

                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationCustom01" name="fname"  value="<?php echo $stud["firstname"]; ?>" required>
                  <div class="invalid-feedback">
                  Please Provide First name.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" name="lname" value="<?php echo $stud["lastname"]; ?>" required>
                  <div class="invalid-feedback">
                  Please Provide Last name.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Address</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"  name="address"  value="<?php echo $stud["s_address"]; ?>"required>
                    <div class="invalid-feedback">
                      Please Provide a valid address.
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                <label for="validationCustomUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="email" value="<?php echo $stud["email"]; ?>" required>
                    <div class="invalid-feedback">
                      Please Provide a Email.
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="validationCustom04" class="form-label">Gender</label>
                  <select class="form-select" id="validationCustom04" name="gender" required>
                    <option value="<?php echo $stud["gender"]; ?>"><?php echo $stud["gender"]; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a provide gender.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label">Department</label>
                  <select class="form-select" id="validationCustom04" name="department" required>
                    <option value="<?php echo $stud["department"]; ?>"><?php echo $stud["department"]; ?></option>
                    <option value="BSED">BSED</option>
                    <option value="BSIT">BSIT</option>
                    <option value="BEED">BEED</option>
                    <option value="BSBA">BSBA</option>
                    <option value="BSCRIM">BSCRIM</option>
                    <option value="BSHTM">BSHTM</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a provide Department.
                  </div>
                </div>

                <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Year Level</label>
                  <select class="form-select" id="validationCustom04" name="yearlevel" required>
                    <option value="<?php echo $stud["yearlevel"]; ?>"><?php echo $stud["yearlevel"]; ?></option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a provide yearlevel.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Status</label>
                  <input type="text" class="form-control" id="validationCustom05" name="status" value="<?php echo $stud["status"]; ?>" required>
                  <div class="invalid-feedback">
                    Please provide a Status.
                  </div>
                </div>


                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Birthdate</label>
                  <input type="date" class="form-control" id="validationCustom05"  name="birthdate" value="<?php echo $stud["birthdate"]; ?>" required>
                  <div class="invalid-feedback">
                    Please provide a  Birthdate.
                  </div>
                </div>

                <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Acad Year</label>
                  <select class="form-select" id="validationCustom04" name="schoolyear" required>
                    <option value="<?php echo $stud["schoolyear"]; ?>"><?php echo $stud["schoolyear"]; ?></option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a provide Acad Year.
                  </div>
                </div>


                <div class="modal-footer">
                  <button class="btn btn-primary" name="submit" type="submit">Update</button>
                </div>
              </form>




            </div>
          </div>
       



                  </div>
                </div>
              </div><!-- End Large Modal-->

