<?php

namespace app\Http\Controllers;

Class HomeController
{
    public function index(){
        $this->loadView('Home');
    }

    private function loadView($viewName){
        include BASE_DIR . '/resources/views/' . $viewName . '.php';
    }
}