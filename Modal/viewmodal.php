

<div class="modal fade" id="view_<?php echo $books["b_id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Book Info </strong></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
             

                   
            <div class="modal-body">
            <div class="group32">

              <!-- No Labels Form -->
              <form class="row g-3" action="Modal/studentModal/functions/addstudF.php" method="post" enctype="multipart/form-data">

            <div class="group">

              <div class="row align-items-start">
                    <div class="centercol">
                    <strong >book id:</strong>            
                    <h6 class ="viewtext"><?php echo $books["b_id"]; ?></h6>

                        </div>

                        <div class="centercol">
                    <strong class ="" >Date Recieved:</strong> 
                    <h6 class = "viewtext"  ><?php echo $books["b_daterecieved"]; ?></h6>
                        </div>

                        <div class="centercol">
                    <strong class ="">Class:</strong> 
                    <h6 class = "viewtext"> <?php echo $books['b_class']; ?></h6>
                        </div>

                        </div>

                        <div class="row align-items-start">
                

                    <div class="centercol">

                    <strong class ="">Author:</strong> 
                    <h6 class = "viewtext"><?php echo $books['b_author']; ?></h6>

                        </div>
                      
                       

                        <div class="centercol">
                    <strong class ="">Tittle of Book:</strong> 
                    <h6 class = "viewtext" > <?php echo $books['b_titleofbook']; ?></h6>
                        </div>

                        <div class="centercol">
                    <strong class ="">Isbn:</strong> 
                    <h6 class = "viewtext"><?php echo $books['b_isbn']; ?></h6>
                        </div>

                    </div>

                    <div class="row align-items-start">
                     
                     <div class="centercol">
                     <strong class ="">Year:</strong> 
                     <h6 class = "viewtext" > <?php echo $books['b_year']; ?></h6>
                     </div>

                     <div class="centercol">
                     <strong class ="">Quantity:</strong> 
                     <h6 class = "viewtext" > <?php echo $books['b_quantity']; ?></h6>
                     </div>

                     

                     </div>


                    </div>

                    <div class="group">

                    <div class="row align-items-start">
                

                    <div class="centercol">

                    <strong class ="">Edition:</strong> 
                    <h6 class = "viewtext" > <?php echo $books['b_edition']; ?></h6>
                   
                        </div>
                      
                        <div class="centercol">
                    <strong class ="">Volumes:</strong> 
                    <h6 class = "viewtext" > <?php echo $books['b_volumes']; ?></h6>
         
                        </div>
                        <div class="centercol">
                    <strong class ="">Page:</strong> 
                    <h6 class = "viewtext" > <?php echo $books['b_page']; ?></h6>
                    </div>
                   
                      </div>

                     <div class="row align-items-start">
                   

                    <div class="centercol">

                    <strong class ="">Source of fund:</strong> 
                    <h6 class = "viewtext" > <?php echo $books['b_sourceoffund']; ?></h6>
               
                        </div>
                      
                        <div class="centercol">

                        <strong class ="">Costprice:</strong> 
                        <h6 class = "viewtext" > <?php echo $books['b_costprice']; ?></h6>

                            </div>

                            <div class="centercol">

                        <strong class ="">Publisher:</strong> 
                        <h6 class = "viewtext" > <?php echo $books['b_publisher']; ?></h6>
                        </div>
                        </div>
              

                      

                        <div class="row align-items-start">
                     
                        <div class="centercol">
                        <strong class ="">Section:</strong> 
                        <h6 class = "viewtext" > <?php echo $books['b_section']; ?></h6>
                        </div>

                        <div class="centercol">
                        <strong class ="">Remark:</strong> 
                        <h6 class = "viewtext" > <?php echo $books['b_remark']; ?></h6>
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

