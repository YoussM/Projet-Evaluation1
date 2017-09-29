<?php include '../template/headerAcceuil.php';?>

<div class="container-fluid">
        <div class="row">

          <?php
foreach ($projet as $key => $donnee) {
    ?>

            <div class="col-sm-6 col-md-4 col-lg-3 mt-4" >
                <div class="card">

                  <form class="card-block input" action="controleurHome.php" method="post">
                      <h1>Projet</h1>
                      <hr>
                    <p><?php echo $donnee['titre'] ?></p>
                     <hr>
                     <p><?php echo $donnee['description'] ?></p>
                      <hr>
                    <p><?php echo $donnee['date_fin'] ?></p>
                     <hr>
                     <input type="submit" name="info" value="info">
                     <input type="hidden" name="id" value="<?php echo $donnee['id']?>">
                     <button type="submit" name="delete">delete</button>
                </form>
            </div>
        </div>

<?php
}
?>


</div>
</div>

<?php
include'../template/footer.php'
?>
