<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uzer;

class SoftquickController extends Controller
{
    public function loginPage()
    {
        return view('loginpage');


    }

    // public function Login(Request $request)
    // {
    //     $meeting = new Uzer();
    //         $meeting->username = $request->$this->username;
    //         $meeting->password = $request->$this->password;
    //         $meeting->save();
    //         return back();
    // }
}
