<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 07/01/2019
 * Time: 15:39
 */

namespace Cliente\Data;

use Cliente\Tipo\ClientePJ;
use Cliente\Tipo\ClientePF;

class DadosCliente{

    private $conexao;

    public function __construct($pdo){
        $this->conexao = $pdo;
    }

    function getClientes ($ordem = 'DES'){
        $stmt = $this->conexao->prepare("SELECT * FROM clientes ORDER BY id {$ordem}");
        $stmt->execute();

        $DadosCliente = $stmt->fetchAll();
        return $DadosCliente;
    }

    function getCliente($id){
        $stmt = $this->conexao->prepare("SELECT * FROM clientes WHERE id = {$id}");
        $stmt->execute();

        $DadosCliente = $stmt->fetch();
        return $DadosCliente;
    }
}