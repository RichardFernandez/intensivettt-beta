<?php

namespace Intensivettt\Http\Controllers;

use Intensivettt\User;
use Intensivettt\Medida;
class InicioController Extends Controller
{
	public function inicio()
	{

		$users = User::all();


 		return view("home", ['users' => $users]);


	}
}