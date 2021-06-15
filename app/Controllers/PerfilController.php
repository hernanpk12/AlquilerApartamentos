<?php

namespace App\Controllers;

class PerfilController extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('perfil_view');
		echo view('layouts/footer');
	}
}


