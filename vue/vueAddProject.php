<?php include '../template/header.php'; ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4"id="addProjet">
                <div class="card">

                  <form class="card-block input" action="../controleur/controleurAddProject.php" method="post">
                      <h1>Projet</h1>
                      <hr>
                     <input type="text" name="titre" >
                     <hr>
                     <input type="text" name="description">
                      <hr>
                     <input type="text" name="datefin" >
                     <hr>
                     <input type="submit" name="info" value="Send">
                </form>
            </div>
        </div>
     </div>
</div>



<?php include'../template/footer.php'


?>
