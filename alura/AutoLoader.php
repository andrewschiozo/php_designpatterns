<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 14:35
 */
class AutoLoader
{

    public function __construct()
    {
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($className)
    {
        $filename = str_replace("\\", '/', $className) . ".php";
        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        }
        return FALSE;
    }
}