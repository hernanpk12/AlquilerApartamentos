<?php

namespace App\Controllers;
use App\Models\UserModel;

class AddapartmentController extends BaseController
{
	public function index()
	{
        echo view('layouts/header');
		echo view('Addapartment_view');
        echo view('layouts/footer');
	}
	
	public function registrarApt(){
		$session = session();
		echo $session->get('username');
		$session = \Config\Services::session();
		if($session -> get ('username')==""){
			echo "No tiene permisos para acceder";
		}else{
			if($session -> get ('rol')=="Admin"){
		$request = \Config\Services::request();
		$userModel = new UserModel();
		$id = $request->getGet('id');
		$user = $userModel->obtenerUsuario($id);
		echo view('layouts/header');
		echo view('Addapartment_view',array("user"=>$user));
        echo view('layouts/footer');
	}else{
		echo "Debes tener permisos de administrador";
	   }
     }
	}

	public function agregarApt(){
		
		$request = \Config\Services::request();
		$userModel = new UserModel();
		$cuidad = $request-> getPost('cuidad');
		$pais = $request -> getPost('pais');
		$direccion = $request -> getPost('direccion');
		$ubicacion = $request -> getPost('ubicacion');
		$numeroHabitaciones = $request->getPost('habitaciones');
		$imagen =$request ->getFile ('imagen');
		$imagenDestacada = $request ->getFile('imagenDestacada');
		$imageName = $imagen->getRandomName();
		$imagenUrl = "";
		if ($imagen->isValid() && !$imagen->hasMoved()) {
			$imagen->move('./uploads/images/', $imageName);
			$imagenUrl = base_url() ."/uploads/images/" . $imageName;
		}
		$imageName2 = $imagenDestacada->getRandomName();
		$imagenUrl2 = "";
		if ($imagenDestacada->isValid() && !$imagenDestacada->hasMoved()) {
			$imagenDestacada->move('./uploads/images/', $imageName2);
			$imagenUrl2 = base_url() ."/uploads/images/" . $imageName2;
		}
		$valor = $request ->getPost('valor');
		$reseña = $request ->getPost('reseña');
		$userModel->agregarApartamento($cuidad,$pais,$direccion,$ubicacion,
		$numeroHabitaciones,$imagenUrl,$imagenUrl2,$valor,$reseña);
		


		return redirect()->to('/');


		
	}

/*	private function uploadFile($file){
		$imageName = $file->getRandomName();

		$imageUrl='';
		if($file->isValid() && !$file->hasMoved()){
			$file->move('./uploads/images/',$imageName);	
			$imageUrl = base_url() . "/uploads/images/" . $imageName;
		}
		return $imageUrl;
	}*/

}


