 <!-- Footer -->
<?php  include "../header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $labelid= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM label WHERE id_label = {$labelid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
              ?>

  <!-- Footer -->
<?php include "footer.php" ?>