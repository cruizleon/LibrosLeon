
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
		$sql="INSERT INTO DATOS_USUARIOS(NOMBRE, APELLIDO, DIRECCION, NUMERO_CEDULA) VALUES (:nom, :ape, :dir, :numc)";
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion, ":numc"=>$numero_cedula));
		header("Location:registro.php");
	}
?>


<form action="?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <center>
  <table width="50%" border="0" align="center">
    <tr >
      
      
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>

	
		
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado 'placeholder="Nombre" name="username"></td>
      <td><input type='text' name='Ape' size='10' class='centrado'placeholder="Apellido" name="username"></td>
      <td><input type='text' name='Dir' size='10' class='centrado'placeholder="Direccion" name="username"></td>
      <td><input type='text' name='NumC' size='10' class='centrado'placeholder="Cedula" name="username"></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
  </table>
        </center>
</form>
<p>&nbsp;</p>
</body>
</html>zº