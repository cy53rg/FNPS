<?php

namespace App\Http\Livewire\Home\Pages;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{   
    public $email, $password;


    public function mount(){

        $check =User::all();

        if($check->count() <= 0){
            $password = Hash::make('@Admin');
            $user = [
                'name'=> 'Admin',
                'password'=> $password,
                'email'=> 'admin@mail.com',
            ];

            $created = User::create($user);
            if($created){
                return session()->flash('successMsg', 'created');
            }
        }
    }
    protected $rules= [
        'email'=> 'required|string|email',
        'password'=> 'required|string',

    ];

    public function authenticate(){
        $this->validate();
        
        $user = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if($user){
            request()->session()->regenerate();
            return redirect('/dashboard');
        }
        session()->flash('errorMsg', 'Unauthorized Access');

    }
    public function render()
    {
        return view('livewire.home.pages.login')
        ->layout('layouts.homeLayout', ['title'=> 'Login']);
    }
}
