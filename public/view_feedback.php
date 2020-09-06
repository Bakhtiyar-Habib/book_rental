<?php include_once("../resources/config.php"); 
    include_once('header.php');
?>

  <section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>View Feebacks</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>

  </section>


  <?php
                      $query = "SELECT * FROM feedback WHERE book_id = ". escape_string($_GET["id"]) ." ";
                      $send_query = mysqli_query($connection, $query);

                      while($row = mysqli_fetch_array($send_query)){ ?>

                        <div class="container">
                          <?php
                            echo "<p>{$row['feedback']}</p>";
                            ?>
                        </div>


                        
<?php
                      }



include_once('footer.php');?>
