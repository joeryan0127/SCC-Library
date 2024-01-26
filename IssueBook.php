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

      <div class="issueside">

<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#issueModal">
  <i class="zmdi zmdi-plus"></i><i class="bi bi-journal-plus"></i>Issue</button>

  <!-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#import">
  <i class="zmdi zmdi-plus"></i>+ IMPORT</button> -->
</div>

        <div class="card-body">
          <!-- <h5 class="card-title">Datatables</h5>
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
        -->
   
   
                                     
           <?php
           include("Modal/issueModal/issue.php");
        //    include("Modal/importM.php");
           ?>

          <!-- Table with stripped rows -->

       
          <?php
     if(isset($_GET["error"])){
       if($_GET["error"]== "AlreadyReturned"){
           echo "<script> alert('Book Already Returned');</script>";
           }

       if($_GET["error"]== "AddedSuccess"){
          echo "<script> alert('Book is issued');</script>";
            }
            if($_GET["error"]== "UpdateSuccess"){
              echo "<script> alert('Updated Successfuly');</script>";
                }
                if($_GET["error"]== "Returned"){
                  echo "<script> alert('Book Returned');</script>";
                    }
                    if($_GET["error"]== "Nostock"){
                      echo "<script> alert('Book is out of stock');</script>";
                        }
         }
      ?>





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

           <a href="#edit_<?php echo $issue["i_id"]; ?>" class="btn btn-success btn-sm" data-bs-toggle="modal"><span class="fa fa-edit"></a>
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