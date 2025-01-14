<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Country;
use App\Models\PropertyType;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){

        $socialLinks = SocialLink::all();

        return view('livewire/index',
        [

            "socialLinks"=>$socialLinks,
        ]
        );
    }
    public function search(Request $request)
    {
        $propertiesQuery = Property::query()
                              ->when(request('actionType'), function ($query) {
                                  $query->where('type', request('actionType'));
                              })
                              ->when(request('property_type'), function ($query) {
                                  $query->where('property_type_id', request('property_type'));
                              })
                              ->when(request('country'), function ($query) {
                                  $query->where('country_id', request('country'));
                              })
                              ->when(request('price_range'), function ($query) {
                                  $priceRange = request('price_range');
                                  if ($priceRange !== "") {
                                      [$minPrice, $maxPrice] = array_pad(explode('-', $priceRange), 2, null);
                                      $query->when($minPrice !== null, fn($q) => $q->where('price', '>=', $minPrice * 1_000_000));
                                      $query->when($maxPrice !== null && $maxPrice !== '+', fn($q) => $q->where('price', '<=', $maxPrice * 1_000_000));
                                  }
                              })
            ->with('features');
        return view('livewire.properties', [
            'properties' => $propertiesQuery->paginate(6),
            "socialLinks"=> SocialLink::all(),
            "propertiesCount"=> $propertiesQuery->get()->count(),

        ]);
    }
    public function getById(int $id)
    {
        $property = Property::where("id",$id)->with('features')->first();
        return view('livewire.single_property',[
            'property'=>$property,
            "socialLinks"=> SocialLink::all(),
        ]);
    }

    public function getByState(string $estateSelection)
    {
        $properties = Property::where("estate_selection",$estateSelection)->with('features') ->paginate(6);
        return view('livewire.properties',[
            'properties'=>$properties,
            "socialLinks"=> SocialLink::all(),
        ]);
    }

    public function getByType(string $type)
    {
        $properties = Property::where("type",$type)->with('features') ->paginate(6);
        return view('livewire.properties',[
            'properties'=>$properties,
            "socialLinks"=> SocialLink::all(),
        ]);
    }

}
