<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  // salvar ou processar os dados aqui
  
  echo 'Cadastro realizado com sucesso!';
}

?>
