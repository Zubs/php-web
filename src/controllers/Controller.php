<?php

namespace App\Controllers;

class Controller
{
    public function index()
    {
        echo $_ENV['XDEBUG_MODE'];
    }
}
