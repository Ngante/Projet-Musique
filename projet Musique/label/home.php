<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <br>
    <h1 class="text-center" >LISTE DES LABELS</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Ajouter un nouveau label</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Nom</th>
              <th  scope="col">Ville</th>
              <th  scope="col">Adresse</th>
              <th  scope="col" colspan="3" class="text-center">Operations sur les labels</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM label";               // SQL query to fetch all table data
            $view_label= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_label)){
              $id = $row['id_label'];                
              $nom = $row['nom'];        
              $ville = $row['ville'];         
              $adresse = $row['adresse'];        


              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$nom}</td>";
              echo " <td > {$ville}</td>";
              echo " <td >{$adresse} </td>";

              echo " <td class='text-center'> <a href='view.php?label_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> Voir</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&label_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> MODIFIER</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> SUPPRIMER</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>


<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Retour </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>