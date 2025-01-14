<?php

namespace App\Livewire;

use App\Models\SocialLink;
use Livewire\Component;

class SocialMedia extends Component
{
    public function render()
    {
        $socialLinks = SocialLink::all();

        return view('livewire.social-media',[
            'socialLinks'=> $socialLinks,

        ]);
    }
}
