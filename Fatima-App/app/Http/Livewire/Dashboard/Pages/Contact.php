<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\Contact as Contacts;
use Livewire\Component;
use Livewire\WithPagination;

class Contact extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function delete(Contacts $contact){
        $contact->delete();

        session()->flash('deleteMsg', 'deleted');
        return $this->render();
    }
    public function render()
    {
        // dd(Contacts::paginate(10));
        return view('livewire.dashboard.pages.contact', ['contacts'=> Contacts::paginate(10)])
        ->layout('layouts.dashboardLayout', ['title'=> 'Contact']);

    }
}
