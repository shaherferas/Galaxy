<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Attributes\Title;
use Livewire\Component;


class PostDetails extends Component
{
    public $post;

    public function mount($id)
    {
        $this->post = BlogPost::where('id',$id)->with('tags')->first();

    }
    #[Title('Post')]
    public function render()
    {
        $tags = $this->post->tags()->get();

        $latestPosts = BlogPost::latest()->take(3)->get();
        return view('livewire.post-details',[
            "latestPosts"=>$latestPosts,
            "tags"=>$tags
        ]);
    }
}
