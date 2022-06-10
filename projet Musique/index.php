<!-- Header -->
<?php include "header.php" ?>

<!-- body -->
<div class="container mt-5">
    <h1 class="text-center"> BIENVENUE SUR SPOT TON ARTISTE </h1>
        <p class="text-center">
            La platforme de tes artistes préférés
            <br><br><br>
        </p>

    <div class="box-container" style="display: grid;
    grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
    gap: 1.5rem;">
        <div class="box">
            <form action="album/home.php" method="post">
                    <div class="from-group text-center">
                        <input type="submit" class="btn btn-primary mt-2" value=" Liste des Albums!">
                    </div>
            </form>
        </div>
        
        <div class="box">
            <form action="artiste/home.php" method="post">
                <div class="from-group text-center">
                    <input type="submit" class="btn btn-primary mt-2" value=" Liste des Artistes!">
                </div>
            </form>
        </div>

        <div class="box">
            <form action="musique/home.php" method="post">
                    <div class="from-group text-center">
                        <input type="submit" class="btn btn-primary mt-2" value="Liste des Musiques!">
                    </div>
            </form>
        </div>

        <div class="box">
                <form action="concert/home.php" method="post">
                    <div class="from-group text-center">
                        <input type="submit" class="btn btn-primary mt-2" value="Liste des Conserts!">
                    </div>
                </form>
        </div>

        <div class="box">
                <form action="label/home.php" method="post">
                    <div class="from-group text-center">
                        <input type="submit" class="btn btn-primary mt-2" value="Liste des Labels!">
                    </div>
                </form>
        </div>

    </div>

<!-- Footer -->
<?php include "footer.php" ?>