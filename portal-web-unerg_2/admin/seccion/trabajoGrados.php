<?php
    // incluyendo el archivo bbdd para realizar las operaciones crud;
    //include_once("../config/bbdd.php");
    //$conexionBD = conexion();
    //print_r($conexionBD);
    if(isset($_POST)){
        $carrera = (isset($_POST['carrera']))?$_POST['carrera']:"";
        $titulo  = (isset($_POST['titulo']))?$_POST['titulo']:""; 
        $trabajo = (isset($_FILES['trabajo']['name']))?$_FILES['trabajo']['name']:"";
        $author  = (isset($_POST['author']))?$_POST['author']:"";
        $tipoPost = (isset($_POST['tipoPost']))?$_POST['tipoPost']:"";
        $accion  = (isset($_POST['action']))?$_POST['action']:"";
        if($carrera != "" && $titulo != "" && $trabajo != "" && $author != "" && $tipoPost != ""){
            echo "<h5>Todos los datos cargados</h5>";
            echo $carrera.",".$titulo.",".$trabajo.",".$author.",".$tipoPost.",".$accion;
        }else{
            echo "faltan campos por rrellenar";
        }
    }
    

    switch($accion){
        case "agregar":
            echo "has precionado agregar";
            $sql = "INSERT INTO trabajos(carrera,titulo,author,investigacion,archivo,tipopost) VALUES (:car,:titulo,:author,:arch,:tipo)";
            $resultado = $conexionBD->prepare($sql);
            $resultado->execute(array(":car"=>$carrera,":titulo"=>$titulo,":author"=>$author,":arch"=>$trabajo,":tipo"=>$tipoPost));
            if($resultado == true){echo "registro insertao";}else{echo "error cms".$ex;}
            break;
        case "modificar":
            echo "haz precionado modificar";
            break;
        case "cancelar":
            echo "haz cancelado la operacion";
            break;
    }
?>

<!-- ========== cabecera del panel de trabajos de grado ========== -->
<?php include_once("../template/template.cabecera.php")?>
<!-- ========== navegacion del panel de trabajos de grado ========== -->
<?php include_once("../template/template.nav.php")?>

<!-- ========== interfaz del formulario de agg trabajo de grado ========== -->
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                este es el formulario de agg trabajo de grado!
                <div class="card">
                    <div class="card-header">formulario de agg trabajo de grado!</div>
                        <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                              <label for="" class="form-label"></label>
                              <input type="text" name="idText" id="idText" class="form-control" placeholder="id" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">id</small>
                            </div>
                            <div class="mb-3">
                              <label for="carrra" class="form-label"></label>
                              <input type="text" name="carrera" id="carrera" class="form-control" placeholder="carrera" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">ingrese la carrera</small>
                            </div>
                            <div class="mb-3">
                              <label for="titulo" class="form-label"></label>
                              <input type="text" name="titulo" id="titulo" class="form-control" placeholder="titulo" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">titulo del trabajo</small>
                            </div>
                            <div class="mb-3">
                              <label for="trabajo" class="form-label"></label>
                              <input type="file" class="form-control" name="trabajo" id="trabajo" placeholder="Trabajo" aria-describedby="fileHelpId">
                              <small id="fileHelpId" class="form-text text-muted">archivo</small>
                            </div>
                            <div class="mb-3">
                              <label for="author" class="form-label"></label>
                              <input type="text" class="form-control" name="author" id="author" placeholder="author">
                              <small id="fileHelpId" class="form-text text-muted">author del trabajo</small>
                            </div>
                            <div class="mb-3">
                              <label for="tipoPost" class="form-label"></label>
                              <input type="text" class="form-control" name="tipoPost" id="tipoPost" placeholder="Tipo post">
                              <small id="fileHelpId" class="form-text text-muted">tipo de post</small>
                            </div>
                            <div class="input-group mb-3">
                                <div class="btn-group">
                                    <button class="btn btn-success" name="action" value="agregar" type="submit" aria-label="">AGREGAR</button>
                                    <button class="btn btn-warning" name="action" value="modificar" type="submit" aria-label="">MODIFICAR</button>
                                    <button class="btn btn-primary" name="action" value="cancelar" type="submit" aria-label="">CANCELAR</button>
                                </div>
                            </div>
                        </form>
                        </div>
                </div>
            </div>

            <!-- ========== tabla de visualizacion de datos ========== -->
            <div class="col-md-7">
                informacion de trabajos de grado!
                <div class="card">
                    <div class="card-header">
                        vista de trabajos de grado
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse|thead-default">
                                <tr>
                                    <th>ID</th>
                                    <th>Carrera</th>
                                    <th>Author</th>
                                    <th>Investigacion</th>
                                    <th>Archivo</th>
                                    <th>Tipo post</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Ingenieria en sistemas</td>
                                        <td>kevin</td>
                                        <td>seguridad informatica</td>
                                        <td>archivo.jpg</td>
                                        <td>trabajo de grado</td>
                                        <td>Select | Borrar</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ========== pie del panel de trabajos de grado ========== -->
<?php include_once("../template/template.pie.php")?>