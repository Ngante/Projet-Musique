<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Détails de la musique</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">ID</th>
          <th  scope="col">Titre</th>
          <th  scope="col">Genre</th>
          <th  scope="col">Durée</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              
              if (isset($_GET['musique_id'])) {
                  $musiqueid = $_GET['musique_id']; 

                   
                  $query="SELECT * FROM musique WHERE id_musique = {$musiqueid} ";  
                  $view_musique= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_musique))
                  {
                      $id = $row['id_musique'];
                      $titre = $row['titre'];
                      $genre = $row['genre'];
                      $duree = $row['duree'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$titre}</td>";
                        echo " <td > {$genre}</td>";
                        echo " <td >{$duree} </td>";  
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