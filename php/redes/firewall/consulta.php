<html>
  <head>
  <title> Consulta Equipamentos - Firewall </title>
  </head>

<body>
<?php
/**
 *
 * Arquivo com um exemplo de consulta ao banco de dados MySQL
 *
 * PHP 5+, MySQL 4.1+
 *
 */
// Inclui o arquivo que faz a conexão ao banco de dados
require_once('conectar.php');

// Exibe o total de registros encontrados
// Tabela de Resultado total:
 echo "<table align='center'border=0>";
 echo "<tr>";
 echo "<th>Relação dos Equipamentos que estão sendo feito Backup</th>";
 echo "</tr>";
 echo "<tr> </tr>";
 echo "<tr> </tr>";
 echo "<tr> </tr>";
 echo "</table>";
 

// Criando tabela e cabeçalho de dados:
 echo "<table align='center' border=1>";
 echo "<tr>";
 echo "<th>ID</th>";
 echo "<th>IP</th>";
 echo "<th>CLIENTE</th>";
 echo "<th>ORIGEM</th>";
 echo "</tr>";

// Monta a consulta SQL para trazer as últimas 10 notícias ativas
$sql = 'SELECT * FROM firewalls';

// Executa a consulta OU mostra uma mensagem de erro
$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);


// Faz um loop, passando por todos os resultados encontrados
while ($retorno = $resultado->fetch_object()) {
  // Exibe o retorno dentro de um bloco HTML
  ?>

  <?php echo "<tr>"; ?>
  <?php echo "<td>".$retorno->id."</td>"; ?>
  <?php echo "<td>".$retorno->ip."</td>"; ?>
  <?php echo "<td>".$retorno->name."</td>"; ?>
  <?php echo "<td>".$retorno->ip_origem."</td>"; ?>
  <?php echo "</tr>"; ?>
	

  <?php
} // while ($retorno = $resultado->fetch_object())



// Exibe o total de registros encontrados
// Tabela de Resultado total:
 echo "<table align='center'border=0>";
 echo "<tr>";
 echo "<th>Resultados Econtrados</th>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>".$resultado->num_rows."</th>";
 echo "</tr>";
 echo "</table>";

// Libera o resultado para liberar memória
$resultado->free();

?>
 <input type='button' value='Voltar' onclick='history.go(-1)' />

 </body>
</html>
