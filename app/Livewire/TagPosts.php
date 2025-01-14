<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tag;

class TagPosts extends Component
{

    public $tagName;

    public function mount($tagName)
    {
        $this->tagName = $tagName;
    }
    public function render()
    {
        $tag = Tag::where('name', $this->tagName)->firstOrFail();
        $posts = $tag->posts()->paginate(6);

        return view('livewire.tag-posts', [
            "tag"=>$tag,
            "posts"=>$posts
        ]);
    }
}
