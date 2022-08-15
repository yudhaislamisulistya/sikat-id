<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class OtentikasiController extends BaseController
{
    private $userModel = NULL;
    private $googleClient = NULL;
    public function __construct()
    {
        require_once APPPATH . '../vendor/autoload.php';
        $this->userModel = new UserModel();
        $this->googleClient = new \Google_Client();
        $this->googleClient->setClientId('105434994463-3gqu882sg6gbgtuv89fqnimdh96ukqkp.apps.googleusercontent.com');
        $this->googleClient->setClientSecret('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');
        $this->googleClient->setRedirectUri('http://localhost:8080/login');
        $this->googleClient->addScope('email');
        $this->googleClient->addScope('profile');

    }
    public function index()
    {
        if(session()->get("LoggedUserData")){
			session()->setFlashData("error", "Anda Telah Berhasil Login");
			return redirect()->to(base_url()."/panel/dashboard");
		}
        $data['googleButton'] = '<a class="login-btn" href="'.$this->googleClient->createAuthUrl().'">
        <img src="'.base_url().'/assets/images/btn_google.png" class="w-30 img-fluid rounded mx-auto d-block" alt="...">
        </a>';
        return view('login', compact('data'));
    }
    public function login(){
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
		if(!isset($token['error'])){
			$this->googleClient->setAccessToken($token['access_token']);
			session()->set("AccessToken", $token['access_token']);

			$googleService = new \Google_Service_Oauth2($this->googleClient);
			$data = $googleService->userinfo->get();
			$userdata=array();
            $checkData = $this->userModel->where('oauth_id', $data['id'])->first();
			if($checkData){
				//User yang Telah Ada dan akan Login Kembalir
				$userdata = [
					'name'=>$data['givenName']. " ".$data['familyName'], 
					'email'=>$data['email'] , 
					'profile_img'=>$data['picture'], 
					'role'=>$checkData['role'], 
				];
				$this->userModel->update($data['id'], $userdata);
			}else{
				//Menambah User Yang Ingin Login
				$userdata = [
					'oauth_id'=>$data['id'],
					'name'=>$data['givenName']. " ".$data['familyName'], 
					'email'=>$data['email'] , 
					'profile_img'=>$data['picture'],
					'role' => 1
				];
				$this->userModel->insert($userdata);
			}
			session()->set("LoggedUserData", $userdata);

		}else{
			session()->setFlashData("error", "Ada Sesuatu yang Salah");
			return redirect()->to(base_url());
		}
		//Login Berhasil
		return redirect()->to(base_url()."/panel/admin/dashboard");
    }

    function logout(){
		session()->remove('LoggedUserData');
		session()->remove('AccessToken');
		if(!(session()->get('LoggedUserData') && session()->get('AccessToken') )){
			session()->setFlashData("Success", "Logout Successful");
			return redirect()->to(base_url());
		}else{
			session()->setFlashData("Error", "Failed to Logout, Please Try Again");
			return redirect()->to(base_url()."/profile");
		}
	}
}
