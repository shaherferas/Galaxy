<?php

namespace App\Livewire;

use App\Models\ParentPropertyType;
use App\Models\SocialLink;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Property;
use App\Models\Country;
use App\Models\PropertyType;

class PropertyFilter extends Component
{


    public $propertyTypes =[];



    public function onEstateSelectionChange($value)
    {
        \Log::info('Started onEstateSelectionChange: ' . now());

        $start = microtime(true);
        $this->propertyTypes = PropertyType::where('parent_types_id', $value)->get();
        $end = microtime(true);

        \Log::info('Filtering Time: ' . ($end - $start) . ' seconds');
        \Log::info('Finished onEstateSelectionChange: ' . now());
    }
    #[Title('props')]

    public function render()
    {
        return view('livewire.components.property-filter',[


            "countries"=>Country::all(),
            "estateSelections"=>ParentPropertyType::all(),
        ]);
    }
}
