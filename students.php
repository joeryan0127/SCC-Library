<?php
include "Header/header.php";
include "Db/connection.php";
?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Student Table</h1>
  

  <?php
                if(isset($_GET["error"])){
                  if($_GET["error"]== "AddedSuccess"){

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


                            if($_GET["error"]== "DeletedSuccessfully"){
                             
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

             <a href="#edit_<?php echo $stud["s_id"]; ?>" class="btn btn-success btn-sm" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
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