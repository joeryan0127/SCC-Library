<?php

include "Header/Registerhead.php";

?>

<body>

  <main>
    <div class="">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">SCC-Library</span>
                </a>
              </div>


     


              <div class="card ">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <?php
                  if(isset($_GET["error"])){
                    if($_GET["error"]== "Usernametaken"){
                        //  echo "<script> alert('Username is Already Taken');</script>";

                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        Username is Already Taken
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';

                        }

                    if($_GET["error"]== "Mismatch"){
                        // echo "<script> alert('Password Not Match');</script>";
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                       Password Not Match
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';

                          }

                          echo '<script>
                      
                          var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                          history.replaceState({}, document.title, newUrl);
                          
                          </script>';
                              
                            }
                          ?>

                  <form class="row g-3" action="Loginfunction/Registerf.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Your Name</label>
                  <input type="text" class="form-control" name="name" id="inputName5" required>
                </div>

                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Address</label>
                  <input type="text" class="form-control" name="address" id="inputAddres5s" required>
                </div>

            
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" id="inputEmail5" required>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">User</label>
                  <input type="text" class="form-control" name="user" id="inputEmail5"  required>
                </div>

             

                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Password</label>
                  <input type="password" class="form-control" name="pass" id="inputPassword5" required>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Retype Password</label>
                  <input type="password" class="form-control" name="rpass" id="inputPassword5" required>
                </div>
              
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Phone</label>
                  <input type="text" class="form-control" name="phone" id="inputAddres5s" required>
                </div>

            
            
                <!-- <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div> -->

                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Create</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>

                <div class="text-center">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>

              </form><!-- End Multi Columns Form -->





                  <!-- <form class="row g-3 needs-validation" novalidate action="Loginfunction/Registerf.php" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div> -->

                    <!-- <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div> -->

                    <!-- <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Retype Password</label>
                      <input type="password" name="Rpassword" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div> -->

                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div> -->
                    <!-- <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form> -->

                </div>
              </div>

              <?php
            
            include "footer/Registerfoot.php";

            ?>