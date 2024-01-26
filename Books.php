<?php
include "Header/header.php";
include "Db/connection.php";
?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
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


            <?php
                if(isset($_GET["error"])){
                  if($_GET["error"]== "AddedSuccess"){
                      echo "<script> alert('Book Added Successfully');</script>";
                      }

                  if($_GET["error"]== "UpdatedSuccessfully"){
                      echo "<script> alert('Updated Successfully');</script>";
                        }
                        if($_GET["error"]== "UpdateSuccess"){
                          echo "<script> alert('Updated Successfuly');</script>";
                            }
                            if($_GET["error"]== "Deleted"){
                              echo "<script> alert('Book Deleted');</script>";
                                }
                                if($_GET["error"]== "Nofile"){
                                  echo "<script> alert('No file Attached');</script>";
                                    }
                                    if($_GET["error"]== "Uploaded"){
                                      echo "<script> alert('File is uploaded');</script>";
                                        }
                    }
                  ?>




          <!-- Table with stripped rows -->
          <table class="table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Book Name</th>
                <th scope="col">Description</th>
                <th scope="col">Publish</th>
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
                <td><?php echo $books['b_isbn'] ?></td>
                <td><?php echo $books['b_name'] ?></td>
                <td><?php echo $books['b_description'] ?></td>
                <td><?php echo $books['b_publish'] ?></td>
                <td><?php echo $books['b_quantity'] ?></td>
                <td><?php echo $books['b_author'] ?></td>
             
                <td>

           <a href="#edit_<?php echo $books["b_isbn"]; ?>" class="btn btn-success btn-sm" data-bs-toggle="modal"><span class="fa fa-edit"></a>
           <?php include("Modal/UpdateBookM.php"); ?> 

          <a href="#del_<?php echo $books["b_isbn"]; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><i class="bi bi-trash3"></i></a>
          <?php include("Modal/DeleteBookM.php"); ?>

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