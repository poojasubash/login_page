<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function show()
    {
        return view('Login');
    }
    public function store(Request $request)
    {

        //dd($request->all());
       person::create($request->all());
       return view('/dashboard');
    }
    public function password()
    {
        return view('/reset');
    }
    public function dashboard()
    {
        return view('/dashboard');
    }
}
