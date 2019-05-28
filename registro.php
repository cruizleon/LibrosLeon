
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Login</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">
 
    </head>
    <header>
        <div>
            <img src="static/img/logo.png" th:src="@{/img/logo.png}"width="150" height="150"/>
        </div>
    </header>
    <body>
	<div id="header">
            <ul class="nav">
                <li><a href="http://localhost/LibrosLeon/index.html">INICIO</a></li>
                <li><a href="">LIBROS</a>
                    <ul>
                        <li><a href="http://localhost/LibrosLeon/novelasLiterarias.html">NOVELAS LITERARIAS</a></li>
                        <li><a href="http://localhost/LibrosLeon/cuentosInfantiles.html">CUENTOS INFANTILES</a></li>
                        <li><a href="http://localhost/LibrosLeon/comics.html">COMICS</a></li>
                        <li><a href="http://localhost/LibrosLeon/librosCientificos.html">LIBROS CIENTIFICOS</a></li>
                    </ul>
                </li>
                <li><a href="http://localhost/LibrosLeon/conocenos.php">CONOCENOS</a></li>
                <li><a href="http://localhost/LibrosLeon/login.html">INICIAR SESION</a></li>
            </ul>
	</div>
    </body>
</head>

<?php
	include("conectar.php");
	$registros=$base->query("SELECT * FROM DATOS_USUARIOS")->fetchAll(PDO::FETCH_OBJ);

	if(isset($_POST["cr"])){
		$nombre=$_POST["Nom"];
		$apellido=$_POST["Ape"];
		$direccion=$_POST["Dir"];
                $numero_cedula=$_POST["NumC"];
		$sql="INSERT INTO DATOS_USUARIOS(NOMBRE, APELLIDO, DIRECCION, NUMBERO_CEDULA) VALUES (:nom, :ape, :dir, :numc)";
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion, ":numc"=>$numero_cedula));
		header("Location:registro.php");
	}
?>

<h1>Registro</h1>
<form action="?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <table width="50%" border="0" align="center">
    <tr >
      
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="primera_fila">Numero_cedula</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>

	<?php
		foreach($registros as $persona):?>
			<tr>
			  <td><?php echo $persona->Nombre?></td>
			  <td><?php echo $persona->Apellido?></td>
			  <td><?php echo $persona->Direccion?></td>
                          
			  <td><?php echo $persona->Numero_cedula?> </td>
			</tr>
    <?php
		endforeach;
	?>
	<tr>
    <div class="modal-dialog text-center">
        <div class="col-smection">
            <div class="modal-content">-8 main-s
                <div class="col-12 user-img">
                    <img src="static/img/user.png" th:src="@{/img/user.png}"class="border border-warning"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="get">
                    <p class="font-weight-bolder text-warning">Registro</p>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre Usuario" name="Nombre"/>
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Apellido" name="Apellido"/>
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Direccion" name="Direccion"/>
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Numero cedula" name="Numero_cedula"/>
                    </div>
                    <button type="submit" class="btn btn-warning" name='cr' id='cr'><i class="fas fa-sign-in-alt"></i>  Incertar </button>
              
                </form>
            </div>
        </div>
    </div>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>zº