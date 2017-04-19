<?php

namespace Intensivettt\Http\Controllers;

use Intensivettt\User;
class InicioController Extends Controller
{
	public function inicio()
	{
		// $name = 'Ricardo';

		// $user = User::find('all');

		// $users = [
		//   $user
		// ];

 		return view("home");
	}
}