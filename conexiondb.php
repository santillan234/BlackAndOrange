<?php
  //echo 'Hola Mundo';
    //Esto es para conectar php con la base de datos MySQL
  $hostname = "192.168.0.59";         //Es la IP que te proporciona la base de datos de tu hosting
  $username = "textos_admin";         //El usuario que viene cargado por defecto es root con contraseña vacia
  $password = "Rodrigo40150245.";
  $dbname = "curriculum";             //esto es el nombre de la base de datos.

    //Esta es una funcion que me conecta con la base de datos
    // Creamos la conexión
  $conn = new mysqli($hostname, $username, $password, $dbname);
    // comprobamos la conexion. Esta funcion dice si te conectaste o no te conectaste a la base de datos. True o false
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }else{
    echo "Conexión satisfactoria";
  };
  $conn->close();
  
?>