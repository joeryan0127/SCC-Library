<div class="modal fade" id="edit_<?php echo $books["b_isbn"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="Modal/function/update.php" method="POST" enctype="multipart/form-data">

      <div class="modal-body">
      <input type="hidden" name ="id" value="<?php echo $books["b_isbn"]; ?>" >

      <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Book Image</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" name ="Image" >
    </div>

      <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Book Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name ="name" value="<?php echo $books["b_name"]; ?>" >
    </div>

    <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Description</label>
    <input type="test" class="form-control" id="exampleFormControlInput1" name="Description" value="<?php echo $books["b_description"]; ?>">
    </div>

    <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Publish</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="Publish" value="<?php echo $books["b_publish"]; ?>">
    </div>

  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>
