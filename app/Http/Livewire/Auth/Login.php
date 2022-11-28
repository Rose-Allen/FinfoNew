<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{
    public $bin;
    public $password;
    public $remember;

    protected $rules = [
        'bin' => 'required',
        'password' => 'required',
    ];

//    public function updated($propertyName)
//    {
//        $this->validateOnly($propertyName);
//    }

    public function login(){
        $validatedData = $this->validate();
//        dd($validatedData);

        if (!Auth::attempt(['bin' => $this->bin, 'password' => $this->password], $this->remember)) {
            dd('Not authorized');
        }

        $this->redirect(RouteServiceProvider::HOME);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
