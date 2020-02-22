<?php 

require_once "../php/conexion.php";
$conexion=conexion();

?>

<div class="row">
	<div class="col-sm-12">
		<h3 class="text-center">Lista de trabajadores ECSA</h3>
		<br>
		<caption>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
			</button>
		</caption>
		<br><br>
		<div class="table-responsive">
		<table class="table table-hover table-condensed table-bordered"  id="tabladiniamica">
			
			<thead>
				<tr style="text-align:center">
					<td>Nombre</td>
					<td>A. paterno</td>
					<td>A. materno</td>
					<td>NSS</td>
					<td>Telefono</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>
				<?php 

				$sql="SELECT id,nombre,appat,apmat,nss,telefono 
				from t_persona";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
					$ver[1]."||".
					$ver[2]."||".
					$ver[3]."||".
					$ver[4]."||".
					$ver[5];
					?>

					<tr>
						<td><?php echo $ver[1] ?></td>
						<td><?php echo $ver[2] ?></td>
						<td><?php echo $ver[3] ?></td>
						<td><?php echo $ver[4] ?></td>
						<td><?php echo $ver[5] ?></td>
						<td style="text-align:center">
							<!-- Button trigger modal -->
							<button type="button btn-sm" class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion"  onclick="agregaform('<?php echo $datos ?>')">
							<i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
							</button>

						</td>
						<td style="text-align:center">
							<button type="button btn-sm" class="btn btn-danger" 
							onclick="preguntarSiNo('<?php echo $ver[0] ?>')"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>
						</button>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>
</div>
</div>


<script src="//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#tabladiniamica').DataTable({
			languaje:
			{
				"sProcessing":     "Procesando...",
				"sLengthMenu":     "Mostrar _MENU_ registros",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla =(",
				"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix":    "",
				"sSearch":         "Buscar:",
				"sUrl":            "",
				"sInfoThousands":  ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst":    "Primero",
					"sLast":     "Último",
					"sNext":     "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			}
		});
	} );
</script>

