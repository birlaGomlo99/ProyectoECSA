	<!DOCTYPE html>
	<html lang="es">
	<head>
		<!-- Required meta tags -->
		<title>Publicación</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<?php include '../linkboostrap/cdnbostrap.php';?>
	</head>



	<input type="hidden" name="id" value="<?php echo $object['id_evi']; ?>">

	<?php 
	include 'conex.php';
	$sql = "SELECT * FROM evidencia";
	$tradicional = $mysqli->query($sql);

	?>


	<div class="container mt-5 pt-5"></div>
	<div class="container">
		<div class="row">
			<?php while ($object = mysqli_fetch_array($tradicional)): ?>
				<input type="hidden" name="id" value="<?php echo $object['id_evi']; ?>">
				<div class="col-lg-4 col-sm-6">
					<div class="card-deck h-100">
						<div class="card bg-light mb-5" style="max-width: 25rem;">
							<div class="card-header" >
								<p class="card-text" style="text-align: right;"> <a href="eliminarpub.php?id=<?php echo $object['id_evi']; ?>" onclick="return confirmar()">  <button class=" btn bg-light"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></a> 

									<a href="frmmodpub.php?id=<?php echo $object['id_evi']; ?>">  <button class=" btn bg-light"><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></button></a>
								</p> 
							</div>
							<div class="card-body" >
								<img class="img-fluid rounded" >
								<img width="150px" height="150px" src= <?php echo $object['imagen']; ?> ><br><br>
								<p class="card-text  text-justify" style="font-size: 20px; color: ; text-align: center;"><?php echo $object['tiempo']; ?></p>
								<p class="card-text"></p>
							</div>
		   			<!--<div class="card-footer h-40">
		   				<p class="card-text">Responder a:<a href="mailto:ventaskpan@gmail.com">	<i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a></p>
		   			</div>-->
		   			<div class="card-footer h-40">
		   				<p class="card-text">Publicado: <?php echo $object['fech']; ?> </p>
		   			</div>
		   		</div>
		   	</div>
		   </div>
		<?php endwhile; ?> 
	</div>
</div>
</html>


<div class="container mt-5 pt-5"></div>

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