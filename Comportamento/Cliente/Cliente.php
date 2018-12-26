<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 20/12/2018
 * Time: 14:09
 */

namespace Cliente;

use Cliente\FisicoJuridico\Importancia;

abstract class Cliente implements Importancia
{
    protected $id;
    protected $Cliente;
    protected $nome;
    protected $endereco;
    protected $importancia;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->Cliente;
    }

    /**
     * @param mixed $Cliente
     */
    public function setCliente($Cliente)
    {
        $this->Cliente = $Cliente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * @param mixed $importancia
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }


}