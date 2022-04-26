<?php

namespace App\Controllers;

/**
 * @class Controller
 *
 * This will be the base controller for the application.
 */
class Controller
{
    /**
     * Return the only value in the .env file
     * @return void
     */
    public function index(): void
    {
        echo $_ENV['XDEBUG_MODE'];
    }
}
