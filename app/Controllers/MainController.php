<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function dashboard ()
    {
        return view('panel/dashboard');
    }
}
