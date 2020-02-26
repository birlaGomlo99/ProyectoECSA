 <?php
 session_start();

 if(isset($_SESSION['user'])){
  ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../../img/ecsa.jpg" width="220px" height="95px" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <span class="fas fa-home-lg"></span> Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../trabajador/index.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Trabajadores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../mantenimiento/index.php">Mantenimiento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <span class="far fa-address-card"></span>Salir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> </span>Salir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="return conf()" href="../../loginecsa/php/salir.php"> <i class="fa fa-power-off" aria-hidden="true"></i> Salir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bienvenido <?php echo $_SESSION['user'];?></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h2>este es de usuarios</h2>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <?php 
}else {
   // si no inicia sesion lo mandamos al login;
  header("Location:../../loginecsa/index.php");
}
?>
  <!-- Optional JavaScript -->
  <script>
    function conf(){
      if (confirm('¿Esta seguro de cerrar sesión?'))
        return true;
      else
        return false;
    }
  </script>