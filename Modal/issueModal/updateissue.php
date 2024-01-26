

<div class="modal fade" id="edit_<?php echo $issue["i_id"]; ?>" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Large Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
             
           

                    <div class="card">
                    <div class="modal-body">
         

              <!-- No Labels Form -->
              <form class="row g-3" action="Modal/issueModal/issuefunctions/updateissueF.php" method="post" enctype="multipart/form-data">
             
             
              <div class="col-md-6">
                  <!-- <input type="text" class="form-control" name="s_id" placeholder="Student ID"> -->

               
                  <input type = "hidden" name="id" class="form-control" Value="<?php echo $issue["i_id"]; ?>"  required>

                  <input type = "hidden" name="book_id" class="form-control" Value="<?php echo $issue["book_id"]; ?>"  required>

                    <input type = "text" name="stud" list="stud" class="form-control" Value="<?php echo $issue["s_id"]; ?>"  required>
                    <datalist id="stud">
                    <?php foreach ($stud as $row): ?>
                    <option value=<?= $row['s_id'] ?> > <?= $row['s_id'] ?> <?= $row['firstname'] ?> <?= $row['lastname'] ?></option>
                    <?php endforeach ?>
                    </datalist>  

                </div>


                <div class="col-md-6">

                    <?php

                  ?>

                  <input type = "text" name="book" list="book" class="form-control"  Value="<?php echo $issue["book_id"]; ?>"  required>
                  <datalist id="book">
                    <?php foreach ($book as $row): ?>
                    <option value=<?= $row['b_isbn'] ?> > <?= $row['b_isbn'] ?> <?= $row['b_name'] ?> </option>
                    <?php endforeach ?>
                    </datalist>  
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

