<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = ['title','type','estate_selection','country_id','price','property_type_id'];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'property_type', 'id');
    }
    public function features()
    {
        return $this->hasOne(PropertiesFeatures::class, 'property_id', 'id');
    }
}
