<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Gallery extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $title, $description, $image, $cate;
    
    // protected $rules = [
    //     'title'=> 'requires|string',
    //     'description'=> 'requires|string',
    //     'image'=> 'requires|image',
    // ];
    public function save(){
        // $this->validate();

        $data = [
            'title'=> $this->title,
            'description'=> $this->description,
            'category'=> $this->cate
        ];

        try {
            //code...
            $image1 = $this->image->store('public');
            $uploaded = cloudinary()->upload($this->image->getRealPath(), ['folder'=> 'Gallery']);

            $data['image'] = $uploaded->getSecurePath();
            $data['image1'] = $image1;

            $save = Post::create($data);

            if($save){
                session()->flash('successMsg', 'Saved');
                $this->reset();
                return $this->render();
            }
            session()->flash('successMsg', 'error');
            return $this->render();
        } catch (\Error $error) {
            session()->flash('successMsg', $error);
            return $this->render();
        }

    }

    public function delete($id){
        $deleted = Post::destroy($id);

        if($deleted){
           session()->flash('deleteMsg', 'deleted');
           return $this->render();
        }
    }

    public function render()
    {
        return view('livewire.dashboard.pages.gallery', ['posts'=> Post::latest()->paginate(10)])
        ->layout('layouts.dashboardLayout', ['title'=> 'Gallery']);

    }
}
