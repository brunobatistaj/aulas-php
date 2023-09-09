<?php
// Array com as informações de login
$usuarios = array(
    array('usuario' => 'usuario1@gmail.com', 'senha' => 'senha1'),
    array('usuario' => 'usuario2@gmail.com', 'senha' => 'senha2'),
    array('usuario' => 'usuario3@gmail.com', 'senha' => 'senha3'),
    array('usuario' => 'usuario4@gmail.com', 'senha' => 'senha4'),
    array('usuario' => 'usuario5@gmail.com', 'senha' => 'senha5')
);

// Obtenha o usuário e a senha do formulário
$usuario = $_POST['username'];
$senha = $_POST['password'];

// Verifique as credenciais
$credenciaisValidas = false;
foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuario && $u['senha'] === $senha) {
        $credenciaisValidas = true;
        break;
    }
}

if ($credenciaisValidas) {
    // Redirecione para outra página após o login bem-sucedido
    header('Location: succes.html');
    exit();
} else {
    // Caso contrário, exiba uma mensagem de erro e permita que o usuário tente novamente
    echo "Credenciais inválidas. <a href='/exercicios/ex5login/index.html'>Tente novamente</a>";
}
?>
