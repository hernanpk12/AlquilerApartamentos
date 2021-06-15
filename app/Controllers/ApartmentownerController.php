<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ConsultaApartamento;

class ApartmentownerController extends BaseController
{
	public function index()
	{
        echo view('layouts/header');
		echo view('apartmentowner_view');
        echo view('layouts/footer');
	}

	public function obteCrud(){

		$data = new ConsultaApartamento();
		$datos['listar']= $data->orderBy('id', 'DESC')->findAll();

        echo view('layouts/header');
		echo view('apartmentowner_view',$datos);
        echo view('layouts/footer');
    }

/*	public function AgregarCrud (){
		$request = \Config\Services::request();
		$userModel = new UserModel();
		$nombre = $request->getPost('nombre');
		$apartamento = $request->getPost('apartamento');
		$telefono = $request->getPost('telefono');
		$userModel->agregarCrud($nombre,$apartamento,$telefono);
	}

	public function obtenerUsuarios(){
		$userModel= new UserModel();
		$users = $userModel->obtenerCrud();
		$data = array("crudusuario" => $users);	
		echo view('layouts/header');
		echo view('apartmentowner_view',$data);
        echo view('layouts/footer');
	}


	public function obteCrud(){
		$consulta = new  ConsultaApartamento();

		$data = [
			"consulta" => $consulta->findAll(),
		];
		echo  view ('navbar');
		echo view('apartmentowner_view',$data);

	}*/

}




