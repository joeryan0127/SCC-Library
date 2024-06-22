<?php
include "Header/header.php";
include "Db/connection.php";
?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Books Tables</h1>

  <?php
                if(isset($_GET["error"])){
                  if($_GET["error"]== "AddedbookSuccess"){
                    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                   Added Successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                      }


                  if($_GET["error"]== "UpdatedSuccessfully"){
                      // echo "<script> alert('Updated Successfully');</script>";
                      echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <i class="bi bi-check-circle me-1"></i>
                     Updated Successfully
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                        }


                            if($_GET["error"]== "Deleted"){
                              // echo "<script> alert('Book Deleted');</script>";

                              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <i class="bi bi-check-circle me-1"></i>
                             Deleted Successfully
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';

                               }

                             if($_GET["error"]== "Nofile"){
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                          No File attached
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                    }

                                    if($_GET["error"]== "Uploaded"){
                                      // echo "<script> alert('File is uploaded');</script>";

                                      echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <i class="bi bi-check-circle me-1"></i>
                                    File Uploaded Successfully
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                                        }

                    }
                  ?>



</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">







          <!-- <h5 class="card-title">Datatables</h5>
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
        -->
          <div class="side">

        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">
          <i class="zmdi zmdi-plus"></i><i class="bi bi-plus-square"></i></button>
 
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#import">
          <i class="zmdi zmdi-plus"></i><i class="bi bi-upload"></i></button>
</div>
   
                                     
           <?php
           include("Modal/AddBookM.php");
           include("Modal/importM.php");
           ?>


          <!-- Table with stripped rows -->
          <table class="table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Book Name</th>
<!--                
                <th scope="col">Edition</th> -->
                <th scope="col">Publisher</th>
                <th scope="col">Quantity</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
              </tr>
            </thead>  
            <?php
                                  $statement=$conn->prepare("SELECT * FROM tbl_books WHERE b_status != 'Deleted'");
                                  $statement->execute();
                                  while($books=$statement->fetch()){


                                            ?>

         
              <tr>
                <td><?php echo $books['b_id'] ?></td>
                <td><?php echo $books['b_titleofbook'] ?></td>
                
                <!-- <td><?php echo $books['b_edition'] ?></td> -->
                <td><?php echo $books['b_publisher'] ?></td>
                <td><?php echo $books['b_quantity'] ?></td>
                <td><?php echo $books['b_author'] ?></td>
             
                <td>
            
                <div style="position:absolute">

          <a href="#view_<?php echo $books["b_id"]; ?>" class="btn btn-secondary btn-sm" data-bs-toggle="modal"><i class="bi bi-eye"></i></a>
           <?php include("Modal/viewmodal.php"); ?> 

         <a href="#edit_<?php echo $books["b_id"]; ?>" class="btn btn-success btn-sm" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
           <?php include("Modal/UpdateBookM.php"); ?> 

      
         
              </div>

                </td>

              </tr>
           
           
            <?php
                          }
                          ?>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->




<?php
include "footer/footer.php";
?>