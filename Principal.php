<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 19/12/2018
 * Time: 16:48
 */

require_once ('AutoPHP\autoload.php');

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
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>


</body>
</html>