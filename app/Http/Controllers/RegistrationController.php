<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('sessions.create');
    }
    public function store()
    {
    	$this->validate(request(), [
    		'name' => 'requiered',
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    }
}
