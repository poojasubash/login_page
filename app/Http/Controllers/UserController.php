<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('Login');
    }
    public function addUser(Request $request)
    {
       // dd($request->all());
       person::create($request->all());
    }
}
