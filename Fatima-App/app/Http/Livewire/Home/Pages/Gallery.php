<?php

namespace App\Http\Livewire\Home\Pages;

use App\Models\Post;
use App\Models\Banner;
use Livewire\Component;
use Livewire\WithPagination;

class Gallery extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $banner = Banner::firstWhere('title', 'gallery');
        $posts = Post::latest()->paginate(10);
        return view('livewire.home.pages.gallery', ['banner'=> $banner, 'posts'=> $posts])
        ->layout('layouts.homeLayout', ['title'=> 'Gallery']);
    }
}
