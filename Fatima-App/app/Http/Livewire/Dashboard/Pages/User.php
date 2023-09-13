<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\User as Users;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class User extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public  $name, $password, $email;


    protected $rules = [
        'name'=> 'required|string',
        'email'=> 'required|email',
        'password'=> 'required|string|',
    ];

    public function save(){
        $this->validate();

        $data = [
            'name'=> $this->name,
            'email'=> $this->email,
            'password'=> Hash::make($this->password),
        ];

        $user = Users::create($data);

        if($user){
            session()->flash('successMsg', 'User Added');
            $this->reset();
            return $this->render();
        }
        session()->flash('errorMsg', 'error');
        $this->reset();
    }
    
    public function delete($id){

        $user = Users::destroy($id);

        if($user){

            session()->flash('deleteMsg', 'deleted');
            return $this->render();
        }
        session()->flash('deleteMsg', 'error');
        return $this->render();
    }
    
    public function render()
    {
        return view('livewire.dashboard.pages.user', ['users'=> Users::latest()->paginate(20)])
        ->layout('layouts.dashboardLayout', ['title'=> 'User']);
    }
}
