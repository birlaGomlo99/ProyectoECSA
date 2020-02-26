
<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Trabajadores</title>
  <?php include "../admin/header.php"; ?>
  <!-- link para bootstrap y datatable-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- script para bootstrap LO COMENTE POR QUE DIO ERROR EN EL HEADER
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   -->

  <!-- script para datatable no mover jquery ni bustrap de librerias -->
  <script src="../librerias/jquery-3.2.1.min.js"></script>
  <script src="funciones.js"></script>
  <script src="val.js"></script>
  <script src="../librerias/bootstrap/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <!-- para validate -->
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <!-- Libreria de sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Libreria para iconos -->
  <!-- Libreria jquery validate -->
  <script src="jsvalidate/additional-methods.js"></script>
  <script src="jsvalidate/additional-methods.min.js"></script>
  <script src="jsvalidate/jquery.validate.js"></script> 
  <script src="jsvalidate/jquery.validate.min.js"></script>

  
</head>
<body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="container">
        <div id="tabla"></div>
      </div>
    </div>
  </div>


  <!-- Modal para registros nuevos -->
  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header" class="text-center">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo trabajador</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form id="formulario" name="formulario" method="post">
          <label>Nombre:</label>
          <input type="text" name="nombre" id="nombre" class="form-control input-sm" required="nombre" required="nombre" required pattern="[A-Za-z]">
          <label>Apellido paterno:</label>
          <input type="text" name="appat" id="appat" class="form-control input-sm" required="appat" required>
          <label>Apellido materno:</label>
          <input type="text" name="apmat" id="apmat" class="form-control input-sm" required="apmat" required>
          <label>Núm. de afiliación (NSS):</label>
          <input type="text" name="nss" id="nss" class="form-control input-sm" required="nss" required>
          <label>Telefono:</label>
          <input type="tel" name="telefono" id="telefono" class="form-control input-sm" required pattern="[1-9]" maxlength="10">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="guardarnuevo" data-dismiss="modal">Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal para editar -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="">
         <input type="text" hidden="" id="idpersona" name="">
         <label>Nombre</label>
         <input type="text" name="" id="nombreu" class="form-control input-sm">
         <label>A. paterno</label>
         <input type="text" name="" id="appatu" class="form-control input-sm">
         <label>A. materno</label>
         <input type="text" name="" id="apmatu" class="form-control input-sm">
         <label>NSS</label>
         <input type="text" name="" id="nssu" class="form-control input-sm">
         <label>telefono</label>
         <input type="text" name="" id="telefonou" class="form-control input-sm">

       </div>
       <div class="modal-footer">
        <button type="submit" class="btn btn-primary"  id="actualizadatos" data-dismiss="modal">Actualizar</button>
      </div>
    </form>
  </div>
</div>
</div>

<!-- Modal para edicion de datos -->


</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tabla').load('tab/tabla.php');
  });
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $('#guardarnuevo').click(function(){
     var nombre = $('#nombre').val();
     var appat = $('#appat').val();
     var apmat = $('#apmat').val();
     var nss = $('#nss').val();
     var telefono = $('#telefono').val();

     if (nombre=="") {
      alertify.error("Escribe el nombre :)");
      return false;
    }else{
      if (appat=="") {
        swal("Bad!", "Escribe el apellido paterno!", "success");
        return false;
      }else{
        if (apmat=="") {
          alertify.error("Escribe el apellido materno :)");
          return false;
        }else{
          if (nss=="") {
           alertify.error("Escribe el NSS :)");
           return false;
         }else{
          if (telefono=="") {
            alertify.error("Escribe el telefono :)");
            return false;

          }else{
            nombre=$('#nombre').val();
            appat=$('#appat').val();
            apmat=$('#apmat').val();
            nss=$('#nss').val();
            telefono=$('#telefono').val();
            agregardatos(nombre,appat,apmat,nss,telefono);
          }
        }
      }
    }
  }

});

    $('#actualizadatos').click(function(){
      actualizaDatos();
    });

  });
</script>







