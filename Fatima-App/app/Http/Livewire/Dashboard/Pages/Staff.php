<?php

namespace App\Http\Livewire\Dashboard\Pages;

use Livewire\Component;
use Cloudinary\Cloudinary;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Staff as Staffs;
use Illuminate\Support\Facades\Storage;
use Cloudinary\Configuration\Configuration;

class Staff extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $fullName, $email, $image, $description, $office;
          
    

    public function save(){

        
       
        
        $validate = request()->validate([
            'fullName'=> 'required',
            'email'=> 'required|email',
            'image'=> 'required|image',
            'description'=> 'required|string',
            'office'=> 'required|string',
        ]);

        try {
            //code...
            $imageStore = $validate['image']->store('staff', 'public');
            $filename= $validate['image']->getRealPath();

        $upload = cloudinary()->upload($filename,['folder'=> 'staff' ]);

        // array
        // $images =  [$imageStore, $upload->getSecurePath()];
        $images =  $upload->getSecurePath();

        // dd($images);

        // mergin to string
        // $validate['image'] = implode( ',', $images);
        $validate['image'] = $images;
        $validate['image1'] = $imageStore;

        $check = Staffs::firstWhere('fullName');
        if(isset($check)){
            session()->flash('errorMsg', 'Staff already exists');
            return redirect()->back();
        }
        $stored = Staffs::create($validate);

        if($stored){
            session()->flash('successMsg', 'Staff Added');
            return redirect()->back();
        }


        } catch (\Err $err) {
            //throw $th;
            session()->flash('errorMsg', $err);
            return redirect()->back();
        }
        
        

    }


    public function delete($id){
         $deleted = Staffs::destroy($id);

         if($deleted){
            session()->flash('deleteMsg', 'deleted');
            return $this->render();
         }
    }

    public function render()
    {
        return view('livewire.dashboard.pages.staff', ['staffs'=> Staffs::latest()->paginate(15)])
        ->layout('layouts.dashboardLayout', ['title'=> 'Staff']);

    }
}
