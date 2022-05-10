<?php 
    if($_POST){
        header("location:inicio.php");
    }
?>
<!-- ========== cabecera del administrador ========== -->
<?php include_once("template/template.cabecera.php")?>
<!-- ========== nav del administrador ========== -->
<?php include_once("template/template.nav.php")?>

    <div class="container">
          <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-header">
                          Login
                      </div>
                      <div class="card-body">
                          <form method="POST" action="index.php">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre de usuario:</label>
                                    <input type="text" name="nameUser"  class="form-control" aria-describedby="helpId">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Contraseña</label>
                                    <input type="password" name="passwordUser" class="form-control" aria-describedby="helpId">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" value="Ingresar al administrador" class=" btn btn-primary">
                                </div>
                          </form>
                      </div>
                      <div class="card-footer text-muted">
                      </div>
                  </div>
              </div>
          </div>
    </div>
<!-- ========== pie del admin ========== -->
<?php include_once("template/template.pie.php")?>