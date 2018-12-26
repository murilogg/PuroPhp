<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 26/12/2018
 * Time: 14:54
 */

namespace Cliente\Tipo;

use Cliente\Cliente;
use Cliente\FisicoJuridico\ClientesPF;

class ClientePF extends Cliente implements ClientesPF {

    private $cpf;

    public function __construct($id, $nome, $cpf, $importancia, $endereco){
        $this->id = $id;
        $this->Cliente = 'PF';
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->importancia = $importancia;
        $this->endereco = $endereco;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

}