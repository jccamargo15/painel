<?php 
/***** configurações básicas iniciais para personalização do painel *****/

// variaveis do painel - INICIO
$nome_empresa = 'Nome Empresa';

$cor_principal = '#4b4b4b'; // cor que será usada como base para o painel

$online = 0; //TROCAR

// dados banco de dados online
$host_online = '127.0.0.1';
$user_online = 'root';
$password_online = '';
$database_online = 'painel';

// dados banco de dados local
$host_local = '127.0.0.1';
$user_local = 'root';
$password_local = '';
$database_local = 'painel';

// variaveis do painel - FIM

// conexão banco de dados - INICIO

// dados banco online e local
if($online) {
	$conn = mysqli_connect($host_online, $user_online, $password_online, $database_online);
}
else {
	$conn = mysqli_connect($host_local, $user_local, $password_local, $database_local);
}
// conexão banco de dados - FIM

// arquivo "quebra-galho"
include 'fatmonkey.php';

?>