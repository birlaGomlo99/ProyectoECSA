
<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mantenimiento</title>
  <?php include "../header/header.php"; ?>
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
        <div id="tabla"></div>
      </div>
  </div>


  <!-- Modal para registros nuevos -->
  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" class="text-center">
          <h5 class="modal-title text-center" id="exampleModalLabel">Mantenimiento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="row">
          <div class="col-md-6">
            <form id="formulario" name="formulario" method="post">
              <label>Folio ST:</label>
              <input type="text" name="st" id="st" class="form-control input-sm" required="st" required="st" required pattern="[A-Za-z]">
              <label>Folio FAT:</label>
              <input type="text" name="folio" id="folio" class="form-control input-sm" required="folio" required>
              <label>Edificio:</label>
              <input type="text" name="edificio" id="edificio" class="form-control input-sm" required="edificio" required>
              <label>Solicitante:</label>
              <input type="text" name="solicitante" id="solicitante" class="form-control input-sm" required="solicitante" required>
            </div>
            <div class="col-md-6">
             <label>Fecha solicitud:</label>
             <input type="date" name="fsol" id="fsol" class="form-control input-sm" >
             <label>Fecha respuesta:</label>
             <input type="date" name="fres" id="fres" class="form-control input-sm" required="fres" required>
             <label>Fat:</label>
             <input type="text" name="fat" id="fat" class="form-control input-sm" required="fat" required>
             <label>Estatus:</label>
             <select name="estatus" id="estatus" class="form-control" >
              <option value="Aceptado">Aceptado</option>
              <option value="Cancelado">Cancelado</option>
              <option value="Rechazado">Rechazado</option>
            </select>
          </div>
        </div>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
        <div class="col-md-6">
          <form id="formulario" name="formulario" method="post">
            <input type="text" hidden="" id="idman" name="">
            <label>Folio ST:</label>
            <input type="text" name="stu" id="stu" class="form-control input-sm" required="stu" required="stu" required pattern="[A-Za-z]">
            <label>Folio FAT:</label>
            <input type="text" name="foliou" id="foliou" class="form-control input-sm" required="foliou" required>
            <label>Edificio:</label>
            <input type="text" name="edificiou" id="edificiou" class="form-control input-sm" required="edificiou" required>
            <label>Solicitante:</label>
            <input type="text" name="solicitanteu" id="solicitanteu" class="form-control input-sm" required="solicitanteu" required>
          </div>
          <div class="col-md-6">
           <label>Fecha solicitud:</label>
           <input type="date" name="fsolu" id="fsolu" class="form-control input-sm" >
           <label>Fecha respuesta:</label>
           <input type="date" name="fresu" id="fresu" class="form-control input-sm" required="fresu" required>
           <label>Fat:</label>
           <input type="text" name="fatu" id="fatu" class="form-control input-sm" required="fatu" required>
           <label>Estatus:</label>
           <select name="estatusu" id="estatusu" class="form-control" >
            <option value="Aceptado">Aceptado</option>
            <option value="Cancelado">Cancelado</option>
            <option value="Rechazado">Rechazado</option>
          </select>
        </div>
      </div>
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
     var st = $('#st').val();
     var folio = $('#folio').val();
     var edificio = $('#edificio').val();
     var solicitante = $('#solicitante').val();
     var fsol = $('#fsol').val();
     var fres = $('#fres').val();
     var fat = $('#fat').val();
     var estatus = $('#estatus').val();

     if (st=="") {
      alertify.error("Escribe el st :)");
      return false;
    }else{
      if (folio=="") {
        swal("Bad!", "Escribe el el folio fat!", "success");
        return false;
      }else{
        if (edificio=="") {
          alertify.error("Escribe el edificio :)");
          return false;
        }else{
          if (solicitante=="") {
           alertify.error("Escribe el solicitante :)");
           return false;
         }else{
          if (fsol=="") {
            alertify.error("Escribe el fecha de la solisitud :)");
            return false;
          }else{
            if (fres=="") {
              alertify.error("Escribe el fecha de respuesta :)");
              return false;
            }else{
              if (fat=="") {
                alertify.error("Escribe el fat :)");
                return false;
              }else{
                if (estatus=="") {
                  alertify.error("Escribe el estatus :)");
                  return false;

                }else{
                  st=$('#st').val();
                  folio=$('#folio').val();
                  edificio=$('#edificio').val();
                  solicitante=$('#solicitante').val();
                  fsol=$('#fsol').val();
                  fres=$('#fres').val();
                  fat=$('#fat').val();
                  estatus=$('#estatus').val();

                  agregardatos(st,folio,edificio,solicitante,fsol,fres,fat,estatus);
                }
              }
            }
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







