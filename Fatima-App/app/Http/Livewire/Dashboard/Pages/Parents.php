<?php

namespace App\Http\Livewire\Dashboard\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Parentcomment;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class Parents extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $fullName, $image, $comment;
    public $updateFullName, $updateImage, $updateComment, $updateId;
          
    

    public function save(){

        $validate = request()->validate([
            'fullName'=> 'required',
            'image'=> 'required|image',
            'comment'=> 'required|string',
        ]);

        try {
            //code...
            $imageStore = $validate['image']->store('parent', 'public');
            $filename= $validate['image']->getRealPath();

            $upload = cloudinary()->upload($filename,['folder'=> 'parents' ]);

            // array
            // $images =  [$imageStore, $upload->getSecurePath()];
            $images =  $upload->getSecurePath();

            // dd($images);

            // mergin to string
            // $validate['image'] = implode( ',', $images);
            $validate['image'] = $images;
            $validate['image1'] = $imageStore;

            $check = Parentcomment::firstWhere('fullName');
            if(isset($check)){
                session()->flash('errorMsg', 'Staff already exists');
                return redirect()->back();
            }
            $stored = Parentcomment::create($validate);

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
    public function edit(Parentcomment $comment){
        if(isset($comment)){
            $this->updateId = $comment->id;
            $this->updateFullName = $comment->fullName;
            $this->updateComment = $comment->comment;
        }
    }
    public function update(){
        
        $data = [
            'fullName'=> $this->updateFullName,
            'comment'=> $this->updateComment
        ];

        if(isset($this->id)){
            $updateData = Parentcomment::find($this->updateId);
            // dd('ehre');
            if(isset($updateData)){
                // dd('ehre11');

                if(isset($this->updateImage)){
                    try {
                        //code...
                        $imageStore = $this->updateImage->store('parent', 'public');
                        $filename= $this->updateImage->getRealPath();
            
                        $upload = cloudinary()->upload($filename,['folder'=> 'parents' ]);
            
                        $images =  $upload->getSecurePath();
            
                        $updateData->image = $images;
                        $updateData->image1 = $imageStore;

                    } catch (\Err $err) {
                        //throw $th;
                        session()->flash('errorMsg', $err);
                        return redirect()->back();
                    }
                }

                $updateData->fullName = $this->updateFullName;
                $updateData->comment = $this->updateComment;
                $stored = $updateData->save();
                session()->flash('successMsg', ' Added');
                return $this->render();
            }
        }

    }


    public function delete($id){
         $deleted = Parentcomment::destroy($id);

         if($deleted){
            session()->flash('deleteMsg', 'deleted');
            return $this->render();
         }
    }
    
    public function render()
    {
        return view('livewire.dashboard.pages.parents', ['comments'=> Parentcomment::latest()->paginate()])
        ->layout('layouts.dashboardLayout', ['title'=> 'Parent Comments']);
    }
}
