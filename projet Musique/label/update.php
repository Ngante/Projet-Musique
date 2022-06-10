<!-- Footer -->
<?php include "../header.php"?>

<?php
   
   if(isset($_GET['label_id']))
    {
      $labelid = $_GET['label_id']; 
    }
      
      $query="SELECT * FROM label WHERE id_label = $labelid ";
      $view_label= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_label))
        {
          $id = $row['id_label'];
          $nom = $row['nom'];
          $ville = $row['ville'];
          $adresse = $row['adresse'];
        }
 
    
    if(isset($_POST['update'])) 
    {
      $nom = $_POST['nom'];
      $ville = $_POST['ville'];
      $adresse = $_POST['adresse'];
      
       
      $query = "UPDATE label SET nom = '{$nom}' , ville = '{$ville}' , adresse = '{$adresse}' WHERE id_label = $labelid";
      $update_label = mysqli_query($conn, $query);
      echo "Label modifié avec succès!";
    }             
?>

<h1 class="text-center">Modifier les informations du label</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom"  class="form-control" value="<?php echo $nom  ?>">
      </div>

      <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" name="ville"  class="form-control" value="<?php echo $ville  ?>">
      </div>
    
      <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse"  class="form-control" value="<?php echo $adresse  ?>">
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