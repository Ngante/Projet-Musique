<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <br>
    <h1 class="text-center" >LISTE DES CONCERTS</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Créer un nouveau concert</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Lieux</th>
              <th  scope="col">Date</th>
              <th  scope="col">Prix</th>
              <th  scope="col" colspan="3" class="text-center">Operations sur les concerts</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM concert";               // SQL query to fetch all table data
            $view_concert= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_concert)){
              $id = $row['id_concert'];                
              $lieu = $row['lieu'];        
              $date = $row['date'];         
              $prix = $row['prix'];        


              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$lieu}</td>";
              echo " <td > {$date}</td>";
              echo " <td >{$prix} </td>";

              echo " <td class='text-center'> <a href='view.php?concert_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> Voir</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&concert_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> MODIFIER</a> </td>";

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