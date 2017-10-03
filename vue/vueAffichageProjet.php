<?php include '../template/header.php';

?>



<div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4"id="addProjet">
                <div class="card">

                <form class="card-block input"  method="post">
                   <h1>addtask</h1>
                   <hr>
                  <p><?php echo $projet[0]['titre']; ?></p>
                  <hr>
                  <p><?php echo $projet[0]['description']; ?></p>
                   <hr>
                   <input type="submit" name="infoTache" value="Send">
                   <hr>

              </form>

            </div>
        </div>
     </div>
</div>



<?php include'../template/footer.php'


?>
