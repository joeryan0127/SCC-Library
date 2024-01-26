<?php
include "Header/header.php";
include "Db/connection.php";


$statement =$conn->prepare("SELECT count(*) from tbl_students WHERE s_status ='Active'");
$statement->execute();
$stud=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from tbl_books WHERE b_status !='Deleted'");
$statement->execute();
$book=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from tbl_issuebook WHERE i_status ='Borrowed'");
$statement->execute();
$issue=$statement->fetchColumn();

?>


<main id="main" class="main">

<div class="pagetitle dash">
  <h1>Dashboard</h1>
  <!-- <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav> -->
</div><!-- End Page Title -->


<section class="section dashboard">
      <div class="row1">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row1">
      
          <!-- student card -->

        <div class="col-xxl-4 col-md-6 row2">
              <div class="card info-card sales-card">

           
                <a href="students.php">
                <div class="card-body">
                  <h5 class="card-title">Students </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo"$stud" ?> </h6>
                   
                    </div>
               
                  </div>
                </div>
                </a>


              </div>
            </div>
        <!-- end of card -->

        <!-- book card -->
            <div class="col-xxl-4 col-md-6 row2">
              <div class="card info-card sales-card"> 

           
                <a href="Books.php">
                <div class="card-body">
                  <h5 class="card-title">Books </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journals"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo"$book" ?></h6>
                   
                    </div>
               
                  </div>
                </div>
                </a>


              </div>
            </div>
        <!-- end of card -->

                <!-- issue Book card -->
                <div class="col-xxl-4 col-md-6 row2">
              <div class="card info-card sales-card"> 

           
                <a href="Books.php">
                <div class="card-body">
                  <h5 class="card-title">Issued Book </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journals"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo"$issue" ?></h6>
                   
                    </div>
               
                  </div>
                </div>
                </a>


              </div>
            </div>
        <!-- end of card -->

            </div>
            
            </div>
            </div>
    </section>
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