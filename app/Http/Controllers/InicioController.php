<?php

namespace Intensivettt\Http\Controllers;

class InicioController Extends Controller
{
	public function inicio()
	{
		return view("home");
	}
}