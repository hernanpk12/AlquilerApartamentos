<?php

namespace App\Controllers;

use App\Models\UserModel;

class HomeController extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('home_view');
		echo view('layouts/footer');
	}
	


}


