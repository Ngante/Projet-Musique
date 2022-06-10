<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <br>
    <h1 class="text-center" >LISTE DES ARTISTES</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Ajouter un nouveau Artiste</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Nom</th>
              <th  scope="col">Age</th>
              <th  scope="col">Label</th>
              <th  scope="col" colspan="3" class="text-center">Operations sur les artistes</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM artiste";               // SQL query to fetch all table data
            $view_artiste= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_artiste)){
              $id = $row['id_artiste'];                
              $nom = $row['nom_artiste'];        
              $age = $row['age'];
              $label = $row['id_label'];

              $query2="SELECT nom FROM label WHERE id_label = {$label}";
              $view_label= mysqli_query($conn,$query2);
              while($row2= mysqli_fetch_assoc($view_label)){
                $label = $row2['nom'];  
              } 

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$nom}</td>";
              echo " <td > {$age}</td>";
              echo " <td >{$label} </td>";

              echo " <td class='text-center'> <a href='view.php?artiste_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> Voir</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&artiste_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> MODIFIER</a> </td>";

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