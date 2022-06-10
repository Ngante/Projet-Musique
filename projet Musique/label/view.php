<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Détails du label</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">ID</th>
          <th  scope="col">Nom</th>
          <th  scope="col">Ville</th>
          <th  scope="col">Adresse</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              
              if (isset($_GET['label_id'])) {
                  $labelid = $_GET['label_id']; 

                   
                  $query="SELECT * FROM label WHERE id_label = {$labelid} ";  
                  $view_label= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_label))
                  {
                      $id = $row['id_label'];
                      $nom = $row['nom'];
                      $ville = $row['ville'];
                      $adresse = $row['adresse'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$nom}</td>";
                        echo " <td > {$ville}</td>";
                        echo " <td >{$adresse} </td>";  
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

  
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Retour </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>