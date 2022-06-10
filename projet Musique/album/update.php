<!-- Footer -->
<?php include "../header.php"?>

<?php
   
   if(isset($_GET['album_id']))
    {
      $albumid = $_GET['album_id']; 
    }
      
      $query="SELECT * FROM album WHERE id_album = $albumid ";
      $view_album= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_album))
        {
          $id = $row['id_album'];
          $nom = $row['nom'];
          $genre = $row['genre'];
          $date = $row['date_sortie'];
          $label = $row['id_label'];
        }
 
    
    if(isset($_POST['update'])) 
    {
      $nom = $_POST['nom'];
      $genre = $_POST['genre'];
      $date = $_POST['date'];
      $label = $_POST['label'];
      
       
      $query = "UPDATE album SET nom = '{$nom}' , genre = '{$genre}', date_sortie = '{$date}', label = {$label} WHERE id_album = $albumid";
      $update_album = mysqli_query($conn, $query);
      echo "Album modifié avec succès!";
    }             
?>

<h1 class="text-center">Modifier les informations de l'album</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom"  class="form-control" value="<?php echo $nom  ?>">
      </div>

      <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre"  class="form-control" value="<?php echo $genre  ?>">
      </div>

      <div class="form-group">
        <label for="date">Date de sortie</label>
        <input type="date" name="date"  class="form-control" value="<?php echo $date  ?>">
      </div>
    
      <div class="form-group">
        <label for="label">Label</label>
        <select name="label" class="form-control">
          <option value="">--Choisissez un label--</option>
          <?php
            $query2="SELECT * FROM label";
            $view_label= mysqli_query($conn,$query2);
            while ($row = mysqli_fetch_assoc($view_label)) {
          ?>
              <option value="<?php echo $row['id_label'] ?>"><?php echo $row['nom'] ?></option>
          <?php  
            }
          ?>
        </select>
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