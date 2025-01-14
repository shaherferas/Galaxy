<?php

namespace App\Livewire;

use App\Models\SocialLink;
use Livewire\Component;
use App\Models\AboutUs as model;
class AboutUs extends Component
{
    public function render()
    {
        $aboutUs = model::first();
        return view('livewire.about-us',[
            'data'=>$aboutUs]);
    }
}
