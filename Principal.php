<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 19/12/2018
 * Time: 16:48
 */

require_once ('AutoPHP\autoload.php');

$ordem = $_GET['ordem'];
$ordem = (isset($ordem) && !empty($ordem)) ? $ordem : 'ASC';

use Cliente\DataBase\Connect;
use Cliente\Tipo\ClientePF;
use Cliente\Tipo\ClientePJ;
use Cliente\Data\DadosCliente;

$db = new Connect();
$pdo = $db->dbConnect();

$dadosCliente = new DadosCliente($pdo);

$dbClientes = $dadosCliente->getClientes($ordem);
$clientes = [];

foreach ($dbClientes as $cliente){
    $clientes[] = $cliente['tipoCliente'] == "PF" ? new ClientePF($cliente['id'], $cliente['nome'], $cliente['numId'], $cliente['importancia'], $cliente['endereco']) : new ClientePJ($cliente['id'], $cliente['nome'], $cliente['numId'], $cliente['importancia'], $cliente['endereco'], $cliente['enderecoCobranca']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>CLIENTES</title>
    <meta charset="utf-8">
    <meta rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<header>
    <h1>CADASTRO</h1>
</header>
<table class="table">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>CPF/CNPJ</th>
        <th>IMPORTANCIA</th>
        <th>ENDEREÇO</th>
        <th>ENDEREÇO DE COBRANÇA</th>
    </tr>
    <tbody>
    <?php foreach ($clientes as $cliente) : ?>
    <tr>
        <td><?php echo $cliente->getId(); ?></td>
        <td><?php echo $cliente->getCliente()=='pf' ? 'Pessoa Fisica' : 'Pessoa Jurídica'; ?></td>
        <td>
            <?php for( $i=0; $i<=5; $i++ ): ?>
                <?php if($i <= $cliente->getImportancia()):?>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <?php else :?>
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                <?php endif; ?>
            <?php endfor; ?>
        </td>
        <td><a href="detalhes.php?id=<?php echo $cliente->getId();?>" title="Clique para visualizar"><?php echo $cliente->getNome(); ?></a></td>
        <td><?php echo $cliente->getTipoCliente()=="PF" ? $cliente->getCpf() : $cliente->getCnpj(); ?></td>
        <td><?php echo $cliente->getEndereco(); ?></td>
        <td><?php echo $cliente->getTipoCliente()=="PJ" ? $cliente->getEnderecoCobranca() : ''; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>


</body>
</html>