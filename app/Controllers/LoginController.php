<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
	public function index()
	{
        echo view('layouts/header');
		echo view('login_view');
        echo view('layouts/footer');
	}

	public function inicio(){
		$request = \Config\Services::request();
		$userModel = new UserModel();
		$session = \Config\Services::session();
		$email = $request->getPost('email');
		$contraseña = $request->getPost('password');
		$usuario = $userModel->InicioSesion($email,$contraseña);
		if(count($usuario) > 0){
			$newdata = [
				'username'  => $email,
				'email'     => 'johndoe@some-site.com',
				'rol' => 'Admin'
		];

		$session->set($newdata);
		return redirect()->to('/?id=1');
		}else{
			echo "datos incorrectos";
		}


	}


}


