<!-- Footer -->
<?php include "../header.php"?>

<?php
   
   if(isset($_GET['artiste_id']))
    {
      $artisteid = $_GET['artiste_id']; 
    }
      
      $query="SELECT * FROM artiste WHERE id_artiste = $artisteid ";
      $view_artiste= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_artiste))
        {
          $id = $row['id_artiste'];
          $nom = $row['nom_artiste'];
          $age = $row['age'];
          $label = $row['id_label'];
        }
 
    
    if(isset($_POST['update'])) 
    {
      $nom = $_POST['nom'];
      $age = $_POST['age'];
      $label = $_POST['label'];
      
       
      $query = "UPDATE artiste SET nom_artiste = '{$nom}' , age = {$age} , label = {$label} WHERE id_artiste = $artisteid";
      $update_artiste = mysqli_query($conn, $query);
      echo "Artiste modifié avec succès!";
    }             
?>

<h1 class="text-center">Modifier les informations de l'artiste</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom"  class="form-control" value="<?php echo $nom  ?>">
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age"  class="form-control" value="<?php echo $age  ?>">
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