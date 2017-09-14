<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 14/09/17
 * Time: 10:56
 */

require_once 'Interface/iFrontController.php';
require_once 'Controller/Welcome.php';

class FrontController implements iFrontController
{
    public static $counterRun = 0;

    const DEFAULT_CONTROLLER = 'Welcome';
    const DEFAULT_METHOD     = 'index';

    protected $controller = self::DEFAULT_CONTROLLER;
    protected $method     = self::DEFAULT_METHOD;
    protected $params     = array();

    protected $basePath   = 'php_designpatterns/frontController/';
    protected $controllerPath = 'Controller/';

    public function __construct(array $options = array())
    {
        if(empty($options))
        {
            $this->parseUri();
        }
        else
        {
            $options_keys = array('controller', 'method', 'params');
            foreach($options_keys as $option_key)
            {
                $setMethodName = 'set';
                if(isset($options[$option_key]))
                {
                    $setMethodName .= ucfirst(strtolower($option_key));
                    $this->$setMethodName($options[$option_key]);
                }
            }
        }
    }

    public function setController($controller)
    {
        // TODO: Implement setController() method.
        $controllerName = ucfirst(strtolower($controller));
        if(file_exists($this->controllerPath . $controllerName . '.php'))
        {
            include $this->controllerPath . $controllerName . '.php';
            if(!class_exists($controllerName))
            {
                throw new InvalidArgumentException("Classe {$controllerName} nao declarada.");
            }
        }
        else
        {
            throw new InvalidArgumentException("Arquivo {$controllerName} nao existe.");
        }
        $this->controller = $controllerName;
        return $this;

    }

    public function setMethod($method)
    {
        // TODO: Implement setMethod() method.
        $reflector = new ReflectionClass($this->controller);
        if(!$reflector->hasMethod($method))
        {
            throw new InvalidArgumentException("Metodo {$method} nao declarado");
        }
        $this->method = $method;
        return $this;

    }

    public function setParams(array $params)
    {
        // TODO: Implement setParams() method.
        $this->params = $params;
    }

    public function run()
    {
        // TODO: Implement run() method.
        call_user_func_array(array(new $this->controller, $this->method), $this->params);
    }

    protected function parseUri()
    {
        $path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");

        if(strpos($path, $this->basePath) === 0)
        {
            $path = substr($path, strlen($this->basePath));
        }

        list($controller, $method, $params) = explode("/", $path, 3);
        $params = explode("/", $params);
        $this->__construct(array('controller' => $controller, 'method' => $method, 'params' => $params));
    }
}