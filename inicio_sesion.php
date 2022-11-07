<?php

   session_start();
   if(isset($_SESSION['usuario'])){
    header("location: bienvenido.php");
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inico de sesion o registro Redfords</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_login_registro.css">
</head>
<body>
    
    <main>
        <div class="contenedor.atras">
            <div class="nav.main">
        <ul class="nav-salida">
            <li>
                <a href="index.php"style="color:#FF0000;">volver</a>
              </li>
        </ul>
    </div>
    </div>
        <div class="contenedor__todo">
            
            <div class= "caja__trasera">
                <!--Formulario de inicio de sesion-->
               <div class="caja__trasera-inicio-de-sesion">
                      <h3>¿ya tienes cuenta?</h3>
                      <p>Inicia sesion para entrar a la pagina</p>
                     <button id="btn__iniciar-sesion">Iniciar sesion</button>
            </div>
             <!--Formulario de registro-->
             <div class="caja__trasera-registro">
                    <h3>¿aun no tienes cuenta?</h3>
                     <p>Registrate para iniciar sesion</p>
                      <button id="btn__registro">Regristrarse</button>
                </div>
          </div>

          <div class="contenedor__inicio-sesion-registro">

            <form action="login_usuario_bd.php" method="POST" class="formulario_inicio-de-sesion">
                <h2>Iniciar sesion</h2>
                <input type="text" placeholder="correo Electronico" name="correo">
                <input type="password" placeholder="contraseña" name= "contrasena">
                <button>Entrar</button>
            </form>

            <form action="registro_usuario_bd.php" method="POST" class="formulario__registro">
                <h2>registrarse</h2>
                <input type="text" placeholder="Nombre completo" name="nombre_completo">
                <input type="text" placeholder="correo electronico" name="correo">
                <input type="text" placeholder="usuario" name="usuario">
                <input type="password" placeholder="contraseña" name="contrasena">
                <button>registrarse</button>
            </form>



          </div>
     </div>



    </main>
    <script src="main.js"></scriptsrc></script>
</body>
</html>
