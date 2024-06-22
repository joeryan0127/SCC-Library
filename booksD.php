<?php
include "DB/connection.php";
?>
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p> -->
        </div>

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->


        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="searchbook" placeholder="Search books..." name="search">
                <button class="btn btn-primary" name="search" type="submit">Search</button>
            </div>
        </form>
    
          <?php
          if(isset($_POST['search'])){

            $searchbook =$_POST['searchbook'];
            
           

           
            $statement=$conn->prepare("SELECT * FROM tbl_books WHERE b_status LIKE :search");
            $statement->bindParam(':search',$searchbook); 
            $statement->execute();
            while($search=$statement->fetch()){
                             $status = $search['b_titleofbook'];     
                           
                             echo $status;
              }

           
          }
          
          
          ?>

        <div class="row portfolio-container">

        <?php
                                  $statement=$conn->prepare("SELECT * FROM tbl_books");
                                  $statement->execute();
                                  while($books=$statement->fetch()){


                                            ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo (!empty($books['b_image']))? 'Modal/images/'.$books['b_image']:'Modal/images/College.png'; ?>"  class="img-fluid" alt="">
           
              </figure>

              <div class="portfolio-info">
                <h4 style ="word-wrap: break-word;"><a href="portfolio-details.html"><?php echo $books['b_titleofbook'] ?></a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <?php
                                  }
          ?>

         
        </div>

      </div>
    </section><!-- End Portfolio Section -->