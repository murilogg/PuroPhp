<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 26/12/2018
 * Time: 15:45
 */

namespace Cliente\Tipo;

use  Cliente\Cliente;
use Cliente\FisicoJuridico\ClientesPJ;

class ClientePJ extends Cliente implements ClientesPJ{

    private $cnpj;
    private $cobranca;

    public function __construct($id, $nome, $cnpj, $importancia, $endereco, $cobranca){
        $this->id = $id;
        $this->Cliente = 'PJ';
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->importancia = $importancia;
        $this->endereco = $endereco;
        $this->cobranca = $cobranca;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCobranca()
    {
        return $this->cobranca;
    }

    /**
     * @param mixed $cobranca
     */
    public function setCobranca($cobranca)
    {
        $this->cobranca = $cobranca;
        return $this;
    }




}