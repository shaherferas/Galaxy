<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;
    protected $fillable = ['name','parent_types_id'];
    public function properties()
    {
        return $this->hasMany(Property::class, 'property_type', 'id');
    }
    public function Parent()
    {
        return $this->belongsTo(ParentPropertyType::class, 'parent_types_id', 'id');
    }
}
