<?php

namespace App\Http\Livewire\Home\Pages;

use Exception;

use App\Models\Banner;
use Livewire\Component;
use App\Mail\mailNotify;
use App\Models\Contact as Contacts;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $fullName, $subject, $email, $message, $phoneNumber;
    protected $rules = [
        'subject'=> 'required|string',
        'message'=> 'required|string',
        'fullName'=> 'required|string',
        'email'=> 'required|email',
        'phoneNumber'=> 'required|string',
    ];
    public function SendData(){
        $validated = $this->validate();
        
        // dd($validated);
        $check = Contacts::firstWhere('subject', $validated['subject']);
        
        if(isset($check)){
            session()->flash('errorMsg', 'Already Exists');
            return $this->reset();
        }
        
        $save = Contacts::create($validated);

        try {
            //code...
            $mail = Mail::to('gadgray1@gmail.com')->send(new mailNotify($save));
            session()->flash('successMsg', 'mail sent');


        } catch (Exception $e) {
            //throw $th;
            session()->flash('errorMsg', $e->getMessage());
        }
        
        if($save){
            session()->flash('successMsg', 'await response via email');
            return $this->reset();
        }

    }

    public function render()
    {
        $banner = Banner::firstWhere('title', 'home');

        return view('livewire.home.pages.contact', ['banner'=> $banner])
        ->layout('layouts.homeLayout', ['title'=> 'Contact']);
    }
}
