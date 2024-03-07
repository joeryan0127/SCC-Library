<div class="modal fade" id="del_<?php echo $issue["i_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Return Book?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- <div class="modal-body"> -->
<form action="Modal/issueModal/issuefunctions/deleteissueF.php" method="POST">

<input type="hidden" name="id" value= "<?php echo $issue["i_id"]; ?>">
<input type="hidden" name="book" value= "<?php echo $issue["b_id"]; ?>">
<input type="hidden" name="status" value= "<?php echo $issue["i_status"]; ?>">


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger" name="Delete">Yes</button>
      </div>
      
    </form>
    </div>
  </div>
</div>
