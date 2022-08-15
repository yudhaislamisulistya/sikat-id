<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function dashboard ()
    {
        if(!session()->get("LoggedUserData")){
			session()->setFlashData("error", "Anda Telah Berhasil Login");
			return redirect()->to(base_url());
		}
        return view('panel/dashboard');
    }

    public function profile(){
        return view('panel/profile');
    }
}
