<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 26/12/2018
 * Time: 14:58
 */

namespace Cliente\FisicoJuridico;

interface ClientesPJ {

    public function getCnpj();
    public function setCnpj($cnpj);

    public function getCobranca();
    public function setCobranca($cobranca);

}