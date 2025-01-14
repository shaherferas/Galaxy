<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Component;

class LatestPosts extends Component
{

    public function render()
    {
        return view('livewire.latest-posts',[
            "posts" => BlogPost::latest()->take(4)->get()
        ]);
    }
}
