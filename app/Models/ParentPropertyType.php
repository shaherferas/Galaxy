<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentPropertyType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $table = 'parent_property_types';
    public function types()
    {
        return $this->hasMany(PropertyType::class, 'parent_types_id', 'id');
    }
}
