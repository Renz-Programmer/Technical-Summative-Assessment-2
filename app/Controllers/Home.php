<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo password_hash('123456', PASSWORD_DEFAULT);
    }
}