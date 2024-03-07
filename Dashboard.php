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


$data = array();
$count = array();

$select=$conn->prepare("SELECT tbl_issuebook.book_id, tbl_books.b_titleofbook, COUNT(tbl_issuebook.book_id) AS count FROM tbl_issuebook 
LEFT JOIN tbl_books ON tbl_issuebook.book_id = tbl_books.b_id GROUP BY tbl_issuebook.book_id, tbl_books.b_titleofbook;");
$select->execute();
while($books=$select->fetch()){
$data[] = $books['b_titleofbook'];
$count[] = $books['count'];

}

$name = array();
$many = array();

$select=$conn->prepare("SELECT tbl_issuebook.s_id, CONCAT(tbl_students.firstname,' ',tbl_students.lastname) AS fullname, COUNT(tbl_issuebook.s_id) AS count FROM tbl_issuebook
 LEFT JOIN tbl_students ON tbl_issuebook.s_id = tbl_students.s_id GROUP BY tbl_issuebook.s_id;");
$select->execute();
while($student=$select->fetch()){
$name[] = $student['fullname'];
$many[] = $student['count'];

}
// $string = implode(' ', $data);

// 

 
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

           
                <a href="issueBook.php">
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
       



          <div class="col-lg-6 footerspace">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Borrowed Book</h5>

          
              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>

              <script>
                document.addEventListener("DOMContentLoaded", () => {



                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: <?php echo json_encode($data) ?>,
                      datasets: [{
                        label: 'Bar Chart',
                        data: <?php echo json_encode($count) ?>,
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->


            </div>
          </div>
        </div>

        <div class="col-lg-6 footerspace" style =" margin-left: 3%" >
          <div class="card" >
            <div class="card-body">
              <h5 class="card-title">Student</h5>

          
              <!-- Bar Chart -->
        
              <!-- End Bar CHart -->

              <canvas id="myChart" width="400" ></canvas>

              <script>
                  // Data for the bar chart
                  var data = {
                      labels: <?php echo json_encode($name) ?>,
                      datasets: [{
                          label: "Sales",
                          backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                          borderWidth: 1,
                          data: <?php echo json_encode($many) ?>,
                      }]
                  };

                  // Options for the bar chart
                  var options = {
                      scales: {
                          y: {
                              beginAtZero: true
                          }
                      }
                  };

                  // Get the canvas element
                  var ctx = document.getElementById('myChart').getContext('2d');

                  // Create the bar chart
                  var myChart = new Chart(ctx, {
                      type: 'bar',
                      data: data,
                      options: options
                  });
              </script>


            </div>
          </div>
        </div>






        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->



<?php
include "footer/footer.php";
?>