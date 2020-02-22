<meta charset="utf-8">
<?php
include 'conex.php';
$id=$_GET['id'];
$sql = "SELECT * FROM evidencia WHERE id_evi =".$id;

$result=$mysqli->query($sql);
$row =$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <?php include '../linkboostrap/cdnbostrap.php';?>
  <!--js para carrusel productos-->


</head>
<body>

  <!-- Formulario 1 -->
  
  <div class="container mt-5 pt-5">
    <div class="container">
      <div class="row">
        <form action="modpub.php" method="POST" enctype="multipart/form-data" class="frm">
          <h2>Publicación</h2> <br>
          <input type="hidden" name="id" id="id"   value="<?php echo $row['id_evi']; ?>">
          <div class="form-group row">
            <label for="img" class="col-sm-3 form-control-label">Imagen</label>
            <div class="col-sm-9">
             <img class="rounded " style="" width="150px"  height="150px" src= <?php echo $row['imagen']; ?>>
           </div>
         </div>
         <div class="form-group row">
          <label for="imagen" class="col-sm-3 form-control-label">Cambiar imagen</label>
          <div class="col-sm-9">
            <input type="file" name="imagen" id="imagen"  class="form-control"  onchange="return fileValidation()" >
          </div>
        </div>

        <div class="form-group row">
          <label for="tiempo" class="col-sm-3 form-control-label">Tiempo</label>
          <select name="tiempo" id="tiempo" class="form-control" >
            <option><?php echo $row["tiempo"]?></option> 
            <option value="Inicio">Inicio</option>
            <option value="En proceso">En proceso</option>
            <option value="Trabajo terminado">Trabajo terminado</option>
          </select>
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- fin Formulario 1 -->
</body>
<div class="container mt-5 pt-5"></div>
</html>

<script>
  function mayus(e) {
    e.value = e.value.toUpperCase();
  }  
</script>
