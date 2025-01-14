<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\Property;
use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        $propCount = Property::all()->count();
        $props = Property::paginate(4);
        $aptCount = Property::whereIn('property_type_id',[30,41])->count();
        $countriesCount = Country::all()->count();
        return view('livewire.counter',
        [
            "propCount"=>$propCount,
            "countriesCount"=>$countriesCount,
            "aptCount"=>$aptCount,
            "props"=>$props,
        ]);
    }
}
