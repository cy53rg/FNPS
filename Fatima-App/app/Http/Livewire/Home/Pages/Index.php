<?php

namespace App\Http\Livewire\Home\Pages;

use App\Models\Post;
use App\Models\Staff;
use App\Models\Banner;
use Livewire\Component;
use App\Models\Parentcomment;

class Index extends Component
{
    public function render()
    {
        
        $banner = Banner::firstWhere('title', 'home');
        $staffs = Staff::all();
        $posts = Post::latest()->paginate(6);

        return view('livewire.home.pages.index',['banner'=> $banner, 'staffs'=> $staffs, 'posts'=> $posts])
        ->layout('layouts.homeLayout', ['title'=> 'Home']);
    }
}
