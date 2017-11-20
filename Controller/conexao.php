<?php 
  //$conexão = mysqli_connect('localhost', 'root', '', 'test' );
  $conexão = mysqli_connect('localhost', 'root', '', 'u276474155_pesq' );
 
  
   mysqli_set_charset($conexão, 'UTF8');

if($conexão -> connect_error){
    die("Falha ao realizar conexão: " . $conexão -> connect_error);
}

?>