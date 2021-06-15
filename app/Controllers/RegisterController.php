<?php

namespace App\Controllers;

use App\Models\UserModel;
class RegisterController extends BaseController
{
	public function index()
	{
        echo view('layouts/header');
		echo view('register_view');
        echo view('layouts/footer');
	}

	public function agregarUser (){
		
		$request = \Config\Services::request();
		$userModel = new UserModel();
		$nombre = $request-> getPost('nombre');
		$email = $request -> getPost('email');
		$pais = $request -> getPost('pais');
		$cuidad = $request -> getPost('cuidad');
		$password = $request->getPost('password');
		$rol = $request ->getPost('rol');
		$userModel->agregarUser($nombre,$email,$pais,$cuidad,$password,$rol);
		


		return redirect()->to('/');


		
	}
}
