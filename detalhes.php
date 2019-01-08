<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 08/01/2019
 * Time: 15:43
 */
require_once('AutoPHP\autoload.php');

use Cliente\DataBase\Connect;
use Cliente\Tipo\ClientePF;
use Cliente\Tipo\ClientePJ;
use Cliente\Data\DadosCliente;

$idCliente = $_GET['id'];
$db = new Connect();
$pdo = $db->dbConnect();

$dadosCliente = new DadosCliente($pdo);
$cliente = $dadosCliente->getClientes($idCliente);

$cliente = $cliente['tipoCliente'] == "PF" ? new ClientePF($cliente['id'], $cliente['nome'], $cliente['numId'], $cliente['importancia'], $cliente['endereco']) : new ClientePJ($cliente['id'], $cliente['nome'], $cliente['numId'], $cliente['importancia'], $cliente['endereco'], $cliente['enderecoCobranca']);

?>


