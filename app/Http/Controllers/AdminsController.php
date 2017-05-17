<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

class AdminsController extends Controller
{
    public function index(Request $request)
    {}

    public function create()
    {
    	return view('admin.admins.create');
    }

    public function store(Request $request)
    {
    	
    }
}
