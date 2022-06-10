 <!-- Footer -->
<?php  include "../header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $musiqueid= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM musique WHERE id_musique = {$musiqueid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
              ?>

  <!-- Footer -->
<?php include "footer.php" ?>