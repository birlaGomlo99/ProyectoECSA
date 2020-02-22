<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<?php include '../linkboostrap/cdnbostrap.php';?>
	<?php 
	include 'conex.php';
	$sql = "SELECT * FROM evidencia where tiempo='Inicio'";
	$tradicional = $mysqli->query($sql);

	?>
</head>
<body>


	<br><br><br><br><br><br>
	<!-- Button trigger modal -->
	<div class="container">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Subir evidencia
		</button>
	</div>
	<br><br>
	<div class="container">
		<div class="row">
			<div class=" col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#description" role="tab" aria-controls="description" aria-selected="true">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link"  href="#history" role="tab" aria-controls="history" aria-selected="false">Proceso</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#deals" role="tab" aria-controls="deals" aria-selected="false">Estado actual (Terminado)</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h4 class="card-title">Evidencia</h4>
						<h6 class="card-subtitle mb-2">Imagenes de como antes de empezar a trabajar</h6>

						<div class="tab-content mt-3">
							<div class="tab-pane active" id="description" role="tabpanel">
								<div class="row row-cols-1 row-cols-md-2">
									<?php while ($object = mysqli_fetch_array($tradicional)): ?>
										<input type="hidden" name="id" value="<?php echo $object['id_evi']; ?>">
										<div class="col-md-4">
											<div class="card">
												<img width="100" height="200" src= "<?php echo $object['imagen']; ?>" class="card-img-top" alt="...">
												<div class="card-body">

													<p class="card-text">Enviado: <?php echo $object['fech']; ?></p>
												</div>
												<p class="card-text" style="text-align: right;"> <a href="eliminarpub.php?id=<?php echo $object['id_evi']; ?>" onclick="return confirmar()">  <button class=" btn bg-light"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></a> 

													<a href="frmmodpub.php?id=<?php echo $object['id_evi']; ?>">  <button class=" btn bg-light"><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></button></a>

												</button></p>
											</div>
											<br><br>
										</div>
									<?php endwhile; ?> 

								</div>
							</div>

							<div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">  
								<?php 
								$sql = "SELECT * FROM evidencia where tiempo='En proceso'";
								$proceso = $mysqli->query($sql);?>
								<div class="row row-cols-1 row-cols-md-2">
									<?php while ($obj = mysqli_fetch_array($proceso)): ?>
										<input type="hidden" name="id" value="<?php echo $obj['id_evi']; ?>">
										<div class="col-md-4">
											<div class="card">
												<img width="100" height="200" src= "<?php echo $obj['imagen']; ?>" class="card-img-top" alt="...">
												<div class="card-body">

													<p class="card-text">Enviado: <?php echo $obj['fech']; ?></p>
												</div>
												<p class="card-text" style="text-align: right;"> <a href="eliminarpub.php?id=<?php echo $obj['id_evi']; ?>" onclick="return confirmar()">  <button class=" btn bg-light"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></a> 

													<a href="frmmodpub.php?id=<?php echo $obj['id_evi']; ?>">  <button class=" btn bg-light"><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></button></a>

												</button></p>
											</div>
											<br><br>
										</div>
									<?php endwhile; ?> 

								</div>
							</div>

							<div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
								<?php 
								$sql = "SELECT * FROM evidencia where tiempo='Trabajo terminado'";
								$termino = $mysqli->query($sql);?>
								<div class="row row-cols-1 row-cols-md-2">
									<?php while ($ter = mysqli_fetch_array($termino)): ?>
										<input type="hidden" name="id" value="<?php echo $ter['id_evi']; ?>">
										<div class="col-md-4">
											<div class="card">
												<img width="100" height="200" src= "<?php echo $ter['imagen']; ?>" class="card-img-top" alt="...">
												<div class="card-body">

													<p class="card-text">Enviado: <?php echo $ter['fech']; ?></p>
												</div>
												<p class="card-text" style="text-align: right;"> <a href="eliminarpub.php?id=<?php echo $ter['id_evi']; ?>" onclick="return confirmar()">  <button class=" btn bg-light"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></a> 

													<a href="frmmodpub.php?id=<?php echo $ter['id_evi']; ?>">  <button class=" btn bg-light"><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></button></a>

												</button></p>
											</div>
											<br><br>
										</div>
									<?php endwhile; ?> 

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal para nuevo-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Evidencia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<form action="guardarpub.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Imagen:</label>
							<div class="col-sm-9">
								<input type="file" name="imagen" id="imagen" required="no" class="form-control" onchange="return fileValidation()" >
							</div>
						</div>
						<div class="form-group">
							<label>Tiempo:</label>
							<select name="tiempo" id="tiempo" class="form-control" >
								<option value="Inicio">Inicio</option>
								<option value="En proceso">En proceso</option>
								<option value="Trabajo terminado">Trabajo terminado</option>
							</select>

						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" >Agregar</button>
					</div>
				</form>
					</div>
			</div>
		</div>
	</div>
</div><br>


</div>
</body>
</html>

<!--Script para eliminar-->
<script>
	function confirmar()
	{
		if (confirm('¿Esta seguro de eliminar el mensaje seleccionado?'))
			return true;
		else
			return false;
	}
</script>
<script type="text/javascript">
	$('#bologna-list a').on('click', function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
</script>