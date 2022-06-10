 <!-- Footer -->
<?php  include "../header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $albumid= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM album WHERE id_album = {$albumid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
              ?>

  <!-- Footer -->
<?php include "footer.php" ?>