<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 25/06/2018
 * Time: 08:27
 */

namespace Projeto\Gerenciamento;


class Response
{
    public function __invoke($action, $params)
    {
        echo $action($params);
    }
}