 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 
<html>
    <head>
        <title>Libros Leon</title>
        <meta charset="UTF-8">
        <meta name="description" content="Ejemplo de HTML5">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta charset="iso-8859-1">
        <title>Este texto es el título del documento</title>
        <link rel="stylesheet" href="misestilos.css">
            
        <style type="text/css">
			
            * {
		margin:0px;
		padding:0px;
            }
			
            #header {
		margin:auto;
		width:500px;
		font-family:Arial, Helvetica, sans-serif;
            }
			
            ul, ol {
		list-style:none;
            }
			
            .nav > li {
		float:left;
            }
			
            .nav li a {
		background-color:#000;
		color:#fff;
                text-decoration:none;
		padding:10px 12px;
		display:block;
            }
			
            .nav li a:hover {
                background-color:#434343;
            }
			
            .nav li ul {
		display:none;
		position:absolute;
		min-width:140px;
            }
			
            .nav li:hover > ul {
		display:block;
            }
			
            .nav li ul li {
		position:relative;
            }
			
            .nav li ul li ul {
		right:-140px;
		top:0px;
            }
			
        </style>
    </head>
    <header>
        <div>
            <img src="static/img/logo.JPG">
        </div>
    </header>
    <body>
	<div id="header">
            <ul class="nav">
                <li><a href="">INICIO</a></li>
                <li><a href="">LIBROS</a>
                    <ul>
                        <li><a href="http://localhost/LibrosLeon/novelasLiterarias.php">NOVELAS LITERARIAS</a></li>
                        <li><a href="http://localhost/LibrosLeon/cuentosInfantiles.php">CUENTOS INFANTILES</a></li>
                        <li><a href="http://localhost/LibrosLeon/comics.php">COMICS</a></li>
                        <li><a href="http://localhost/LibrosLeon/librosCientificos.php">LIBROS CIENTIFICOS</a></li>
                    </ul>
                </li>
                <li><a href="http://localhost/LibrosLeon/conocenos.php">CONOCENOS</a></li>
                <li><a href="http://localhost/LibrosLeon/login.html">INICIAR SESION</a></li>
            </ul>
	</div>
    </body>
    <div>
        <center>
            <img src="https://concepto.de/wp-content/uploads/2015/08/literatura-e1505406155886.jpeg">
        </center>
    </div>
    <hr />
    <h1 style="color:white;">NOVEDADES</h1>
    <div>
        <img src="https://images-na.ssl-images-amazon.com/images/S/cmx-images-prod/Item/728906/728906._SX360_QL80_TTD_.jpg"width="200" height="300"/>
        <img src="https://imagessl5.casadellibro.com/a/l/t0/55/9788401336355.jpg"width="200" height="300"/>
        <img src="https://i.pinimg.com/originals/a0/dc/9e/a0dc9ee734c1a8ac0ffd7f1e728c13db.jpg"width="200" height="300"/>
        <img src="https://laslecturasdeguillermo.files.wordpress.com/2012/10/historia-del-tiempo-editorial-crc3adtica.jpg"width="200" height="300"/>
        <button onclick="location.href='http://localhost:8383/proyectoWeb/inicio.html'">VER MAS</button>
    </div>
    <hr />
    <h1 style="color:white;">100% RECOMENDADOS</h1>
    <div>
        <img src="https://crm.librerianacional.com/upload/63e8b456-e2cb-cec2-9609-5c785080297c_imagen"width="200" height="300"/>
        <img src="https://images-na.ssl-images-amazon.com/images/I/41HHYqg6rWL._SX304_BO1,204,203,200_.jpg"width="200" height="300"/>
        <img src="https://crm.librerianacional.com/upload/c3d6a30b-f581-78b6-1ca3-5be70378cca9_imagen"width="200" height="300"/>
        <img src="https://imagessl9.casadellibro.com/a/l/t0/19/9788466664219.jpg"width="200" height="300"/>
        <button onclick="location.href='http://localhost:8383/proyectoWeb/inicio.html'">VER MAS</button>
    </div>
    <hr />
    <h1 style="color:white;">EDITORIALES</h1>
    <div>
        <img src="http://www.edicionesnorma.com/wp-content/uploads/2015/07/logo_norma.png">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Logo_Editorial_Polar.png"width="200" height="300"/>
        <img src="http://www.replica.es/wp-content/uploads/2015/11/Planeta-300x200.png"/>
        <button onclick="location.href='http://localhost:8383/proyectoWeb/inicio.html'">VER MAS</button>
    </div>
    <body background="https://i1.wp.com/www.ayudacelular.com/wp-content/uploads/2017/10/fondo-negro.jpg?ssl=1">
    
    <footer style="color:white;">
        Derechos Reservados &copy; 2019
    </footer>
    </body>
</html>