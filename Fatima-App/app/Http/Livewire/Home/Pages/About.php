<?php

namespace App\Http\Livewire\Home\Pages;

use App\Models\Staff;
use App\Models\Banner;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Parentcomment;

class About extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $banner = Banner::firstWhere('title', 'about');
        $staffs = Staff::paginate();
        $comments = Parentcomment::all();
        return view('livewire.home.pages.about', ['banner'=> $banner, 'comments'=> $comments, 'staffs'=>$staffs])
        ->layout('layouts.homeLayout', ['title'=> 'About']);
    }
}
