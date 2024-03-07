

<div class="modal fade" id="issue" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Issue Book</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
             


                    <div class="card">
            <div class="modal-body">
         

              <!-- No Labels Form -->
              <form class="row g-3" action="Modal/issueModal/issuefunctions/addissue.php" method="post" enctype="multipart/form-data">
               
                <div class="col-md-6">
                  <!-- <input type="text" class="form-control" name="s_id" placeholder="Student ID"> -->

                  <?php

                    $statement =$conn->prepare("SELECT * from tbl_students");
                    $statement->execute();
                    $stud=$statement->fetchAll()?>

               

                    <select class="selectpicker" name = "stud" data-live-search="true">

                    <option selected disabled >Choose student</option>
                        <?php foreach ($stud as $row): ?>
                      
                        
                        <option value=<?= $row['s_id'] ?> ><?= $row['firstname'] ?> <?= $row['lastname'] ?> </option>
                        <?php endforeach ?>

                      </select>


                </div>


                <div class="col-md-6">

                    <?php

                    $statement =$conn->prepare("SELECT * from tbl_books");
                    $statement->execute();
                    $book=$statement->fetchAll()?>

               
                <select class="selectpicker" name = "book" data-live-search="true">

                <option selected disabled >Choose book</option>
                    <?php foreach ($book as $row): ?>
                   
                    
                    <option value=<?= $row['b_id'] ?> ><?= $row['b_titleofbook'] ?> </option>
                    <?php endforeach ?>
            
                      </select>
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

