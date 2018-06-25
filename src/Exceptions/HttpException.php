<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 21/06/2018
 * Time: 14:23
 */

namespace Projeto\Gerenciamento\Exceptions;

class HttpException extends \Exception
{
    public function __construct($message, $code, \Exception $previous = null)
    {
        http_response_code($code);
        parent::__construct($message, $code, $previous);
    }
}