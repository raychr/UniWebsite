<?php
// Aqui você normalmente salvaria os dados do usuário em um banco de dados
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Para demonstração, vamos assumir que o registro é sempre bem-sucedido
echo "Registro bem-sucedido para $name!";
?>