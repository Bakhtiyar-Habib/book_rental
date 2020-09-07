<?php require_once("../resources/config.php");
      include_once('header.php');
?>


    <section>
        <div class="container">
            <div class="row">
               <!----------------------------------Image and Cart Button----------------------------------->
                <div class="col-xl-6 col-md-6 col-sm-12 mx-auto">
                   <div class="single-book-img mx-auto">
                   <?php
                          $query = "SELECT * FROM book WHERE book_id = ". escape_string($_GET["id"]) ." ";
                          $send_query = mysqli_query($connection, $query);

                          while($row = mysqli_fetch_array($send_query)){
                          
                            echo '<img src="data:image;base64,'.base64_encode($row['book_image']).'" alt="Image" style="width:300px; height:375px;">';
                          
                        
                   echo "</div>";
                   echo "<div class=\"cart-button\">";
                     
                       echo "<a class=\" btn btn-default\" href='cart.php?add={$row['book_id']}' role=\"button\">Add To Cart</a>";
                   echo "</div>";

                  echo "<a class=\"pull-left \" href='view_feedback.php?id={$row['book_id']}'><b>View Feedbacks</b></a>";

                 echo "</div>";
                          }
                ?>

                <!----------------------------------Book Details----------------------------------->
                <div class="col-xl-6 col-md-6 col-sm-12">
                  <div class="book-info text-center">
                  <?php
                          $query = "SELECT * FROM book WHERE book_id = ". escape_string($_GET["id"]) ." ";
                          $send_query = mysqli_query($connection, $query);

                          while($row = mysqli_fetch_array($send_query)){
                            
                            echo "<h3>Book Description</h3>";
                            echo "<p>{$row['book_description']}</p>";
                            echo "<h5>Book Details</h5>";
                            echo "<h6>Title: &nbsp &nbsp{$row['book_title']}</h6>";
                            echo "<h6>ISBN:   &nbsp &nbsp{$row['ISBN']}</h6>";
                            echo "<h6>Author:   &nbsp &nbsp{$row['author']}</h6>";
                            echo "<h6>Price:   &nbsp &nbspTK.{$row['book_price']}</h6>";
                            echo "<a href='feedback.php?id={$row['book_id']}' class=\"d-block mb-4 h-100 text-center\">"; ?> Write a Feedback </a>
                          <?php  
                          }
                          ?>
                  </div>
                </div>
            </div>
        </div>
    </section>


<?php include_once('footer.php');?>
