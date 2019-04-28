<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script type="text/javascript">
            function confirmar()
            {
                var usuario = document.getElementById("usuario").value;
                var password = document.getElementById("pass").value;
                
                if(usuario=="pepito" && password=="54321")
                {
                    window.alert("Sesion iniciada");
                    alert("Sesion iniciada");
                    location.href='http://localhost/LibrosLeon/index.php'
                }
                else 
                {
                    window.alert("verifique los datos o registrese");
                    alert("verifique los datos o registrese");
                }
            }
        </script>
    </head>
    <center>
        <header>
            <header>
                <div>
                    <img src="MEOWS 'N' WOOFS.jpg">
                </div>
            </header>
            <h1 style="color:black;">INICIAR SESION</h1>
        </header>
     </center>
    <body background="https://i1.wp.com/www.ayudacelular.com/wp-content/uploads/2017/10/fondo-negro.jpg?ssl=1">
    
         <div>
            <center>
                <img src="https://www.imat.org.mx/images/people/user-login.png">
            </center>
        </div>
        <center>
            <table>
                <tr>
                    <td><label style="color:white;">Usuario:</label></td> <td><input type="text" name="usuario" id="usuario" placeholder="nombre de usuario"></td>
                </tr>
                <tr>
                    <td><label style="color:white;">Password:</label></td> <td><input type="text" name="pass" id="pass" placeholder="contraseña"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="button" name="btcontinuar" id="btcontinuar" onclick="confirmar()" value="continuar" style="width: 100%"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="button" name="registro" id="registro" onclick="location.href='http://localhost/LibrosLeon/index.php'" value="Registrarse" style="width: 100%"></td>
                </tr>
                
            </table> 
        </center>
     <div>
        <footer style="color:white;">
            Derechos Reservados &copy; 2019
        </footer>
    </div>
</body>
</html>

