<!-- Footer -->
<?php include "../header.php"?>

<?php
   
   if(isset($_GET['concert_id']))
    {
      $concertid = $_GET['concert_id']; 
    }
      
      $query="SELECT * FROM concert WHERE id_concert = $concertid ";
      $view_concert= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_concert))
        {
          $id = $row['id_concert'];
          $lieu = $row['lieu'];
          $date = $row['date'];
          $prix = $row['prix'];
        }
 
    
    if(isset($_POST['update'])) 
    {
      $lieu = $_POST['lieu'];
      $date = $_POST['date'];
      $prix = $_POST['prix'];
      
       
      $query = "UPDATE concert SET lieu = '{$lieu}' , date = '{$date}' , prix = {$prix} WHERE id_concert = $concertid";
      $update_concert = mysqli_query($conn, $query);
      echo "Concert modifié avec succès!";
    }             
?>

<h1 class="text-center">Modifier les informations du concert</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="lieu">Lieu</label>
        <input type="text" name="lieu"  class="form-control" value="<?php echo $lieu  ?>">
      </div>

      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date"  class="form-control" value="<?php echo $date  ?>">
      </div>
    
      <div class="form-group">
        <label for="prix">Prix</label>
        <input type="number" name="prix"  class="form-control" value="<?php echo $prix  ?>">
      </div>     

      <div class="form-group">
        <input type="submit"  name="update" class="btn btn-primary mt-2" value="Modifier">
      </div>
    </form> 
  </div>

    
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Retour </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>