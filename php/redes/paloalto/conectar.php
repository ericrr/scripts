<?php
  /* Dados do Banco de Dados a conectar */

$MySQL = array( 
	'servidor' => '10.0.0.5',
	'banco' => 'backup',
	'usuario' => 'backup',
	'senha' => '123mudar'
);
 // $conexao = mysql_connect($servidor, $usuario, $senha, $nbanco);

$MySQLi = new MySQLi($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);
// Verifica se ocorreu um erro e exibe a mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error(), E_USER_ERROR);
?>
