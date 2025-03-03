<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

// Aqui você normalmente verificaria as credenciais em um banco de dados
// Para demonstração, vamos assumir uma verificação simples
if ($email == "test@example.com" && $password == "password") {
    $_SESSION['user'] = $email;
    header("Location: index.html");
} else {
    echo "Credenciais inválidas!";
}
?>