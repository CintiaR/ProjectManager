<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 22/06/2018
 * Time: 12:37
 */

use APP\Models\User;

$router->add('GET', '/', function () use ($container){

    return 'Pagina Principal';
});
$router->add('GET','/user/(\d+)', function ($params) use ($container){
   return (new APP\Controller\UserController)->show($params[1]);
});