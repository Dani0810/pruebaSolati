
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Crear Registro</title>
      <link rel="stylesheet" href="../public/css/style_sign.css">
</head>
<body>
      <nav>
      <button id="boton" class="singButtom">
        <span>
        Inicio
        </span>
    </button>
    <script>
        document.getElementById("boton").onclick = function(){
            window.location.href = "../public/index.php";
        }
    </script>
    <button id="boton2" class="listButtom">
        <span>
        Listar
        </span>
    </button>
    <script>
        document.getElementById("boton2").onclick = function(){
            window.location.href = "../views/lista_estudiantes.php";
        }
    </script>
      </nav>
      <form action="../models/register.php" method="post" class="form-container">
            <div class="padre">
                  <div class="hijo1">
                        <h3>
                              Registro estudiantes
                        </h3>
                  </div>
                  <div class="hijo2">
                        <label for="" id="text">
                              <p>Seleccione su documento de identidad</p>
                              <div id="doctype-container">
                                    <select name="doctype" required class="doctype"  id="select">
                                          <option value="Seleccione">Seleccione</option>
                                          <option value="Tarjeta de identidad">Tarjeta de Identidad</option>
                                          <option value="Pasaporte">Pasaporte</option>
                                          <option value="Cedula de ciudadania">Cedula de Ciudadania</option>
                                    </select>
                              </div>
                        </label>
                  </div>
                  <div class="hijo3">
                        <label for="" id="text">
                              <p>Digite su numero de identidad</p>
                              <div id="imput-container">
                                    <input type="text" placeholder="Ingrese su numero de identificacion" name="numdoc" class="docnum" id="imput"   required>
                              </div>
                        </label>
                  </div>
                  <div class="hijo4">
                        <p>Nombre</p>
                        <div id="imput-container">
                              <input type="text" name="name" class="name" required placeholder="Nombre" id="imput">
                        </div>
                  </div>
                  <div class="hijo5">
                        <label for="" id="text">
                              <p>Primer apellido</p>
                              <div id="imput-container">
                                    <input type="text" name="lastname1" class="lastname" required placeholder="Primer Apellido" id="imput">
                              </div>
                        </label>
                  </div>
                  <div class="hijo6">
                        <label for="" id="text">
                              <p>Segundo apellido</p>
                              <div id="imput-container">
                                    <input type="text" name="lastname2" class="lastname2" required placeholder="Segundo apellido" id="imput">
                              </div>
                        </label>
                  </div>
                  <div class="hijo13">
                        <label for="" id="text">
                              <p>Genero</p>
                              <div id="doctype-container">
                                    <select name="genus" class="genero" id="select">
                                          <option value="Masculino">Masculino</option>
                                          <option value="Femenino">Femenino</option>
                                          
                                          
                                    </select>
                              </div>
                        </label>
                  </div>
                  <div class="hijo7">
                        <label for="" id="text">
                              <p>Correo institucional</p>
                              <div id="imput-container">
                                    <input type="email" name="emailins" class="emailins" required placeholder="Correo Institucional" id="imput">
                              </div>
                        </label>
                  </div>
                  <div class="hijo8">
                        <label for="" id="text">
                              <p>Correo personal</p>
                              <div id="imput-container">
                                    <input type="email" name="emailper" class="imailper" required placeholder="Correo Personal" id="imput">
                              </div>
                        </label>
                  </div>
                  <div class="hijo9">
                        <label for="" id="text">
                              <p>Numero de telefono</p>
                              <div id="imput-container">
                                    <input type="text" name="phonenumbre" class="phone" required placeholder="Numero de telefono" id="imput">
                              </div>
                        </label>
                  </div>
                  <div class="hijo10">
                        <label for="" id="text">
                              <p>Edad</p>
                              <div id="imput-container">
                                    <input type="number" name="yearsold" class="year" required placeholder="Edad" id="imput">
                              </div>
                        </label>
                  </div>
                  <div class="hijo12">
                        <label for="" id="text">
                              <p>Direccion</p>
                              <div id="imput-container">
                                    <input type="text" name="address" class="direccion" required placeholder="Direccion"  id="imput">
                              </div>
                        </label>
                  </div>
                  <div class="hijo11">
                        <input type="submit" > 
                       <!--  <button type="submit" class="btn-submit">Registar</button>-->

                  </div>
            </div>
            
      </form>
</body>
</html>