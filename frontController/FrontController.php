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
    protected $basePath   = 'Controller/';

    public function __construct(array $options = array())
    {
        if(empty($options))
        {
            $this->parseUri();
        }
        else
        {
            if (isset($options["controller"])) {
                $this->setController($options["controller"]);
            }
            if (isset($options["method"])) {
                $this->setMethod($options["method"]);
            }
            if (isset($options["params"])) {
                $this->setParams($options["params"]);
            }
        }
    }

    public function setController($controller)
    {
        // TODO: Implement setController() method.
        $controllerName = ucfirst(strtolower($controller));
        if(file_exists($this->basePath . $controllerName . '.php'))
        {
            include $this->basePath . $controllerName . '.php';
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
        call_user_func(array(new $this->controller, $this->method), $this->params);
    }

    protected function parseUri()
    {
        echo $_SERVER['REQUEST_URI'];
    }
}