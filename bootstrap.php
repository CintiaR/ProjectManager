<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 20/06/2018
 * Time: 21:00
 */
require_once __DIR__.'/vendor/autoload.php';

$router = new \Projeto\Gerenciamento\Router();

require_once __DIR__.'/config/containers.php';
require_once __DIR__.'/config/routes.php';

try {

    $result = $router->run();
    $response = new Projeto\Gerenciamento\Response();
    $params = [
        'container'=>$container,
        'params' => $result['action']

    ];

    $response($result['action'], $params);

}catch (\Projeto\Gerenciamento\Exceptions\HttpException $e){
    echo $e->getMessage();
}

