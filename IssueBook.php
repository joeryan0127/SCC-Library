<?php
include "Header/header.php";
include "Db/connection.php";





$statement =$conn->prepare("SELECT * from tbl_students");
$statement->execute();
$stud=$statement->fetchAll();

$statement =$conn->prepare("SELECT * from tbl_books");
$statement->execute();
$book=$statement->fetchAll();

?>






<main id="main" class="main">

<div class="pagetitle">
  <h1>Issue Tables</h1>
 
  <?php
     if(isset($_GET["error"])){
       if($_GET["error"]== "AlreadyReturned"){

          //  echo "<script> alert('Book Already Returned');</script>";

           echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <i class="bi bi-check-circle me-1"></i>
           Book Already Returned
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';

           }

       if($_GET["error"]== "AddedSuccess"){
          // echo "<script> alert('Book is issued');</script>";

         echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Added Successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

            }
            if($_GET["error"]== "UpdateSuccess"){

              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
              Updated Successfully
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

                }
                if($_GET["error"]== "Returned"){

                  echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="bi bi-check-circle me-1"></i>
                  Book Returned
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    
                    }
                    if($_GET["error"]== "Nostock"){
                      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <i class="bi bi-check-circle me-1"></i>
                      Book is out of stock
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                        }
                        echo '<script>
                      
                        var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                        history.replaceState({}, document.title, newUrl);
                        
                        </script>';

         }
      ?>



</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">

      <div class="issueside">

<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#issueModal">
  <i class="zmdi zmdi-plus"></i><i class="bi bi-journal-plus"></i>Issue</button>

  <!-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#import">
  <i class="zmdi zmdi-plus"></i>+ IMPORT</button> -->
</div>

        <div class="card-body">
   
                                     
           <?php
           include("Modal/issueModal/issue.php");
        //    include("Modal/importM.php");
           ?>

          <!-- Table with stripped rows -->

       
   




          <table class="table-borderless datatable ">
            
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Book Name</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <!-- <th scope="col">Author</th> -->
                <th scope="col">Action</th>
              </tr>
            </thead>  

            <?php
                     $statement=$conn->prepare("SELECT * FROM ((tbl_issuebook INNER JOIN tbl_students ON tbl_issuebook.s_id = tbl_students.s_id)  INNER JOIN  tbl_books ON tbl_issuebook.book_id = tbl_books.b_isbn)");
                     $statement->execute();
                     while($issue=$statement->fetch()){
               ?>

         
              <tr>
                <td><?php echo $issue['i_id'] ?></td>
                <td><?php echo $issue['firstname'] ?> <?php echo $issue['lastname'] ?></td>
                <td><?php echo $issue['b_name'] ?></td>
                <td><?php echo $issue['i_date'] ?></td>
                <td><?php echo $issue['i_status'] ?></td>
            
             
                <td>

           <a href="#edit_<?php echo $issue["i_id"]; ?>" class="btn btn-success btn-sm" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
           <?php include("Modal/issueModal/updateissue.php"); ?> 

          <a href="#del_<?php echo $issue["i_id"]; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><i class="bi bi-arrow-return-left"></i></a>
          <?php include("Modal/issueModal/deleteissue.php"); ?>

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