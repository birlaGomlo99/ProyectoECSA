<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <title>Publicación</title>
 
<?php include '../linkboostrap/cdnbostrap.php';?>

    
<!--js para carrusel productos-->

        
  </head>
  <body>

  
  
  <!-- Formulario 1 -->
  
  <div class="container mt-5 pt-5"><br><br>
      <div class="container">
      <div class="row">
      <form action="guardarpub.php" method="POST" enctype="multipart/form-data" class="frm">
      <h2>Publicación</h2> <br>
       <div class="form-group row">
          <label for="imagen" class="col-sm-3 form-control-label">Imagen</label>
          <div class="col-sm-9">
            <input type="file" name="imagen" id="imagen" required="no" class="form-control" onchange="return fileValidation()" >
          </div>
        </div>
         <div class="form-group row">
          <label for="tiempo" class="col-sm-3 form-control-label">Tiempo</label>
             <select name="tiempo" id="tiempo" class="form-control" >
              <option value="Aceptado">Aceptado</option>
              <option value="Cancelado">Cancelado</option>
              <option value="Rechazado">Rechazado</option>
            </select>
          </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
</div>
</div>

  <!-- fin Formulario 1 -->
  </body>

</html>
<div class="container mt-5 pt-5"></div>
<div class="container mt-3 pt-3"></div>
 
 
 
<script>
function mayus(e) {
    e.value = e.value.toUpperCase();
}  
</script>
