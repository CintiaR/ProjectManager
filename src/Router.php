<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 20/06/2018
 * Time: 20:55
 */

namespace Projeto\Gerenciamento;

use Projeto\Gerenciamento\Exceptions\HttpException;

class Router
{
    private $routes = [];

    public function add(string $method, string $pattern, $callback)
    {
        $pattern = '/^'.str_replace('/','\/', $pattern).'$/';
        $method = strtolower($method);
        $this->routes[$method][$pattern] = $callback;
    }

    public function run()
    {
        $url = $this->getUrlCurrent();
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        if (empty($this->routes[$method])){
            throw new HttpException('Pagina não existe erro 404', 404);
        }

        foreach ($this->routes[$method] as $route=>$action){
                if (preg_match($route, $url, $parms)){

                    return compact('action', 'parms');
                }

        }
        /*if(array_key_exists($route, $this->routes)){
            return $this->routes[$route]();
        }*/

        throw new HttpException('Pagina não existe erro 404', 404);
    }


    public function getUrlCurrent()
    {
        $url = $_SERVER['PATH_INFO'] ?? '/' ;


        if (strlen($url) > 1) {
            $url = rtrim($url, '/');
        }
        return $url;
    }
}