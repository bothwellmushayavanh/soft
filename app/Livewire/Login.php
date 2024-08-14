<?php

namespace App\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Uzer;

class Login extends Component
{
public $username;
public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function Login(Request $request)
    {
        $meeting = new Uzer();
            $meeting->username = $request->$this->username;
            $meeting->password = $request->$this->password;
            $meeting->save();
            return back();
    }
}
