<?php
  $name = filter_input(INPUT_POST,'name');
  $contraeña = filter_input(INPUT_POST,'contraseña');
  $telefono = filter_input(INPUT_POST,'telefono');
  $name_complete = filter_input(INPUT_POST,'username');

  if (!empty ($name)){
    if (!empty($contraeña)){
      $host = "localhost";
      $dbUsername ="root";
      $dbPassword ="";
      $dbname = "Graffi";
      $dbtelefono ="";


      $conn = new mysqli($host. $dbUsername, $dbPassword, $dbname);
    }
    else{
      echo "password should not be empty";
      die();
    }
  }else{
      echo "Username should not be empty";
      die();
  }
?>