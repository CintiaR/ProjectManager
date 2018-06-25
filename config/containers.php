<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 22/06/2018
 * Time: 12:38
 */
use Pimple\Container;

$container = new Container();

$container['db'] = function (){
    $dsn = 'mysql:dbname=Project_Manager;host=127.0.0.1';
    $user = 'root';
    $password = 'root';
    $options = [
      \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $pdo = new \PDO($dsn, $user, $password, $options);

    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    return $pdo;
};