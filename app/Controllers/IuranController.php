<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class IuranController extends BaseController
{
    public function index()
    {
        return view('panel/cek-iuran');
    }
}
