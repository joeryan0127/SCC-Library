

<div class="modal fade" id="edit_<?php echo $books["b_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Book</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
             


                    <div class="card">
            <div class="modal-body">
         


              <form class="row g-3 needs-validation" novalidate action="modal/function/update.php" method="post" enctype="multipart/form-data">

              <input type="hidden" name ="id" value="<?php echo $books["b_id"]; ?>" >

              <div class="col-md-12">
                  <label for="validationCustom01" class="form-label">Image</label>
                  <input type="file" class="form-control" id="validationCustom01" name="Image" required>
                  <div class="invalid-feedback">
                  Please Provide Image.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Data Recieved</label>
                  <input type="date" class="form-control" id="validationCustom01" name="daterecieved" value="<?php echo $books['b_daterecieved']?>" required>
                  <div class="invalid-feedback">
                  Please Provide date.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Class</label>
                  <input type="text" class="form-control" id="validationCustom02" name="class" value="<?php echo $books['b_class']?>" required>
                  <div class="invalid-feedback">
                  Please Provide class.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Author</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"  name="author" value="<?php echo $books['b_author']?>"  required>
                    <div class="invalid-feedback">
                      Please Provide a author.
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                <label for="validationCustomUsername" class="form-label">Tittle of book</label>
                  <div class="input-group has-validation">
                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="tittle" value="<?php echo $books['b_titleofbook']?>" required>
                    <div class="invalid-feedback">
                      Please Provide a Tittle.
                    </div>
                  </div>
                </div>

             

                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">ISBN</label>
                  <input type="text" class="form-control" id="validationCustom05" name="isbn"  value="<?php echo $books['b_isbn']?>" required>
                  <div class="invalid-feedback">
                    Please provide a ISBN.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Edition</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="edition" value="<?php echo $books['b_edition']?>" required>
                  <div class="invalid-feedback">
                    Please provide a Edition.
                  </div>
                </div>

                
                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Volume</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="volume" value="<?php echo $books['b_volumes']?>" required>
                  <div class="invalid-feedback">
                    Please provide a Volume.
                  </div>
                </div>

                
                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Pages</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="page" value="<?php echo $books['b_page']?>" required>
                  <div class="invalid-feedback">
                    Please provide a pages.
                  </div>
                </div>


                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Source of fund</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="fund" value="<?php echo $books['b_sourceoffund']?>" required>
                  <div class="invalid-feedback">
                    Please provide a source.
                  </div>
                </div>

            
                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Publisher</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="publisher" value="<?php echo $books['b_publisher']?>" required>
                  <div class="invalid-feedback">
                    Please provide a Publisher.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Cost price</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="price" value="<?php echo $books['b_costprice']?>" required>
                  <div class="invalid-feedback">
                    Please provide a price.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Year</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="year" value="<?php echo $books['b_year']?>" required>
                  <div class="invalid-feedback">
                    Please provide a year.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Quantity</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="quantity" value="<?php echo $books['b_quantity']?>" required>
                  <div class="invalid-feedback">
                    Please provide a quantity.
                  </div>
                </div>

        

                <div class="modal-footer">
                  <button class="btn btn-primary" name="submit" type="submit">Save</button>
                </div>
              </form>


            </div>
          </div>
       



                  </div>
                </div>
              </div><!-- End Large Modal-->
