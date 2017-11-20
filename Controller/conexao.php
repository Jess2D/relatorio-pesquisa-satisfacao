<?php 
  $conexão = mysqli_connect('localhost', 'root', '', 'test' );
 
  
   mysqli_set_charset($conexão, 'UTF8');

if($conexão -> connect_error){
    die("Falha ao realizar conexão: " . $conexão -> connect_error);
}

?>