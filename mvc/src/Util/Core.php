<?php

// namespace Util;

class Core
{
    public function start($getUrl)
    {

        $controller = "HomeController";
        $metodo     = 'index';
        $id         = null;
        
        // Verifico metodo se existe e configuro
        if (isset($getUrl['metodo'])) {
            $metodo = $getUrl['metodo'];
        }

        // Verifico page se existe e configuro a controller
        if (isset($getUrl['page'])) {
            $controller = ucfirst($getUrl['page'].'Controller');
        }

        // Verifico se class referente a controller não existe e configuro
        if (!class_exists($controller)) {
            $controller = 'ErroController';
        }

        // Verifico id se não existe e configuro
        if (isset($getUrl['id']) && $getUrl['id'] != null) {
            $id = $getUrl['id'];
        }

        call_user_func_array(array(new $controller, $metodo), array('id' => $id));
    }
}
