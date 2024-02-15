<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="modal/function/add.php" method="post" enctype="multipart/form-data">

      <div class="modal-body">

      <div class="mb-3">
     <label for="image" class="form-label">Book Image</label>
     <input type="file" name="image" class="form-control" id="image" required>
    </div>

      <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Book Name</label>
    <input type="text" class="form-control"  name ="bname" required >
    </div>

    <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Description</label>
    <input type="text" class="form-control" name="Description" required>
    </div>

    <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Publish</label>
    <input type="text" class="form-control"  name="Publish" required>
    </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name ="submit">Save </button>
      </div>
      </div>
      
    </form>
    
  </div>
</div>


