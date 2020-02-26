<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading" style="text-align: center;">Login</div>
					<div class="panel panel-body">
						<div style="text-align: center;">
							<img src="../img/logo.png" height="250" img="img-fluid">
						</div>
						<p></p>
						<form action="php/start.php" method="post">
							<label>Usuario</label>
							<input type="text" id="user" class="form-control input-sm" name="user" required pattern="[A-Za-z]{1-15}">
							<label>Password</label>
							<input type="password" id="password" class="form-control input-sm" name="password" required pattern="[A-Za-z]{1-15}">
							<p></p>
							<button  type="submit" class="btn btn-primary"  id="entrarSistema">Entrar</button>
							<a href="registro.php" class="btn btn-danger">Registro</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

		});	
	});
</script>