

<div class="modal fade" id="view_<?php echo $stud["s_id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Student Info</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
             


                   
            <div class="modal-body">
            <div class="group32">

              <!-- No Labels Form -->
              <form class="row g-3" action="Modal/studentModal/functions/addstudF.php" method="post" enctype="multipart/form-data">

<div class="group">

              <div class="row align-items-start">
                    <div class="centercol">
                    <label >Student id:</label>            
                    <h6 class ="viewtext"><?php echo $stud["s_id"]; ?></h6>

                        </div>

                        <div class="centercol">
                    <label class ="" >First Name:</label> 
                    <h6 class = "viewtext"  ><?php echo $stud["firstname"]; ?></h6>
                        </div>

                        <div class="centercol">
                    <label class ="">Last Name:</label> 
                    <h6 class = "viewtext"> <?php echo $stud['lastname']; ?></h6>
                        </div>

                        </div>

                        <div class="row align-items-start">
                

                    <div class="centercol">

                    <label class ="">Address:</label> 
                    <h6 class = "viewtext"><?php echo $stud['s_address']; ?></h6>

                        </div>
                      
                       

                        <div class="centercol">
                    <label class ="">Age:</label> 
                    <h6 class = "viewtext" > <?php echo $age; ?></h6>
                        </div>

                        <div class="centercol">
                    <label class ="">Email:</label> 
                    <h6 class = "viewtext"><?php echo $stud['email']; ?></h6>
                        </div>

                    </div>

                    </div>

                    <div class="group">

                    <div class="row align-items-start">
                

                    <div class="centercol">

                    <label class ="">Gender:</label> 
                    <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    <h6 class = "viewtext" > <?php echo $stud['gender']; ?></h6>
                   
                        </div>
                      
                        <div class="centercol">
                    <label class ="">Department:</label> 
                    <h6 class = "viewtext" > <?php echo $stud['department']; ?></h6>
         
                        </div>
                        <div class="centercol">
                    <label class ="">Year Level:</label> 
                    <h6 class = "viewtext" > <?php echo $stud['yearlevel']; ?></h6>
                    </div>
                   
                      </div>

                     <div class="row align-items-start">
                   

                    <div class="centercol">

                    <label class ="">Birthdate:</label> 
                    <h6 class = "viewtext" > <?php echo $stud['birthdate']; ?></h6>
               
                        </div>
                      
                        <div class="centercol">

                        <label class ="">Status:</label> 
                        <h6 class = "viewtext" > <?php echo $stud['status']; ?></h6>

                            </div>

                            <div class="centercol">

                        <label class ="">School year:</label> 
                        <h6 class = "viewtext" > <?php echo $stud['schoolyear']; ?></h6>
                        </div>
                        </div>
              
                        </div>
                <div class="modal-footer">
                 
                  <!-- <button type="submit" class="btn btn-primary" name ="submit">Save </button> -->
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>
       



                  </div>
                </div>
              </div><!-- End Large Modal-->

