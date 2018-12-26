<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 26/12/2018
 * Time: 14:37
 */

namespace Cliente\Data;

use \PDO;

class PersistirDadosCliente
{

    protected $pdo;
    protected $clientes;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function persisti($cliente){
        $this->clientes[]=$cliente;
        return $this;
    }

    public function flush(){
        foreach ($this->clientes as $cliente) {
            $stmt = $this->pdo->prepare("INSERT INTO clientes(nome, endereco, enderecoCobranca, importancia, tipoCliente, numId) VALUES(:nome, :endereco, :enderecoCobranca, :importancia, :tipoCliente, :numId)");
            $stmt->bindValue(":nome",$cliente->getNome());
            $stmt->bindValue(":endereco",$cliente->getEndereco());
            $stmt->bindValue(":cobranca",$cliente->getCliente()=="PJ" ? $cliente->getCobranca() : '');
            $stmt->bindValue(":importancia",$cliente->getImportancia());
            $stmt->bindValue(":cliente",$cliente->getCliente());
            $stmt->bindValue(":numID",$cliente->getCliente()=="PF" ? $cliente->getCPF() : $cliente->getCNPJ());
            $stmt->execute();
        }
    }

    /**
     * @return mixed
     */
    public function getClientes()
    {
        return $this->clientes;
    }
}