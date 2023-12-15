<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="../public/css/style_edit.css">
</head>
<body>
    <?php
        include_once('../controlers/PHP/controlador.php');
        $controlador = new ControladorEstudiante();
        $Id = $_GET['Id'];
        $estudiante = $controlador->ver($Id);
    ?>

    <var>
        <button id="boton" class="singButtom">
        <span>
        Regresar
        </span>
    </button>
    <script>
        document.getElementById("boton").onclick = function(){
            window.location.href = "../views/lista_estudiantes.php";
        }
    </script>
    <button id="boton2" class="listButtom">
        <span>
        Inicio
        </span>
    </button>
    <script>
        document.getElementById("boton2").onclick = function(){
            window.location.href = "../public/index.php";
        }
    </script>
    </var>

    <!-- formulario para editar los datos de el estudiantes -->
    <form action=""  method="post" class="form-container">
        <div class="padre">
            <h3>Actualizar</h3>
            <input type="hidden" name="Id" value="<?php echo $estudiante['Id']; ?>">
            
            <div class="hijo4">
                <label for="">
                    <p>Nombre</p>
                    <div id="imput-container">
                        <input type="text" name="name" id="imput" value="<?php  echo $estudiante['Nombre'];?>" required>
                    </div>
                </label>
            </div>
            <div class="hijo5">
                <label for="">
                    <p>Primer apellido</p>
                    <div id="imput-container">
                        <input type="text" name="lastname1" id="imput" value="<?php  echo $estudiante['Apellido1'];   ?>" required>
                    </div>
                </label>
            </div>
            <div class="hijo6">
                <label for="">
                    <p>Segundo apellido</p>
                    <div id="imput-container">
                        <input type="text" name="lastname2" id="imput" value="<?php  echo $estudiante['Apellido2'];   ?>" required>
                    </div>
                </label>
            </div>
            <div class="hijo13">
                <label for="">
                    <p>Genero</p>
                    <div id="doctype-container">
                        <select name="genus" id="select" value="<?php  echo $estudiante['Sexo'];   ?>" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="56 tipos de gays">56 Tipos de Gays</option>
                        </select>
                    </div>
                </label>
            </div>
            <div class="hijo7">
                <label for="">
                    <p>Correo institucional</p>
                    <div id="imput-container">
                        <input type="email" name="emailins" id="imput" value="<?php  echo $estudiante['EmailInst'];   ?>" required>
                    </div>
                </label>
            </div>
            <div class="hijo8">
                <label for="">
                    <p>Correo personal</p>
                    <div id="imput-container">
                        <input type="email" name="emailper" id="imput" value="<?php  echo $estudiante['EmailPer'];   ?>" required>
                    </div>
                </label>
            </div>
            <div class="hijo9">
                <label for="">
                    <p>Numero de telefono</p>
                    <div id="imput-container">
                        <input type="text" name="phonenumber" id="imput" value="<?php  echo $estudiante['celular'];   ?>" required>
                    </div>
                </label>
            </div>
            <div class="hijo10">
                <label for="">
                    <p>Edad</p>
                    <div id="imput-container">
                        <input type="number" name="yearsold" id="imput" value="<?php  echo $estudiante['Edad'];   ?>" required>
                    </div>
                </label>
            </div>
            <div class="hijo12">
                <label for="">
                    <p>Direccion</p>
                    <div id="imput-container">
                        <input type="text" name="address" id="imput" value="<?php  echo $estudiante['Direccion'];   ?>" required>
                    </div><br>
                </label>
            </div>
            <div class="hijo1">
                <input type="submit" name="editar" class="btn-submit" value="Guardar">
            </div>
        </div>
    <?php
            if(isset($_POST['editar'])) {
                $id = $_POST['Id'];
                $name = $_POST['name'];
                $lastName1 = $_POST['lastname1'];
                $lastName2 = $_POST['lastname2'];
                $genus = $_POST['genus'];
                $emailIns = $_POST['emailins'];
                $emailPer = $_POST['emailper'];
                $phoneNumber = $_POST['phonenumber'];
                $yearsOld = $_POST['yearsold'];
                $address = $_POST['address'];
                
                $controlador = new ControladorEstudiante();
                $resultado = $controlador->editar($id, $name, $lastName1, $lastName2, $genus, $emailIns, $emailPer, $phoneNumber, $yearsOld, $address);
                
                if($resultado) {
                    echo "<p>Estudiante actualizado correctamente.</p>";
                } else {
                    echo "Error al actualizar el estudiante.";
                }
            }
            ?>
    </form>

</body>
</html>
