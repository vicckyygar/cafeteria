
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
          background-color:rgb(209, 173,107) ;
          overflow-x: hidden;
          background-position: center;
          background-attachment: fixed;
        }
        .sesion{
           text-align: center;
            margin-top: 10px;
        }
        .socio{
            text-align: center;
            margin-top: 10px;
        }
        .sesion a{
            text-align: center;
            margin-top: 10px;
            color:  rgb(94, 65, 53);
        }
        .descuentos {
            margin: 20px 0;
            border: 1px solid #ccc;
            padding: 20px 10px 20px 10px;
            text-decoration: none;
            background-color: rgb(247, 170, 138);
            border-radius: 9px;
            text-align: center;
            transition: transform 0.4s ease, box-shadow 0.4s ease;

        }
        .overlay img{
            width: 100px;
            height: 100px;
            border-radius:50%;
        }
        .overlay {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
session_start();
if (!isset($_SESSION['nombre_usuario'])) {
    echo "Acceso denegado. Por favor, inicia sesión.";
    echo "<br><a href='login.html'>Iniciar Sesión</a>";
    exit();
}
?>
<div class="sesion">
    <h2>Bienvenido a tu perfil, <?php echo $_SESSION['nombre_usuario']; ?></h2>
    <p><a href='("Location: cierre_session.php");'>Cerrar sesión</a></p>
</div>

<section>
    <div class="socio">
    <h1>Gracias por hacerte socio!!!</h1>
    <p>Te ofrecemos distintos tipos de descuentos. ¡Elegí el que más te guste!</p>
</div>

    <div class="descuentos">
        <div class="overlay">
            <p class="nombre">2 cafés y 6 medialunas</p>
            <p class="precio">$3000</p>
            <img src="cafegatito.jpg" width="200" alt="Café y medialunas">
        </div>
    </div>

    <div class="descuentos">
        <div class="overlay">
            <p class="nombre">3 exprimidos y 3 tostados de jamón y queso</p>
            <p class="precio">$3250</p>
            <img src="jugopomelo.jpg" width="200" alt="Jugo y tostados">
        </div>
    </div>

    <div class="descuentos">
         <div class="overlay">
              <p class="nombre">2 alfajores y 2 café mocca</p>
               <p class="precio">$3400</p>
             <img src="alfajores.jpg" width="200" alt="Alfajores y café mocca">
        </div>
    </div>
</section>

</body>
</html>



