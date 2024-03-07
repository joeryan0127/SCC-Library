

 <div class="modal fade" id="addModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Book</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
             


                    <div class="card">
            <div class="modal-body">
         


              <form class="row g-3 needs-validation" novalidate action="modal/function/add.php" method="post" enctype="multipart/form-data">

              <div class="col-md-12">
                  <label for="validationCustom01" class="form-label">Image</label>
                  <input type="file" class="form-control" id="validationCustom01" name="Image" required>
                  <div class="invalid-feedback">
                  Please Provide Image.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Data Recieved</label>
                  <input type="date" class="form-control" id="validationCustom01" name="daterecieved" required>
                  <div class="invalid-feedback">
                  Please Provide date.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Class</label>
                  <input type="text" class="form-control" id="validationCustom02" name="class" required>
                  <div class="invalid-feedback">
                  Please Provide class.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Author</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"  name="author" required>
                    <div class="invalid-feedback">
                      Please Provide a author.
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                <label for="validationCustomUsername" class="form-label">Tittle of book</label>
                  <div class="input-group has-validation">
                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="tittle" required>
                    <div class="invalid-feedback">
                      Please Provide a Tittle.
                    </div>
                  </div>
                </div>

             

                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">ISBN</label>
                  <input type="text" class="form-control" id="validationCustom05" name="isbn" required>
                  <div class="invalid-feedback">
                    Please provide a ISBN.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Edition</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="edition" required>
                  <div class="invalid-feedback">
                    Please provide a Edition.
                  </div>
                </div>

                
                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Volume</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="volume" required>
                  <div class="invalid-feedback">
                    Please provide a Volume.
                  </div>
                </div>

                
                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Pages</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="page" required>
                  <div class="invalid-feedback">
                    Please provide a pages.
                  </div>
                </div>


                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Source of fund</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="fund" required>
                  <div class="invalid-feedback">
                    Please provide a source.
                  </div>
                </div>

            
                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Publisher</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="publisher" required>
                  <div class="invalid-feedback">
                    Please provide a Publisher.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Cost price</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="price" required>
                  <div class="invalid-feedback">
                    Please provide a price.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Year</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="year" required>
                  <div class="invalid-feedback">
                    Please provide a year.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Quantity</label>
                  <input type="text" class="form-control" id="validationCustom05"  name="quantity" required>
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





              