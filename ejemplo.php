<?php

if(!empty($_GET) && $_GET ['tipoForm'] == 'login' ) 
  // El formulario fue enviado con datos 
  $usuario = $_GET [ 'usuario'] 
  $clave = $_GET [ 'clave'] 

// asigno en estos dos atributos lo que venga del fomulario

  if (!empty($usuario) and !empty ($clave)) {
    // Para que no esten vacias.
  }

    if strlen($usuario > 6){
      echo 'Error el usuario fue muy corto'
  }
    else {
      if ($usuario == 'milagrostalia52@gmail.com' && $clave == 'mili09') {
      echo 'Usuario ok'  
      
      else {
        echo 'Usuario invalido '
      }
    }
  }

else {
  // Llegue hasta aca sin venir de un form completo
}

