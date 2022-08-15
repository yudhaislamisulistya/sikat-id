<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class MainController extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
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

    public function dashboard_lecturer(){
        if (getUserByEmail(session()->get('LoggedUserData')['email'])['address'] == NULL) {
            return view('lecturer/check-address');
        }else{
            return view('lecturer/dashboard');
        }
    }

    public function check_address_save(){
        try {
            $data = $this->request->getVar();
            $this->userModel->set(['address' => $data['address']])->where('email', session()->get('LoggedUserData')['email'])->update();
            return redirect()->back()->with('status', 'success');
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'failed');
        }
    }
}
