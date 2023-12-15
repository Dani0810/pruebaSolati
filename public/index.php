<?php
    include_once('../controlers/PHP/enrutador.php');
    include_once('../controlers/PHP/controlador.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../public/css/style_start.css">
</head>
<body>
    <nav>

    <button id="boton" class="singButtom">
        <span>
        Registrar
        </span>
    </button>
    <!-- script para que el boton lleve a otra pagina  -->
    <script>
        document.getElementById("boton").onclick = function(){
            window.location.href = "../views/form_register.php";
        }
    </script>
    <button id="boton2" class="listButtom">
        <span>
        Listar
        </span>
    </button>
        <!-- script para que el boton lleve a otra pagina  -->

    <script>
        document.getElementById("boton2").onclick = function(){
            window.location.href = "../views/lista_estudiantes.php";
        }
    </script>
    <button id="boton3" class="queryButtom">
        <span>
        consultar por ficha
        </span>
    </button>
        <!-- script para que el boton lleve a otra pagina  -->
    <script>
        document.getElementById("boton3").onclick = function(){
            window.location.href = "../views/consultaFicha.php";
        }
    </script>
    </nav>
    <?php
        $enrutador = new Enrutador();
        if(isset($_GET["cargar"])   &&   $enrutador->validarGet($_GET['cargar'])){
            $enrutador->cargarModulo($_GET['cargar']);
        }
        
    ?>
</body>
</html