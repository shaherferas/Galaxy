<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class Clients extends Component
{
    public function render()
    {
        $clients = Client::all();
        return view('livewire.clients',[
            "clients"=>$clients
        ]);
    }
}
