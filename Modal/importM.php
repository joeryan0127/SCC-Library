<div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Books</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="modal/function/import.php" method="post" enctype="multipart/form-data">

      <div class="modal-body">

      <div class="mb-3">
     <label for="image" class="form-label">Book file</label>
     <input type="file" name="file" class="form-control" id="file" >
    </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name ="upload">Save </button>
      </div>
      </div>
      
    </form>
    
  </div>
</div>


