<!-- Footer -->
<?php include "../header.php"?>

<?php
   
   if(isset($_GET['musique_id']))
    {
      $musiqueid = $_GET['musique_id']; 
    }
      
      $query="SELECT * FROM musique WHERE id_musique = $musiqueid ";
      $view_musique= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_musique))
        {
          $id = $row['id_musique'];
          $titre = $row['titre'];
          $genre = $row['genre'];
          $duree = $row['duree'];
        }
 
    
    if(isset($_POST['update'])) 
    {
      $titre = $_POST['titre'];
      $genre = $_POST['genre'];
      $duree = $_POST['duree'];
      
       
      $query = "UPDATE musique SET titre = '{$titre}' , genre = '{$genre}' , duree = '{$duree}' WHERE id_musique = $musiqueid";
      $update_musique = mysqli_query($conn, $query);
      echo "Musique modifiée avec succès!";
    }             
?>

<h1 class="text-center">Modifier les informations de la musique</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre"  class="form-control" value="<?php echo $titre  ?>">
      </div>

      <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre"  class="form-control" value="<?php echo $genre  ?>">
      </div>
    
      <div class="form-group">
        <label for="duree">Durée</label>
        <input type="text" name="duree"  class="form-control" value="<?php echo $duree  ?>">
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