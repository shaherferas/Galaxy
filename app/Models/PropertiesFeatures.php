<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiesFeatures extends Model
{
    use HasFactory;
    protected $fillable = ['text'];
    public function properties()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
