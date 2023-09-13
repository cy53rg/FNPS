<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    use WithFileUploads;
    public $user, $image, $title;

    public function mount()
    {
        // $this->user = request()->user();
    }

    public function save()
    {
        $banner = [
            'title'=> $this->title,
        ];

        try {
            //code...dd

            // dd($this->image);
            $check = Banner::where('title', $this->title)->first();
            if(isset($check)){
                $image1 = $this->image->store('public');
                $uploaded = cloudinary()->upload($this->image->getRealPath(), ['folder'=> 'banner']);

                $check->image = $uploaded->getSecurePath();
                $check->image1 = $image1;
                $check->save();
                session()->flash('successMsg', 'Updated');
                return $this->render();
            }

            $image1 = $this->image->store('public');
            $uploaded = cloudinary()->upload($this->image->getRealPath(), ['folder'=> 'banner']);
            $banner['image'] = $uploaded->getSecurePath();
            $banner['image1'] = $image1;

            $saved = Banner::create($banner);

            if($saved){
                session()->flash('successMsg', 'saved');
                return $this->render();
            }
            return session()->flash('errorMsg', 'error');

        } catch (\Err $err) {
            //throw $th;
            session()->flash('errorMsg', $err);
            return $this->render();
        }
        

    }

    public function delete($id){

        if($id){
            $deleted = Banner::destroy($id);

            if($deleted){
                session()->flash('deleteMsg', 'deleted');
                return $this->render();
            }
            return session()->flash('deleteMsg', 'error');
        }
        return session()->flash('deleteMsg', 'error');
    }

    public function logout(){
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
    return redirect('/');
    }

    public function render()
    {
        $this->user = request()->user();

        $banner  = Banner::all();
        return view('livewire.dashboard.pages.index', ['banners'=>$banner])
        ->layout('layouts.dashboardLayout', ['title'=> 'Dashboard']);
    }
}
