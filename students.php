<?php
include "Header/header.php";
include "Db/connection.php";
?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Student Table</h1>
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

        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addstudModal">
          <i class="zmdi zmdi-plus"></i><i class="bi bi-person-fill-up"></i></button>
 
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#import">
          <i class="zmdi zmdi-plus"></i><i class="bi bi-upload"></i></button>
</div>
   
                                     
           <?php
           include("Modal/studentModal/addstudM.php");
           include("Modal/studentModal/import.php");
           ?>

        <?php
                if(isset($_GET["error"])){
                  if($_GET["error"]== "AddedSuccess"){
                      echo "<script> alert('Student Added Successfully');</script>";
                      }

                  if($_GET["error"]== "UpdatedSuccessfully"){
                      echo "<script> alert('Updated Successfully');</script>";
                        }
                        if($_GET["error"]== "UpdateSuccess"){
                          echo "<script> alert('Updated Successfuly');</script>";
                            }
                            if($_GET["error"]== "DeletedSuccessfully"){
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
                <th scope="col">Student ID</th>
                <th scope="col">Name</th>
             
                <!-- <th scope="col">Email</th> -->
                <!-- <th scope="col">Gender</th> -->
                <th scope="col">Department</th>
                <th scope="col">Year Level</th>
                <!-- <th scope="col">Birthdate</th>
                <th scope="col">Status</th> -->
                <th scope="col">School Year</th>
                <th scope="col">Action</th>
              </tr>
            </thead>  
            <?php
                                  $statement=$conn->prepare("SELECT * FROM tbl_students");
                                  $statement->execute();
                                  while($stud=$statement->fetch()){

                                    $today =date("Y-m-d");
                                    $bdate1=$stud['birthdate'];
                                    $diff=date_diff(date_create($bdate1),date_create($today));
                                    $age=$diff->format('%y');


                                            ?>

         
              <tr>
                <td><?php echo $stud['s_id'] ?></td>
                <!-- <td>
                <img style="width: 60px; height: 60px;" src="<?php echo (!empty($books['b_image']))? 'Modal/images/'.$books['b_image']:'Modal/images/College.png'; ?>" 
                class="brand-image img-circle elevation-3" >
              </td> -->
                             

                <td><?php echo $stud['firstname'] ?> <?php echo $stud['lastname'] ?></td>
                <!-- <td><?php echo $stud['lastname'] ?></td> -->
                <!-- <td><?php echo $books['email'] ?></td> -->
                <!-- <td><?php echo $stud['gender'] ?></td> -->
                <td><?php echo $stud['department'] ?></td>
                <td><?php echo $stud['yearlevel'] ?></td>
                <!-- <td><?php echo $books['birthdate'] ?></td>
                <td><?php echo $stud['status'] ?></td> -->
                <td><?php echo $stud['schoolyear'] ?></td>

                <td>

                <a href="#view_<?php echo $stud["s_id"]; ?>" class="btn btn-secondary btn-sm" data-bs-toggle="modal"><i class="bi bi-eye"></i></a>
              <?php include("Modal/studentModal/viewM.php"); ?> 

             <a href="#edit_<?php echo $stud["s_id"]; ?>" class="btn btn-success btn-sm" data-bs-toggle="modal"><span class="fa fa-edit"></a>
            <?php include("Modal/studentModal/UpdatestudM.php"); ?> 

     

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