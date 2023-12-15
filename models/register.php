<?php
      // se incluye controladores
      include_once('../controlers/PHP/controlador.php');
      $controlador = new ControladorEstudiante();
      // if(isset($_POST['enviar'])){

            // se ejecuta el controlador de crear para crear un nuevo registro
            $r = $controlador->crear($_POST['numdoc'], $_POST['doctype'], $_POST['name'], $_POST['lastname1'], $_POST['lastname2'],
                                    $_POST['yearsold'], $_POST['emailins'], $_POST['emailper'], $_POST['phonenumbre'], $_POST['address'], $_POST['genus']);
            
            
                                    // validacion de el registro
            if($r){
                  echo "
                  <script>
                      alert('Se he registrado con exito');
                      window.location ='../views/lista_estudiantes.php';
                  </script>
              ";
            }else{
                  echo "
                  <script>
                      alert('El usuario ya se encuentra registrado');
                      window.location ='../views/form_register.php';
                  </script>
              ";
            }
            
      // }
?>