<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;

    #[Title('Blog')]
    public function render()
    {
        // Paginate the main blog posts
        $posts = BlogPost::latest()->paginate(12);

        return view('livewire.blog', [
            'posts' => $posts
        ]);
    }
}
