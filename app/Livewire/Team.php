<?php

namespace App\Livewire;

use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        $team = \App\Models\Team::all();

        return view('livewire.team',
        [
            'team'=>$team
        ]
        );
    }
}
